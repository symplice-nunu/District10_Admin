@extends('app')

@section('content')
<section class="login-page">
    <div class="container height-full-page">
        <div class="row align-items-center height-full-page">
            <div class="col-12">
                <div class="text-center">
                    <img src="http://os7.techaffinity.us/district10/public/images/logo-login-page.png">
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 login-content-wrap">
                        <div class="login-content">
                            <p>Welcome to the District 10 App.  Please <b>Sign-in</b> or <b>Create a new account</b>.</p>
                            <p>District 10 is made up of 7 Chapters of the National Electrical Contractors Association (NECA) representing the Outside Electrical Construction industry in the United States of America.
                            <ul style="color: #e5e7ec;">
                                <li>American Line Builders Chapter</li>
                                <li>Missouri Valley Chapter</li>
                                <li>Northeast Line Constructors Chapter</li>
                                <li>Northwest Line Constructors Chapter</li>
                                <li>Southeastern Line Constructors Chapter</li>
                                <li>Southwestern Line Constructors Chapter</li>
                                <li>Western Line Constructors Chapter</li>
                            </ul>
                            </p>
                            <p>The D10 App will serve to provide you with access to Chapter content, Collective Bargaining Agreements, Jurisdictional Maps, and more.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                    <div class="card">
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('signin.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <br>
                                <br>
                                <input type="text" name="email" placeholder="Email" id="email" class="form-control" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <br>
                                <br>
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <br>
                            

                            
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <br>
                            <div class="col-xs-5 col-sm-5 col-md-9">
                            <div class="form-group" style="margin-left: 3.5em;">
                            <div style="color: #0000FF;"> <strong>Create Account </strong> &nbsp; |
                             &nbsp;<strong>Forgot Password?</strong>
                                </div>
                                        </div>
                                </div>
                                <br>
                                
                        </form>
                    </div>
                </div>
                    </div>
                </div>
               
            </div>
        </div>
</section>


@endsection