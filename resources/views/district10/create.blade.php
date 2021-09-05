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
                    <a href="#"><span class="las la-users"></span>
                        <span>Manage Users</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-users"></span>
                        <span>Manage Events</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-clipboard-list"></span>
                        <span>Manage Documents</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-shopping-bag"></span>
                        <span>Manage Document Type</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-shopping-bag"></span>
                        <span>Manage Contractor Directory</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-users"></span>
                        <span>Manage JATC Directory</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-user-circle"></span>
                        <span>Manage Chapter Directory</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-clipboard-list"></span>
                        <span>Manage IBEW Directory</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-clipboard-list"></span>
                        <span>Manage Contractor Resources</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-clipboard-list"></span>
                        <span>Manage Announcement</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-clipboard-list"></span>
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
            <span>Welcome Admin</span>
            <a href="{{ route('logout') }}" style="color: white;">
            <span class="lab la-google-wallet"> </span></a>
            
            
            </div>
        </header>
       <div class="container mg-10">
       <div class="row">
       <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0 text-dark">Manage Chapter Directory - Add</h2>
            </div>
            <div class="col-sm-6" style="margin-bottom: 1.5em;">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Manage Chapter Directory</a></li>
                    <li class="breadcrumb-item">Add</li>
                </ol>
            </div>
        </div>
    </div>
@if ($errors->any())
<div class="card">
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('district10.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Company Name*</strong>
                <input type="text" name="companyname" class="form-control" placeholder="Enter Company Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Email Address*</strong>
                <input type="text" name="emailaddress" class="form-control" placeholder="Enter Email Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Chapter*</strong>
                <select name="chapter" id="" class="form-control">
                    <option value="">---Select Chapter---</option>
                    <option value="Southwest Line">Southwest Line</option>
                    <option value="Missouli Valley Line">Missouli Valley Line</option>
                    <option value="Southwest Line">Southwest Line</option>
                    <option value="American Line Builders">American Line Builders</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Position*</strong>
                <input type="text" class="form-control" name="position" placeholder="Enter Position">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Address</strong>
                <textarea class="form-control" style="height:150px" name="address" placeholder="Enter Address"></textarea>
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>State</strong>
                <input type="text" name="state" class="form-control" placeholder="Enter State">
             </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>City</strong>
                <input type="text" name="city" class="form-control" placeholder="Enter City">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Zipcode</strong>
                <input type="text" name="zipcode" class="form-control" placeholder="Enter Zipcode">
             </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Contact</strong>
                <input type="text" name="contact" class="form-control" placeholder="Enter Contact">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Phone*</strong>
                <input type="text" name="phone" class="form-control" placeholder="Enter Phone">
             </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Fax</strong>
                <input type="text" name="fax" class="form-control" placeholder="Enter Fax">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Website</strong>
                <input type="text" name="website" class="form-control" placeholder="Enter Website">
             </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Profile Pic</strong>
                <input type="file" name="name" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</form>
@endsection