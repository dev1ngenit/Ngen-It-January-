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
            $name = !empty($data->name) ? 12.5 : 0;
            //$username = !empty($user->username) ? 12.5 : 0;
            $email = !empty($data->email) ? 12.5 : 0;
            $image = !empty($data->photo) ? 12.5 : 0;
            $phone = !empty($data->phone) ? 12.5 : 0;
            $address = !empty($data->address) ? 12.5 : 0;
            $city = !empty($data->city) ? 12.5 : 0;
            $country = !empty($data->country) ? 12.5 : 0;
            $post_code = !empty($data->postal) ? 12.5 : 0;
            $percentage = intval(($name+$email+$image+$phone+$address+$city+$country+$post_code)*$maximumPoints/100);
            $user['percentage'] = $percentage.'%';
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

                    <div class="col-lg-3 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center p-4">
                                    <img src="{{ (!empty($data->photo)) ? url('upload/Profile/user/'.$data->photo):url('upload/no_image.jpg') }}" alt="{{$data->name}}" class="rounded-circle p-1 bg-primary" width="90" style="width: 173px;">
                                    <div class="mt-3">
                                        <h4 class="text-center">{{ $data->name }}</h4>
                                        <p class="text-center text-secondary mb-1">{{ $data->username }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-header py-1">
                                <h5 class="text-center m-0">Your Account Details</h5>
                            </div>
                            <div class="card-body">
                                <form id="myform" method="post" action="{{ route('client.profile.store') }}" enctype="multipart/form-data" >
                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Full Name</label>
                                                <input type="text" class="form-control" id="basicpill-firstname-input" name="name" value="{{ $data->name }}"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-email-input">Email</label>
                                                <input type="email" class="form-control" id="basicpill-email-input" name="email" value="{{ $data->email }}"/>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">User name</label>
                                                <input type="text" class="form-control" id="basicpill-firstname-input" name="username" value="{{ $data->username }}" disabled>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-phoneno-input">Phone</label>
                                                <input type="text" class="form-control" id="basicpill-phoneno-input" name="phone" value="{{ $data->phone }}"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">City</label>
                                                <input type="text" class="form-control" id="basicpill-firstname-input" name="city" value="{{ $data->city }}"/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-address-input">Address</label>
                                                <textarea id="basicpill-address-input" class="form-control" rows="2" name="address">{{ $data->address }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Country</label>
                                                <input type="text" class="form-control" id="basicpill-firstname-input" name="country" value="{{ $data->country }}"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Postal Code</label>
                                                <input type="text" class="form-control" id="basicpill-firstname-input" name="postal" value="{{ $data->postal }}"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">Profile Picture</label>
                                                <input id="image" type="file" class="form-control" id="basicpill-firstname-input" name="photo" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                             <img id="showImage" src="{{ (!empty($data->photo)) ? url('upload/Profile/admin/'.$data->photo):url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"/>
                                        </div>
                                    </div>

                                    <div class="row mt-1 mb-1">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-4 text-center">
                                            <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                                class="ph-paper-plane-tilt ms-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>



@endsection
