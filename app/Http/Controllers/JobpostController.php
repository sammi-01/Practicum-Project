<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Jobpost;
use App\Models\User;
use Carbon\Carbon;
class JobpostController extends Controller
{
    // List job posts with pagination
    public function post()
    {
        $allcompany=User::all();
        $alljobpost = Jobpost::with('category','user')->get();
        return view('backend.partials.jobpostlist', compact('alljobpost','allcompany'));
    }

    // Show form for creating a new job post
    public function postform()
    {
        $allcategory = Category::all();
        $allcompany = User::all();  // Assuming companies are stored in the users table
        return view('backend.partials.jobpostform', compact('allcompany', 'allcategory'));
    }

    // Store a new job post
    public function poststore(Request $request)
    {
        //dd($request->all());
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'working_hour' => 'required',
            'salary' => 'required',
            'experience' => 'required',
            'company_id' => 'required',
            'category_id' => 'required',
            'fromdate'=>'required|date|after_or_equal:'.date('Y-m-d'),
            'todate'=>'required|date|after_or_equal:'.date('Y-m-d'),
            
        ]);
      
        if ($validation->fails())
        
        {
            //dd($validation->fails());
            //dd($validation->getMessageBag());
          flash()->error($validation->getMessageBag());
          
          return redirect()->back();
        }
    $fromdate=$request->fromdate;
    $todate=$request->todate;

    $start = Carbon::parse(date('Y-m-d',strtotime($fromdate)));
    $end = Carbon::parse(date('Y-m-d',strtotime($todate)));
   

    $days = (int)$start->diffInDays($end);
    $price=50;
       $jobpost = Jobpost::create([
            'title' => $request->title,
            'description' => $request->description,
            'working_hour' => $request->working_hour,
            'salary' => $request->salary,
            'experience' => $request->experience,
            'companyid' => $request->company_id,
            'categoryid' => $request->category_id,
            'fromdate'=>$request->fromdate,
            'todate'=>$request->todate,
            'postcost'=>$days*$price,
            'payment_method'=>$request->payment_method
        ]);
        if($request->payment_method == 'online')
        {
            $payment=new SslCommerzPaymentController();

            $payment->index($jobpost);
            
        }
         
        return redirect()->route('jobpost.list');
    }
    
    public function invoice($p_id)
    {
 return view('backend.partials.page.invoice');
    }


    public function delete($p_id)
    {

        // Product::find($id)->delete();
        $jobpost=Jobpost::find($p_id);
        $jobpost->delete();
        notify()->success('jobpost Deleted successfully.');

        return redirect()->back();

        
    }


    public function view($id)
    {
        $jobpost=Jobpost::find($id);

        return view('backend.partials.page.jobpost-view',compact('jobpost'));
    }

}


    

    //     return redirect()->route('jobpost.list')->with('success', 'Job Post updated successfully');
    // }

    