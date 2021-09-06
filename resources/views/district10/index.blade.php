@extends('district10.layout')
 
@section('content')
 
<input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span><img src="http://os7.techaffinity.us/district10/public/images/logo-login-page.png"  style="height: 1em;"></span><span>District 10</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="#" class="dec"><span class="las la-users"></span>
                        <span>Manage Users</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-hiking"></span>
                        <span>Manage Events</span></a>
                </li>
                <li>
                    <a href="#"class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Documents</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Document Type</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Contractor Directory</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage JATC Directory</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list  "></span>
                        <span>Manage Chapter Directory</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage IBEW Directory</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Contractor Resources</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Announcement</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-users"></span>
                        <span>Manage Companies</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle" style="color: white;">
                    <span class="las la-bars"> </span>

                </label>
                

            </h2>
            <div class="user-wrapper" >
            <span>Welcome Admin</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="fas fa-bell"> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{ route('logout') }}" style="color: white;">
            <span class="fas fa-power-off"> </span></a>
            
            
            </div>
        </header>
       <div class="container mg-10">
       <div class="row">
       <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0 text-dark">Manage Chapter Directory</h2>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Manage Chapter</li>
                </ol>
            </div>
        </div>
        
    </div>
    <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary btn-create" href="{{ route('district10.create') }}"> Add Chapter Directory</a>
            </div>
        </div>
        
       <div class="container">
        <div class="col-lg-2 mn-tps">
                <strong>Search: </strong>
        </div>
        <br>
        <div class="col-lg-3 mn-tps">
                 <input type="search" id="myInput" onkeyup="myFunction()" name="search" placeholder="Search" class="form-control">
        
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" id="myTable">
        <tr class="tb-cl">
            <th>Chapter Name</th>
            <th>Contact</th>
            <th>Position</th>
            <th>State</th>
            <th>Phone</th>
            <th>Email</th>
            <th width="120px">Action</th>
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
   
                    <!-- <a class="btn btn-info" href="{{ route('district10.show',$district->id) }}">Show</a> -->
                    <button style="height: 2em; width: 2em; border-radius: 2em; background-color: blue; border-color: blue;">
                        <a class="fas fa-pen" style="color: white;" href="{{ route('district10.edit',$district->id) }}" ></a>
                    </button>
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="fas fa-trash" style="height: 2em; width: 2em; border-radius: 0.5em; background-color: red; border-color: red; color: white;"></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <script>
        function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
    </script>
    </div>
    {!! $district10->links() !!}
      
@endsection