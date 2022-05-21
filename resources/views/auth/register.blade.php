@extends("layouts.customlayout")

@section('body')
    <!-- Login 15 start -->
    <div class="login-15">
        <div class="container">
            <div class="row login-box">
                <div class="col-lg-6 align-self-center pad-0">
                    <div class="form-section clearfix">
                        <div style="border-radius:50%;background-color:mediumblue;padding: 15px;">
                            <a href="{{route('index')}}" style="color:#fff;">
                                <h2>TROVE OPTION</h2>
                            </a>
                        </div><br>
                        <h3>Create An Account</h3>
                        <div class="btn-section clearfix">
                            <a href="{{route('login')}}" class="link-btn active btn-1 default-bg">Login</a>
                            <a href="{{route('index')}}" class="link-btn btn-2 active-bg">Home</a>
                        </div>
                        <div class="clearfix"></div>
                        <form action="{{ route('register') }}" method="post" onsubmit="process(event)" id="login">
                            @csrf
                            <div class="form-group">
                                <input id="name" placeholder="Full Name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username">
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="re-email" type="email" class="form-control" placeholder="Retype Email Address" aria-label="Retype Email Address">
                            </div>
                            <div class="form-group">
                                <input name="phone" id="phone" placeholder="Phone" type="tel" class="form-control" placeholder="Phone Number"
                                    aria-label="Phone Number">
                            </div>
                            <div class="form-group clearfix">
                                <input id="password" placeholder="Password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group clearfix">
                                <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">

                            </div>
                            <div class="form-group clearfix">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked required id="rememberme">
                                    <label class="form-check-label" for="rememberme">
                                        I agree to the terms of service
                                    </label>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit"
                                    class="btn btn-lg btn-primary btn-theme"><span>Register</span></button>
                            </div>
                            <p>Already a member? <a href="{{route('login')}}">Login here</a></p>
                        </form>
                        <!-- form code -->
                        <div class="alert alert-info" style="display: none;"></div>
                    </div>
                </div>
                <div class="col-lg-6 bg-color-15 align-self-center pad-0 none-992 bg-img">
                    <div class="info clearfix">
                        <div class="logo-2">

                        </div>
                        <a href="{{route('index')}}" style="text-decoration:none;">
                            <h3>Welcome to TROVE OPTION</h3>
                        </a>
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

    <script>
        function getIp(callback) {
            fetch('https://ipinfo.io/json?token=a182eb514a6d13', {
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then((resp) => resp.json())
                .catch(() => {
                    return {
                        country: 'us',
                    };
                })
                .then((resp) => callback(resp.country));
        }

        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            initialCountry: "auto",
            geoIpLookup: getIp,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });


        const info = document.querySelector(".alert-info");

        function process(event) {


            const phoneNumber = phoneInput.getNumber();

            info.style.display = "";
            info.innerHTML = `processing...</strong>`;
        }
    </script>















@endsection
