@extends('district10.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>District 10</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('district10.create') }}"> Add Chapter Directory</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Chapter Name</th>
            <th>Contact</th>
            <th>Position</th>
            <th>State</th>
            <th>Phone</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($district10 as $district)
        <tr>
            <td>{{ $district->chapter }}</td>
            <td>{{ $district->contact }}</td>
            <td>{{ $district->position }}</td>
            <td>{{ $district->state }}</td>
            <td>{{ $district->phone }}</td>
            <td>{{ $district->emailaddress }}</td>
            <td>
                <form action="{{ route('district10.destroy',$district->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('district10.show',$district->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('district10.edit',$district->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $district10->links() !!}
      
@endsection