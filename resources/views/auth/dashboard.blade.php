@extends('app')

@section('content')

    <div class="container mt-5" style="max-width: 500px">
        <div class="d-grid">
          <a href="{{ route('logout') }}" class="btn btn-danger">Sign-out</a>
        </div>  
    </div>
 <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span><img src="http://os7.techaffinity.us/district10/public/images/logo-login-page.png"  style="height: 1em;"></span><span>District 10</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.html"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="investors.html"><span class="las la-users"></span>
                        <span>Investors</span></a>
                </li>
                <li>
                    <a href="houses.html"><span class="las la-clipboard-list"></span>
                        <span>Houses</span></a>
                </li>
                <li>
                    <a href="requested.html"><span class="las la-shopping-bag"></span>
                        <span>Requested Houses</span></a>
                </li>
                <li>
                    <a href="renters.html"><span class="las la-users"></span>
                        <span>Renters</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
                        <span>Accounts</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                        <span>About</span></a>
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
                Dashboard

            </h2>
            <div class="user-wrapper">
            <span class="las la-power-on"> </span>
               
            </div>
        </header>
    </div>
@yield('content')
@endsection