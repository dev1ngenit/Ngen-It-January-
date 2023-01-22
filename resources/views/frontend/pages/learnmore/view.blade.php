@extends('frontend.master')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!--======// Header Title //======-->
<section class="common_product_header " style="background-image: url('{{ asset('storage/'.$learnmore->image_banner) }}'); padding: 40px 0 80px 0; margin-top:100px">
    <div class="container">
        <div class="solution_common_header">
            <div class="outcome_assetType mb-4">
                <a href="#">{{$learnmore->badge}}</a>
            </div>
            <h1>{{$learnmore->title}}.</h1>
        </div>
        <!--Button-->
        <div class="d-flex justify-content-center mt-5">
            <a href="#Contact" class="common_button2">Hear from our team</a>
        </div>
    </div>

</section>
<!----------End--------->

<!--=======// Techincal Expertise //========-->
<section class="container padding_top">
    <div class="section_text_wrapper">
        <h4 class="section_title" style="padding: 0px 10%;">{{$learnmore->header_one}}</h4>
        <p style="font-size:20px; text-align: center;">{{$learnmore->header_two}}</p>
    </div>
    <div class="row padding_top" id="Outcome">
        <!--Card Item-->
        <div class="col-4">
            <div class="solution_card_wrapper">
                <div class = "solution_card">
                    <div class = "card_item">
                    <div class = card_item_image>
                        <img href = "#" src ="{{asset('frontend')}}/images/solution/business-team-card1.jpg">
                    </div>
                    <div class = "solution_cart_content">
                        <h4> {{$learnmore->box_one_title}}</h4>
                        <p>{!! $learnmore->box_one_short_des !!}</p>
                        <a href="{{$learnmore->box_one_link}}" class="common_button2">Explore {{$learnmore->box_one_title}}</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Card Item-->
        <div class="col-4">
            <div class="solution_card_wrapper">
                <div class = "solution_card">
                    <div class = "card_item">
                    <div class = card_item_image>
                        <img href = "#" src ="{{asset('frontend')}}/images/solution/business-team-card2.jpg">
                    </div>
                    <div class = "solution_cart_content">
                        <h4> {{$learnmore->box_two_title}}</h4>
                        <p>{!! $learnmore->box_two_short_des !!}</p>
                        <a href="{{$learnmore->box_two_link}}" class="common_button2">Explore {{$learnmore->box_two_title}}</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Card Item-->
        <div class="col-4">
            <div class="solution_card_wrapper">
                <div class = "solution_card">
                    <div class = "card_item">
                    <div class = card_item_image>
                        <img href = "#" src ="{{asset('frontend')}}/images/solution/business-team-card3.jpg">
                    </div>
                    <div class = "solution_cart_content">
                        <h4> {{$learnmore->box_three_title}}</h4>
                        <p>{!! $learnmore->box_three_short_des !!}</p>
                        <a href="{{$learnmore->box_three_link}}" class="common_button2">Explore {{$learnmore->box_three_title}}</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--======// our clint tab //======-->
<section class="clint_tab_section">
    <div class="container">
        <div class="clint_tab_content">
            <!-- home title -->
            <div class="home_title">
                <h5 class="home_title_heading"> Client Success Stories</h5>
                <p class="home_title_text">{{$learnmore->success_story_title}}</p>
            </div>

            <!-- clint_tab_content_button  -->

            <!-- tab button content -->


            <div class="clint_tab_btn_content">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="tab-links" href="#clintFirstTab" data-toggle="pill">{{$story1->badge}}</a></li>
                    <li class="nav-item"><a class="tab-links" href="#clintSecondTab" data-toggle="pill">{{$story2->badge}}</a></li>
                    <li class="nav-item"><a class="tab-links" href="#clintThirdTab" data-toggle="pill">{{$story3->badge}}</a></li>

                </ul>
            </div>
            @php
                $tags_1=explode(',',$story1->tags);
                $tags_2=explode(',',$story2->tags);
                $tags_3=explode(',',$story3->tags);
            @endphp
            <!-- clint tab contet area -->
            <div class="tab-content clearfix mt-4">

                <!-- single area -->
                <div class="clint_tab_area tab-pane active" id="clintFirstTab">
                    <!-- wrapper -->
                    <div class="row">
                        <!-- thumbanial -->
                        <div class="col-lg-4 col-sm-12">
                            <div class="clint_tab_area_thumbnail_image">
                                <img src="{{ asset('storage/' . $story1->image) }}" alt="">
                            </div>

                            <div class="clint_tab_area_thumbnail_caption">
                                <p>{{$story1->header}}</p>
                            </div>
                        </div>


                        <!-- content -->
                        <div class="col-lg-8 col-sm-12 pl-4">
                            <p class="clint_tab_content_title">{{$story1->title}}</p>

                            {{-- <p class="clint_tab_content_text_title">Challenge</p> --}}
                            <p class="clint_tab_content_text_paragraph">{!!$story2->short_des!!}</p>

                            <div class="clint_tab_content_text_area_list">
                                <p class="clint_tab_content_text_title">Topics</p>

                                <ul>
                                    @foreach ($tags_1 as $item)
                                    <li>{{$item}}</li>
                                    @endforeach

                                </ul>
                            </div>

                            <!-- button -->
                            <div class="business_seftion_button" style="text-align: left;">
                                <a href="#">Explore business outcomes</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- single area end -->


                <!-- single area -->
                <div class="clint_tab_area tab-pane" id="clintSecondTab">
                    <!-- wrapper -->
                    <div class="row">
                        <!-- thumbanial -->
                        <div class="col-lg-4 col-sm-12">
                            <div class="clint_tab_area_thumbnail_image">
                                <img src="{{ asset('storage/' . $story2->image) }}"
                                    alt="">
                            </div>

                            <div class="clint_tab_area_thumbnail_caption">
                                <p>{{$story2->header}}</p>
                            </div>
                        </div>


                        <!-- content -->
                        <div class="col-lg-8 col-sm-12 pl-4">
                            <p class="clint_tab_content_title">{{$story2->title}}</p>

                            <div class="clint_tab_content_text_area">
                                {{-- <p class="clint_tab_content_text_title">Challenge</p> --}}
                                <p class="clint_tab_content_text_paragraph">{!!$story2->short_des!!}</p>
                            </div>

                            <!-- solution list -->

                            <div class="clint_tab_content_text_area_list_marker">
                                <p class="clint_tab_content_text_title">Topics</p>

                                <ul>
                                    @foreach ($tags_2 as $item)
                                    <li>{{$item}}</li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- button -->
                            <div class="business_seftion_button" style="text-align: left;">
                                <a href="#">Explore business outcomes</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- single area end -->



                <!-- single area -->
                <div class="clint_tab_area tab-pane" id="clintThirdTab">
                    <!-- wrapper -->
                    <div class="row">
                        <!-- thumbanial -->
                        <div class="col-lg-4 col-sm-12">
                            <div class="clint_tab_area_thumbnail_image">
                                <img src="{{ asset('storage/' . $story3->image) }}"
                                    alt="">
                            </div>

                            <div class="clint_tab_area_thumbnail_caption">
                                <p>{{$story3->header}}</p>
                            </div>
                        </div>


                        <!-- content -->
                        <div class="col-lg-8 col-sm-12 pl-4">
                            <p class="clint_tab_content_title">{{$story3->title}}</p>



                            <div class="clint_tab_content_text_area">
                                {{-- <p class="clint_tab_content_text_title">solutions</p> --}}
                                <p class="clint_tab_content_text_paragraph">{!!$story3->short_des!!}</p>
                            </div>

                            <div class="clint_tab_content_text_area_list">
                                <p class="clint_tab_content_text_title">Topics</p>

                                <ul>
                                    @foreach ($tags_3 as $item)
                                    <li>{{$item}}</li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- button -->
                            <div class="business_seftion_button" style="text-align: left;">
                                <a href="#">Explore business outcomes</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- single area end -->


                <!-- single area -->
                <div class="clint_tab_area tab-pane" id="clintFourthTab">
                    <!-- wrapper -->
                    <div class="row">
                        <!-- thumbanial -->
                        <div class="col-lg-4 col-sm-12">
                            <div class="clint_tab_area_thumbnail_image">
                                <img src="images/tabs_images/newcrest-mining-improve-operations-with-azure-iot.jpg"
                                    alt="">
                            </div>

                            <div class="clint_tab_area_thumbnail_caption">
                                <p>Fourth Health Care reduces patient length of stay and improves care coordination
                                    with real-time data analytics.</p>
                            </div>
                        </div>


                        <!-- content -->
                        <div class="col-lg-8 col-sm-12 pl-4">
                            <p class="clint_tab_content_title">Steward Health Care Transforms Care Through Digital
                                Innovation</p>

                            <div class="clint_tab_content_text_area">
                                <p class="clint_tab_content_text_title">Challenge</p>
                                <p class="clint_tab_content_text_paragraph">Steward Health Care wanted to reduce
                                    patient length of stay and improve the overall patient experience.</p>
                            </div>

                            <div class="clint_tab_content_text_area">
                                <p class="clint_tab_content_text_title">solutions</p>
                                <p class="clint_tab_content_text_paragraph">Microsoft Azure role-based access
                                    control and encryption provide HIPAA-compliant security for a unified data
                                    monitoring platform that leverages real-time business data and analytics.</p>
                            </div>

                            <div class="clint_tab_content_text_area_list">
                                <p class="clint_tab_content_text_title">Results</p>

                                <ul>
                                    <li>98% accurate prediction of patient load out to a week at a time</li>
                                    <li>Reduced patient length of stay by 1.5 dayss</li>
                                    <li>Predictable staffing</li>
                                    <li>Reduced operational costs — saving millions of dollars per hospital, per
                                        year</li>
                                </ul>
                            </div>

                            <!-- button -->
                            <div class="business_seftion_button" style="text-align: left;">
                                <a href="#">Explore business outcomes</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- single area end -->

            </div>

        </div>
    </div>
</section>
<!---------End -------->

<!--======// our clint tab //======-->
<section class="container">
    <div class="outcome_smail_bussiness_title">
        <hr class="lineTop">
            <h2>{!! $learnmore->footer !!}</h2>
        <hr class="lineBottom">
    </div>
</section>
<!---------End -------->

<!--=====// Global call section //=====-->
<section class="global_call_section section_padding">
    <div class="container">
        <!-- content -->
        <div class="global_call_section_content">
            <div class="home_title" style="width: 100%; margin: 0px;">
                <h5 class="home_title_heading" style="text-align: left; color: #fff;"> {{ $learnmore->consult_title }}</h5>

                <p class="home_title_text" style="text-align: left;color: #fff;line-height: 24px;font-size: 18px;">
                    {{ $learnmore->consult_short_des }}</p>

                <div class="business_seftion_button" style="text-align: left;">
                    <a href="#Outcome">Explore business outcomes</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------End -------->

{{-- <!--=====// Tech solution //=====-->
<div class="section_wp2">
    <div class="container">
        <div class="solution_number_wrapper">
            <!-- title -->
            <h5 class="home_title_heading" style="text-align: left;"> <span>D</span>elivering intelligent technology
                solutions</h5>
        </div>

        <!-- tech wrapper -->
        <div class="row">

            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">33k+</p>
                    <p class="tech_solution_text">hardware, software & cloud partners</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>

            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">44k+</p>
                    <p class="tech_solution_text">Insight teammates worldwide</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>


            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">7.5k+</p>
                    <p class="tech_solution_text">sales & service delivery professionals</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>


            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">19</p>
                    <p class="tech_solution_text">countries with Insight operations</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>


            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">Top 1%</p>
                    <p class="tech_solution_text">Insight is in the top 1% of all Microsoft partners</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>


            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">#1</p>
                    <p class="tech_solution_text">on the Channel Futures MSP 501</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>


            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">#7</p>
                    <p class="tech_solution_text">on Fortune World’s Most Admired Companies for IT services</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>


            <!-- item -->
            <div class="col-lg-3 col-sm-6">
                <div class="tech_solution_item">
                    <p class="tech_solution_title">#373</p>
                    <p class="tech_solution_text">on the Fortune 500</p>
                    <p class="tech_solution_award">Awarded in 2021</p>
                </div>
            </div>


        </div>

    </div>
</div>
<!---------End --------> --}}

<!--=====// We serve //=====-->
<div class="container">
    <!-- section title -->
    <div class="clint_help_section_heading_wrapper">
        <!-- title -->
        <h5 class="home_title_heading" style="text-align: left;"> <span>Ind</span>ustries we serve</h5>
        <p class="home_title_text" style="text-align: left;">{{$learnmore->industry_header}}</p>
    </div>

    <!-- section content wrapper -->
    <div class="row mb-4">
        <!-- content -->
        <div class="col-lg-9 col-sm-12">
            <div class="we_serve_title">
                {{-- <p>Private sector</p> --}}
            </div>
            <!-- we_serveItem_wrapper -->
            <div class="row">
                <!-- item -->
                @foreach ($industrys as $item)

                <div class="col-lg-3 col-sm-6">
                    <a href="{{route('industry.details',$item->id)}}" class="we_serve_item" style="height:11rem;">
                        <div class="we_serve_item_image">
                            <img src="{{asset('storage/requestImg/'.$item->logo)}}" alt="{{$item->title}}">
                        </div>
                        <div class="we_serve_item_text">{{$item->title}}</div>
                    </a>
                </div>
                @endforeach
                <!-- item -->


            </div>
        </div>

        {{-- <!-- sidebar -->
        <div class="col-lg-3 col-sm-12">
            <div class="we_serve_title ml-4">
                <p>Private sector</p>
            </div>
            <!-- sidebar list -->
            <div class="we_serve_sidebar_list">
                <ul>
                    <li><a href="">Federal government ›</a></li>
                    <li><a href="">Higher education  ›</a></li>
                    <li><a href="">K-12 education ›</a></li>
                    <li><a href="">Federal government ›</a></li>
                </ul>

                <a href="" class="business_item_button"
                    style="justify-content: left;padding-left:15px;"><span>Explore Insight Public Sector</span>
                    <span class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
            </div>
        </div> --}}

    </div>
</div>
<!---------End -------->

<!--=====// Pageform section //=====-->
<section class="solution_contact_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="contact_left_content">
                    <h4 class="contact_left_title text-white text-white" style="font-size: 25px">Need immediate assistance?</h4>
                    <p class="contact_left_text text-white text-white" style="font-size: 18px">Get assistance with tracking an order, requesting a quote, contacting your account representative and more by <a href="tel:01723507989">phone</a> or <a href="">over chat</a>.</p>

                    <!-- contact left phone -->
                    <div class="contact_anything_wrapper">
                        <!-- call -->
                        <div class="contact_call">
                            <div class="contact_call_title text-white text-white">Call us</div>
                            <div class="contact_call_number text-white text-white"> {{ $setting->mobile }}</div>
                        </div>

                        <!-- contact chat -->
                        <div class="contact_call contact_chat">
                            <div class="contact_call_title text-white">Chat now</div>
                            <a href="" class="contact_chat_button text-white"> <span> <i class="fa-solid fa-message"></i> </span> <span> Chat with us</span> </a>
                        </div>
                    </div>

                    <!-- contact global -->
                    <div class="contact_global">
                        <div class="contact_global_title text-white">NGentIt Global Headquarters</div>
                        <!-- adress -->
                        <div class="gloabal_content_address">
                            <span class="text-white"> {{ $setting->address }}</span>
                        </div>

                        <!-- contact call or email -->

                        <div class="global_contact_phone">
                            <!-- item -->
                            <div class="global_contact_phone_item text-white">
                                <span class="text-white">Billing & invoice: </span>  <a class="text-white" href="tel:{{ $setting->mobile }}">{{ $setting->mobile }}</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item text-white">
                                <span class="text-white">Information and sales:</span>  <a class="text-white" href="mail:{{ $setting->email2 }}">{{ $setting->email2 }}</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item text-white">
                                <span class="text-white">OneCall support:</span>  <a class="text-white" href="tel:{{ $setting->mobile }}">{{ $setting->mobile }}</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item text-white">
                                <span class="text-white">Returns:</span>  <a class="text-white" href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                            </div>
                        </div>

                        <!-- location button -->
                        <a href="" class="product_button">View all NGentIt office locations</a>

                    </div>
                </div>
            </div>
            <!----------Sidebar Privacy Policy --------->
            <div class="col-lg-6 col-sm-12 p-0" id="Contact">
                <!-- form Sidebar -->
                <form id="myform" action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row specialist_contect_form">
                        <h2 class="col-12">Let's connect</h2>

                            <!-- item -->
                            <div class="solution_form_item_wp col-lg-6 col-sm-12">
                                <input type="text" name="fname" class="form_input" maxlength="100" placeholder="First Name"/>
                                <label class="form_label" for="">First Name: *</label>
                            </div>

                            <!-- item -->
                            <div class="solution_form_item_wp col-lg-6 col-sm-12">
                                <input type="text" name="lname" class="form_input" maxlength="100" placeholder="Last Name"/>
                                <label class="form_label" for="">Last Name: *</label>
                            </div>

                            <!-- item -->
                            <div class="solution_form_item_wp col-lg-6 col-sm-12">
                                <input type="email" name="email" class="form_input maxlength" placeholder="Business Email" maxlength="100" />
                                <label class="form_label" for="">Business Email: *</label>
                            </div>

                            <!-- item -->
                            <div class="solution_form_item_wp col-lg-6 col-sm-12">
                                <input type="text" name="phone" class="form_input maxlength" placeholder="Phone" maxlength="100" />
                                <label class="form_label" for="">Phone: *</label>
                            </div>

                            <div class="solution_form_item_wp col-lg-6 col-sm-12">
                                <input class="form_input maxlength" name="state" type="text" placeholder="State" maxlength="100">
                                <label class="form_label" for="">State: *</label>
                            </div>

                            <!-- form item -->
                            <div class="solution_form_item_wp col-lg-6 col-sm-12">
                                <input class="form_input maxlength" maxlength="100" name="country" type="text" placeholder="Country">

                                <!-- label -->
                                <label class="form_label" for="">Country: *</label>
                            </div>

                            <!-- item -->
                            <div class="solution_form_item_wp col-lg-12 col-sm-12">
                                <input class="form_input" type="text" name="company" placeholder="Company / Organization *">
                                <label class="form_label" for="">Company *</label>
                            </div>
                            <!-- item -->
                            <div class="solution_form_item_wp col-lg-12 col-sm-12">
                                <textarea class="form_input" name="message" id="" rows="2"
                                    placeholder="To better assist you, please describe how we can help."></textarea>
                                <label class="form_label" for="">To better assist you, please describe how we can
                                    help.</label>
                            </div>



                            <div class="d-flex">
                                <!-- checkbox input -->
                                <div class="" style="margin-right: 10px;">
                                    <input type="checkbox" name="terms" required>
                                </div>
                                <!-- content -->
                                <div class="checkBox_content">By checking this box, I consent to receive Insight marketing
                                    emails. We respect your privacy and will not share your personal information with any
                                    other company, person or identity.</div>
                            </div>


                            <!-- submit button -->
                            <div>
                                <button type="submit" class="common_button2 ml-2 mt-4" id="submitbtn">Hear from a specialist</button>
                            </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!---------End -------->

@endsection
@once
@section('styles')
  <style>
    .active, .collapsible:focus{
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;
    }
  </style>
@endsection
@endonce
