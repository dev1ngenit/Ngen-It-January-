@extends('frontend.master')
@section('content')
@php
    $setting=App\Models\Admin\Setting::first();
    
@endphp
    <!--========// Header Title //========-->
    <section class="apply_job_form_title" style="background-image: url('{{asset('frontend/images/buy-category-hero.jpg')}}');margin-top:100px;">
        <div class="container">
            <!--------Find job------->
            <h1>Find Work</h1>
            <div class="d-flex justify-content-center search_job_post">
                <form id="form">
                    <input type="search" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>

    </section>
    <!---------End--------->

    <!--========// Job Post //========-->
    <section class="container">
        <div class="row mt-5">
            <!--------Job Post item------->

            @foreach ($jobs as $item)
                <div class="col-lg-6 col-sm-12">
                    <div class="job_post_card my-3">
                        <div class="job_post_card_img">
                            <img class="img-fluid" src="{{ (!file_exists('upload/logoimage/'.$setting->logo)) ? $setting->logo:url('upload/logoimage/'.$setting->logo) }}" alt="">
                        </div>
                        <div class="job_post_card_details">
                            <h6>{{$item->name}}</h6>
                            <ul>
                                {{-- <li><i class="fa-solid fa-location-dot"></i> <span> Ring Road, Mohammadpur, Dhaka</span></li>
                                <li><i class="fa-solid fa-graduation-cap"></i>Bachelor degree in any discipline</li> --}}
                                <li><i class="fa-solid fa-user-tie"></i> {{$item->experience}}</li>
                            </ul>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a class="job_post_btn" href="{{route('job.details',$item->id)}}">Learn more <i class="fa-solid fa-angles-right"></i></a>
                                </div>
                                <div class="job_post_end_date">
                                    <p><i class="fa-solid fa-calendar-day"></i> Deadline:</p>
                                    <p> <strong>{{$item->deadline}}</strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--------Job Post item------->

        </div>
    </section>
    <!---------End--------->
@endsection
