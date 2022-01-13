@extends('layouts.app')

@section('page_title')
    Sign up
@endsection

@section('link')
       @include('layouts.partials.auth.link')
@endsection

    @section('content')

<br><br>


        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>

                        @if ($errors->any())
                        <div class="alert alert-danger">

                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach

                        </div>
                        @endif

                        <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="full_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="full_name" value="{{ old('full_name') }}" required autofocus autocomplete="full_name"  id="full_name" placeholder="Full Name"/>
                            </div>

                            <div class="form-group">
                                <label for="user_id"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="user_id" value="{{ old('user_id') }}" required autofocus autocomplete="user_id"  id="user_id" placeholder="User Id. e.g. xyz231, abcd64"/>
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required  />
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" required autocomplete="new-password"/>
                            </div>

                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" required autocomplete="new-password" id="re_pass" placeholder="Repeat your password"/>
                            </div>

                          <!--  <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="{{ __('Register') }}"/>
                            </div>

                        </form>

                    </div>
                    <div class="signup-image">
                        <figure><img src="{{url('auth')}}/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{ route('login') }}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>



    @endsection


    @section('script')
    <script src="{{url('auth')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('auth')}}/js/main.js"></script>
    @endsection

