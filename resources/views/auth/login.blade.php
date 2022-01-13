@extends('layouts.app')

@section('page_title')
    Sign in
@endsection

@section('link')
    @include('layouts.partials.auth.link')
@endsection

    @section('content')

    <br><br>



    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{url('auth')}}/images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="{{ route('register') }}" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">


                    <h2 class="form-title">Sign in</h2>


                    @if (session('status'))
                    <div>
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <div>{{ __('Whoops! Something went wrong.') }}</div>


                            @foreach ($errors->all() as $error)
                              <div>{{ $error }}</div>
                            @endforeach

                    </div>
                @endif


                    <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                        @csrf
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus />
                        </div>


                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password"/>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div>

                        <div>
                     @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                     @endif
                        </div>



                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="{{ __('Login') }}"/>
                        </div>
                    </form>

                 <!--   <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div> -->

                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
       <script src="{{url('auth')}}/vendor/jquery/jquery.min.js"></script>
       <script src="{{url('auth')}}/js/main.js"></script>
@endsection



