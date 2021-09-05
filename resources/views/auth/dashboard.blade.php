@extends('app')

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
       
        <div class="">
      <img class="img-responsive" id="home-map" src="http://os7.techaffinity.us/district10/public/map/usa-map.png" title="Image Map">
    </div>
    </div> <p style="color: black;">Dashboard</p>
@yield('content')
@endsection