@extends('company.layout')
  
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
                <h2 class="m-0 text-dark">Manage companies - Add</h2>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Manage Companies</a></li>
                    <li class="breadcrumb-item">Add</li>
                </ol>
            </div>
        </div>
    </div>
<main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
            
                <div class="card">
                    
                    <div class="card-body">
                        <form action="{{ route('company.store') }}" method="POST">
                        <div class="col-md-12">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="">Company Name</label>
                                <input type="text" name="companyname" placeholder="Company Name" id="name" class="form-control">
                                @if ($errors->has('companyname'))
                                <span class="text-danger">{{ $errors->first('companyname') }}</span>
                                @endif
                            </div>
                           
                            <div class="form-group mb-2">
                                
                            <label for="">Company Name</label>
                               <select name="chapter" id="" class="form-control">
                                    <option value="">---Select Chapter---</option>
                                    <option value="Southwest Line">Southwest Line</option>
                                    <option value="Missouli Valley Line">Missouli Valley Line</option>
                                    <option value="Southeastern Line">Southeastern Line</option>
                                    <option value="American Line Builders">American Line Builders</option>
                                </select>
                                @if ($errors->has('chapter'))
                                <span class="text-danger">{{ $errors->first('chapter') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="radio" name="status"  id="status" value="Active">
                                <strong>Active</strong>&nbsp;&nbsp;&nbsp;
                                
                                <input type="radio" name="status"  id="status" value="Inactive">
                                <strong>Inactive</strong>
                                @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                @endif
                            </div>

                            

                           
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection
