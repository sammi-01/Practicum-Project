@extends('master')
@section('content')
<h1>Reports</h1>
<form class="form-inline my-2 my-lg-0" id="search-form" action="{{route('report.generate')}}">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">From</label>
    <input value="{{request()->from_date}}" name="from_date" type="date" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your entry date">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">To</label>
    <input value="{{request()->to_date}}" name="to_date" type="date" required class="form-control" id="exampleInputPassword1" placeholder="Enter your return date">
  </div>

<div class="form-group">
    
<button type="submit" class="btn btn-info"><label for="exampleInputPassword1">Search</label></button>
              
            
</div>
  

  </form>

  <div class="container">
<button class="btn btn-info mt-5 md-5" onClick="printReport()">Print</button>
    
    <div class="card" id="printArea">
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <h1>Report</h1>
      <h4>Date:{{request()->from_date}} to {{request()->to_date}}</h4>
    </div>
    <div class="col-md-4"></div>
  </div>
  <div>
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Jobpost_id</th>
      <th scope="col">Title</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Postcost</th>
      
     

    </tr>
  </thead>
  <tbody>

@foreach($alljobpost as $jobpost)
 
<tr>
      <th scope="row">{{$jobpost->id}}</th>
      <th scope="row">{{$jobpost->title}}</th>
      <th scope="row">{{$jobpost->fromdate}}</th>
      <th scope="row">{{$jobpost->todate}}</th>
      <th scope="row">{{$jobpost->postcost}}.BDT</th>
     
      
    </tr>
    @endforeach
  </tbody>
  </table>
  </div>
</div>
</div>
  <script type="text/javascript">
    function printReport()
    {
        var printContents = document.getElementById("printArea").innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;
    }
</script>
@endsection

