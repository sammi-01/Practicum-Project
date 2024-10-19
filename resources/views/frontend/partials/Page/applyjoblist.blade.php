@extends('frontend.fmaster')

@section('content')
<div class="container mt-5">
    <h3 class="mb-4 text-center">Job Applications List</h3>
    
    @if($applications->isEmpty())
        <p class="text-center">No applications have been submitted yet.</p>
    @else
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Cover Letter</th>
                    <th>Resume</th>
                    <th>Applied At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($applications as $application)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $application->full_name }}</td>
                        <td>{{ $application->email }}</td>
                        <td>{{ $application->phone }}</td>
                        <td>{{ $application->cover_letter }}</td>
                        <td>
                            @if($application->resume)
                                <a href="{{ asset('storage/' . $application->resume) }}" target="_blank">View Resume</a>
                            @else
                                No Resume Uploaded
                            @endif
                        </td>
                        <td>{{ $application->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <div>
        <a href="{{route('jobapply.applyform')}}" class="btn btn-primary">Go back</a>
    </div>
</div>
@endsection
