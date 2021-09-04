@extends('app')

@section('content')

<main class="cotainer mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
            <div class="text-center">
                    <img src="http://os7.techaffinity.us/district10/public/images/logo-login-page.png">
                </div>
                <div class="card">
                    
                    <div class="card-body">
                        <form action="{{ route('user.registration') }}" method="POST">
                        <div class="col-md-12">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Name" id="name" class="form-control">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                           
                            <div class="form-group mb-2">
                               <select name="neca" id="" class="form-control">
                                    <option value="">---Select Chapter---</option>
                                    <option value="Southwest Line">Southwest Line</option>
                                    <option value="Missouli Valley Line">Missouli Valley Line</option>
                                    <option value="Southeastern Line">Southeastern Line</option>
                                    <option value="American Line Builders">American Line Builders</option>
                                </select>
                                @if ($errors->has('neca'))
                                <span class="text-danger">{{ $errors->first('neca') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-2">
                                <input type="text" name="email" placeholder="Email" id="email_address" class="form-control">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-2">
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-2">
                                <input type="password" name="confirm-password" placeholder="Re-Enter Password" id="password" class="form-control">
                              
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="necaa" placeholder="NECA#" id="neca" class="form-control">
                                
                            </div>
                            <div class="form-group mb-2">
                                <select name="company" id="" class="form-control">
                                    <option value="">---Select Company---</option>
                                    <option value="Techaffinity">Techaffinity</option>
                                </select>
                                 @if ($errors->has('company'))
                                <span class="text-danger">{{ $errors->first('company') }}</span>
                                @endif
                            </div>
                            
                        <div class="form-group mb-2">
                                <div class="form-group">
                              <div class="g-recaptcha" data-sitekey="6Lce3kAcAAAAAGvaArCJqWmkdKemtknxViDaVIKB"></div>
                                </div>
       <p>koko</p>
                             </div>
                             <div class="form-group mb-2">
                             <p style="red;">Your account request will be reviewed and approved within 24 hours</p>

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