@extends("layouts.customlayout")
@section('body')


<!-- Login 15 start -->
<div class="login-15">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0">
                <div class="form-section align-self-center">
                    <div style="border-radius:50%;backgroor:mediumblue;padding: 15px;">
                        <a href="{{route('index')}}" style="color:#fff;">
                            <h2>TROVE OPTION</h2>
                        </a>
                    </div><br>
                    <h3>Sign Into Your Account</h3>
                    <div class="btn-section clearfix">
                        <a href="{{route('index')}}" class="link-btn active btn-1 active-bg">Home</a>
                        <a href="{{route('register')}}" class="link-btn btn-2 default-bg">Register</a>
                    </div>
                    <div class="clearfix"></div>
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group clearfix">
                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="btn btn-lg btn-primary btn-theme"><span>Login</span></button>
                            <a href="{{route('password.request')}}" class="forgot-password">Forgot Password</a>
                        </div>
                    </form>
                    <p>Don't have an account? <a href="{{route('register')}}">Register here</a></p>
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 align-self-center pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <div class="logo-2">

                    </div>
                    <a href="{{route('index')}}" style="text-decoration:none;"><h3>Welcome to TROVE OPTION</h3></a>
                    <!-- <div class="social-list">
                        <a href="#" class="facebook-bg">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="twitter-bg">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="google-bg">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href="#" class="linkedin-bg">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 15 end -->









@endsection
