@extends('app')

@section('content')
<div class="container">
            <div class="box">
                <div class="box-row">
                    <div class="box-cell box1">
                    It is a good platform to learn programming. It is an
                    educational website. Prepare for the Recruitment drive
                    of product based companies like Microsoft, Amazon,
                    Adobe etc with a free online placement preparation
                    course. The course focuses on various MCQ's & Coding
                    question likely to be asked in the interviews & make
                    your upcoming placement season efficient and successful.
                    </div>
                    <div class="box-cell box2">
                    Also, any geeks can help other geeks by writing articles
                    on the GeeksforGeeks, publishing articles follow few
                    steps that are Articles that need little modification/
                    improvement from reviewers are published first. To
                    quickly get your articles reviewed, please refer
                    existing articles, their formatting style, coding
                    style, and try to make you are close to them.
                    </div>
                </div>
            </div>
        </div>
<main class="cotainer mt-5">
    <p></p>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card cardd2">
                    
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
                            <div class="form-group" style="margin-left: 1.9em;">
                             <strong style="color: #0000FF;">Create Account </strong> &nbsp; |
                             &nbsp;<strong style="color: #0000FF;">Forgot Password?</strong>
                                        </div>
                                </div>
                                <br>
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>

@endsection