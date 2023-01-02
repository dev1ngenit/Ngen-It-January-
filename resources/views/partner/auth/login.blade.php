@extends('frontend.master')
@section('content')
     <!--=======// Login //=======-->
     <section id="login_form" class="my-4" style="margin-top: 109px !important;">
        <section class="login_form_wrapper">
            <div class="title-text">
                <div class="title login" style="font-size: 19px">Partner Login Form</div>
                <div class="title signup" style="font-size: 19px">Partner Signup Form</div>
            </div>
            <div class="login_form_container">
                <div class="login_slide_controls">
                    <input type="radio" name="login_slide" id="login" checked>
                    <input type="radio" name="login_slide" id="signup">
                    <label for="login" class="login_slide login">Login</label>
                    <label for="signup" class="login_slide signup">Signup</label>
                    <div class="login_slider_tab"></div>
                </div>
                <div class="form-inner">
                    <form id="myform" class="login" method="POST" action="{{ route('partner.login') }}">
                        @csrf

                        <div class="field">
                            <input type="text" name="primary_email_address" class="form-control"
                                            placeholder="john@doe.com" required>
                        </div>
                        <div class="field">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="pass-link"><a href="">Forgot password?</a></div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input id="submitbtn" type="submit" value="Login">
                        </div>
                        <div class="signup-link">Not a Partner? <a href="">Create new account</a></div>
                    </form>

                    <form action="{{ route('partner.store') }}" method="POST" enctype="multipart/form-data" class="signup">
                        @csrf
                        <div class="field">
                            <input type="text" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="field">
                            <input type="email" name="primary_email_address" placeholder="john@doe.com" required>
                        </div>
                        <div class="field">
                            <input type="text" name="company_number" placeholder="Company Phone Number" required>
                        </div>
                        <div class="field">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="field">
                            <input type="password" name="password_confirmation" placeholder="Confirm password"
                                required>
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Signup">
                        </div>
                        <span class="form-text text-center text-muted">By continuing, you're confirming that
                            you've read our <a href="#">Terms &amp; Conditions</a> and <a
                                href="#">Cookie Policy</a></span>
                    </form>
                </div>
            </div>
        </section>
    </section>
    <!-------End-------->
@endsection
