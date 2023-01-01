@extends('frontend.master')


@section('content')

<div class="content_wrapper mx-4" style="margin-top:100px">
    <!--=========Content Wrapper=============-->
    @include('client.partials.sidebar')

    <!--Content Wrapper-->
    <div class="d-flex">
        <div id="userSideButton_wrapper">
            <button class="sidebarButtonStyle" onclick="userDashboardSidebarClicked()">☰</button>
        </div>
        @php
            $maximumPoints  = 100;
            $name = !empty($user->name) ? 12.5 : 0;
            //$username = !empty($user->username) ? 12.5 : 0;
            $email = !empty($user->email) ? 12.5 : 0;
            $image = !empty($user->photo) ? 12.5 : 0;
            $phone = !empty($user->phone) ? 12.5 : 0;
            $address = !empty($user->address) ? 12.5 : 0;
            $city = !empty($user->city) ? 12.5 : 0;
            $country = !empty($user->country) ? 12.5 : 0;
            $post_code = !empty($user->postal) ? 12.5 : 0;
            $percentage = intval(($name+$email+$image+$phone+$address+$city+$country+$post_code)*$maximumPoints/100);
            $user['percentage'] = $percentage;
        @endphp
        <div id="Content_Wrapper">
            <section class="client_dashboard_content_wp">
                <!--=====// Content body //=====-->
                <!--Content title-->
                @if ($user['percentage'] === 100)

                @else
                <div class="row client_db_profile_header" id="profile_percentage">
                    <div class="col-lg-12">
                        <div class="card bg-warning">
                            <div class="row mt-2">
                                <div class="col-lg-10"></div>
                                <div class="col-lg-2"><button id="close" class="btn btn-danger float-end"><i class="fa fa-times"></i></button></div>
                            </div>

                            <div class="alert">
                                <h6>Profile Completion percentage : {{$user['percentage'] }} %.
                                    Your Profile is not fully completed. Complete your profile now.
                                </h6>
                                <a href="{{route('client.profile_update')}}">Update Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <div class="row client_db_profile_header">
                    <div class="col-12 d-flex">
                        <div class="col-lg-6 col-sm-12">
                            <img src="{{ (!empty($user->photo)) ? url('upload/Profile/user/'.$user->photo):url('upload/no_image.jpg') }}" class="img-fluid" alt="" style="width:160px">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="client_db_profile_title" style="vertical-align: center;">
                                <h3>Hello , {{Auth::user()->name}}</h3>
                                {{-- <p>I am a versatile graphic designer who can approach marketing projects from concept to
                                    implementation.</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--Content Detailes-->
                <div class="row">
                    <div class="col-lg-6 col-sm-12 client_db_details">
                        <h3>Details</h3><br>
                        <div>
                            <label><strong>Name:</strong></label>
                            <label>{{Auth::user()->name}}</label>
                        </div>
                        <hr class="mx-0 mt-2 p-0">
                        {{-- <div>
                            <label><strong>Age:</strong></label>
                            <label>22 Years</label>
                        </div> --}}
                        {{-- <hr class="mx-0 mt-2 p-0"> --}}
                        <div>
                            <label><strong>Email:</strong></label>
                            <label>{{Auth::user()->email}}</label>
                        </div>
                        <hr class="mx-0 mt-2 p-0">
                        <div>
                            <label><strong>Contact:</strong></label>
                            <label>{{Auth::user()->phone}}</label>
                        </div>
                        <hr class="mx-0 mt-2 p-0">
                        <div>
                            <label><strong>Location:</strong></label>
                            <label>{{Auth::user()->address}}, {{Auth::user()->country}}</label>
                            <h6></h6>
                        </div>
                        <hr class="mx-0 mt-2 p-0">

                    </div>
                    <div class="col-lg-6 col-sm-12 client_db_about">
                        {{-- <h3>About me</h3>
                        <p>I am an allround web designer.Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</p> --}}

                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>



@endsection
