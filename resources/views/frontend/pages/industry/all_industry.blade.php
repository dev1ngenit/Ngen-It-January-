@extends('frontend.master')
@section('content')

<!--======// Header Title //======-->
<section class="common_product_header" style="background-image: url('{{asset('frontend/images/softwer-banner.jpg')}}');margin-top:100px;">
    <div class="container">
        <h1>Industries we serve</h1>
        <h3>We combine deep industry experience and technology expertise to solve your IT challenges.</h3>

        <div class="d-flex justify-content-center">
            <button class="common_button2" href="{{route('support')}}">Talk to a specialist</button>
        </div>
    </div>
</section>
<!----------End--------->

<!--======// Industry solution //======-->
<section class="container mt-5">
    <!-- section title -->
    <div class="section_text_wrapper mb-4">
        <h4 class="section_title">Solutions Related to Industry</h4>
        {{-- <p class="text-center">You want a tablet, but you need a laptop. Microsoft Surface®, available from Insight, offers the best of both.</p> --}}
    </div>

    <!-- Content wrapper -->
    <div class="row">
        <!-- card item-->
        @foreach ($industrys as $item)
        <div class="col-lg-4 col-sm-12">
            <div class="industry_solution_item">
                <div class="industry_solution_item_content" style="height: 15rem;">
                    <!-- img -->
                    <div class="industy_solution_item_image">
                        <img src="{{asset('storage/requestImg/'.$item->logo)}}" alt="{{$item->title}}">
                    </div>
                    <!-- name -->
                    <div class="industy_solution_item_name">
                        <p>{{$item->title}}</p>
                    </div>

                    <div class="industy_solution_item_text"><p>{!! $item->short_desc !!}</p></div>
                </div>
                <a href="{{route('industry.details',$item->id)}}" class="industry_solution_item_button">Explore our solutions → </a>
            </div>
        </div>
        @endforeach
        <!-- card item-->

    </div>

</section>
<!----------End--------->

<!--======// our clint tab //======-->
<section class="clint_tab_section">
    <div class="container">
        <div class="clint_tab_content">
            <!-- home title -->
            <div class="home_title">
                <h5 class="home_title_heading"> Client success stories</h5>
                <p class="home_title_text">See how we’ve helped organizations of all sizes — across every industry —
                    maximize the value of their IT solutions, leverage emerging technologies and create fresh
                    experiences.</p>
            </div>

            <!-- clint_tab_content_button  -->

            <!-- tab button content -->
            <div class="clint_tab_btn_content">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" data-bs-target="#clintFirstTab"
                            data-bs-toggle="pill">HEALTHCARE</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-target="#clintSecondTab"
                            data-bs-toggle="pill">HIGHER EDUCATION</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-target="#clintThirdTab"
                            data-bs-toggle="pill">MINING</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-target="#clintFourthTab"
                            data-bs-toggle="pill">ENERGY</a></li>
                </ul>
            </div>

            <!-- clint tab contet area -->
            <div class="tab-content mt-4">

                <!-- single area -->
                <div class="clint_tab_area tab-pane fade show active" id="clintFirstTab">
                    <!-- wrapper -->
                    <div class="row">
                        <!-- thumbanial -->
                        <div class="col-lg-4 col-sm-12">
                            <div class="clint_tab_area_thumbnail_image">
                                <img src="images/tabs_images/steward-health-care-transforms-care.jpg" alt="">
                            </div>

                            <div class="clint_tab_area_thumbnail_caption">
                                <p>Steward Health Care reduces patient length of stay and improves care coordination
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


                <!-- single area -->
                <div class="clint_tab_area tab-pane fade" id="clintSecondTab">
                    <!-- wrapper -->
                    <div class="row">
                        <!-- thumbanial -->
                        <div class="col-lg-4 col-sm-12">
                            <div class="clint_tab_area_thumbnail_image">
                                <img src="images/tabs_images/bonvista-energy-move-to-the-cloud-thumbnail.jpg"
                                    alt="">
                            </div>

                            <div class="clint_tab_area_thumbnail_caption">
                                <p>Steward Health Care reduces patient length of stay and improves care coordination
                                    with real-time data analytics.</p>
                            </div>
                        </div>


                        <!-- content -->
                        <div class="col-lg-8 col-sm-12 pl-4">
                            <p class="clint_tab_content_title">College Campus Fast Tracks Deployment for Distance
                                Learning</p>

                            <div class="clint_tab_content_text_area">
                                <p class="clint_tab_content_text_title">Challenge</p>
                                <p class="clint_tab_content_text_paragraph">The college needed a simplified way to
                                    standardize Apple across the board for a distance learning initiative within two
                                    departments. To add to this challenge, the organization needed more than 1,000
                                    MacBook and iPad devices deployed within a 30-day timeframe.</p>
                            </div>

                            <!-- solution list -->

                            <div class="clint_tab_content_text_area_list_marker">
                                <p class="clint_tab_content_text_title">solution</p>

                                <ul>
                                    <li> 1,000+ MacBook and iPad devices </li>
                                    <li> Accelerated device deployment </li>
                                    <li> Asset tagging for easy logistic management </li>
                                    <li> Apple device enrollment program </li>
                                    <li> Touchless deployment via Jamf Mobile Device Management </li>
                                </ul>
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



                <!-- single area -->
                <div class="clint_tab_area tab-pane fade" id="clintThirdTab">
                    <!-- wrapper -->
                    <div class="row">
                        <!-- thumbanial -->
                        <div class="col-lg-4 col-sm-12">
                            <div class="clint_tab_area_thumbnail_image">
                                <img src="images/tabs_images/college-campus-fast-tracks-deployment-for-distance-learning-thumb.jpg"
                                    alt="">
                            </div>

                            <div class="clint_tab_area_thumbnail_caption">
                                <p>Steward Health Care reduces patient length of stay and improves care coordination
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


                <!-- single area -->
                <div class="clint_tab_area tab-pane fade" id="clintFourthTab">
                    <!-- wrapper -->
                    <div class="row">
                        <!-- thumbanial -->
                        <div class="col-lg-4 col-sm-12">
                            <div class="clint_tab_area_thumbnail_image">
                                <img src="images/tabs_images/newcrest-mining-improve-operations-with-azure-iot.jpg"
                                    alt="">
                            </div>

                            <div class="clint_tab_area_thumbnail_caption">
                                <p>Steward Health Care reduces patient length of stay and improves care coordination
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

<!--======// Our expert //======-->
<section class="account_benefits_section_wp">
    <div class="container">
        @if ($techglossy)
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img class="img-fluid" src="{{ asset('storage/' . $techglossy->image) }}" alt="{{$techglossy->badge}}" >
            </div>
            <div class="col-lg-6 col-sm-12 account_benefits_section">

                <h5>{{$techglossy->badge}}</h5>
                <p>{{$techglossy->title}}</p>

                <ul>
                    @php
                        $tag = $techglossy->tags;
                        $tags = explode(',', $tag);
                    @endphp
                    @foreach ($tags as $item)
                    <li>{{ ucwords($item) }}</li>
                    @endforeach
                </ul>
                <button class="common_button2">Read the Blog</button>
            </div>
        </div>
        @endif
    </div>
</section><br>
<!---------End -------->

<!--======// Software show //======-->
<section class="container">
    <!-- business item wrapper -->
    <div class="row solution_business_item  my-4">
        <!-- item -->
        @foreach ($features as $feature)
        <div class="col-lg-4 col-sm-6">
            <!-- image -->
            <div class="business_item_icon">
                <img src="{{ asset('storage/requestImg/' . $feature->logo) }}" alt="">
            </div>

            <!-- content -->
            <div class="business_item_content">
                <p class="business_item_title">{{$feature->title}}</p>
                <p class="business_item_text">{{ Str::limit($feature->short_desc, 150) }}</p>
                <a href="ngenit/client_experience.html" class="business_item_button"><span>Learn More</span> <span class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!---------End -------->


<!--=====// Global call section //=====-->
<section class="global_call_section section_padding">
    <div class="container">
        <!-- content -->
        <div class="global_call_section_content">
            <div class="home_title" style="width: 100%; margin: 0px;">
                <h5 class="home_title_heading" style="text-align: left; color: #fff;"> <span>O</span>ur areas of
                    expertise</h5>

                <p class="home_title_text" style="text-align: left;color: #fff;line-height: 24px;font-size: 18px;">
                    Turn ideas into powerful business outcomes quickly and smoothly. Our solution architects and
                    technical experts are ready to help you achieve more with our Insight Intelligent Technology™
                    portfolio.</p>

                <div class="business_seftion_button" style="text-align: left;">
                    <a href="#">Explore business outcomes</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------End -------->

<!--=====// Tech solution //=====-->
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
<!---------End -------->

<!--=====// We serve //=====-->
<div class="container">
    <!-- section title -->
    <div class="clint_help_section_heading_wrapper">
        <!-- title -->
        <h5 class="home_title_heading" style="text-align: left;"> <span>Ind</span>ustries we serve</h5>
        <p class="home_title_text" style="text-align: left;">We offer breadth and depth —
            combining deep industry expertise and technical skills to connect you to the right IT solutions.
            With one strategic partner, you’ll get guidance at any stage of your IT transformation journey.</p>
    </div>

    <!-- section content wrapper -->
    <div class="row mb-4">
        <!-- content -->
        <div class="col-lg-9 col-sm-12">
            <div class="we_serve_title">
                <p>Private sector</p>
            </div>
            <!-- we_serveItem_wrapper -->
            <div class="row">
                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <a href="industry_single.html" class="we_serve_item">
                        <div class="we_serve_item_image">
                            <img src="images/serveicon/construction-industry-icon.png" alt="">
                        </div>
                        <div class="we_serve_item_text">Construction technology</div>
                    </a>
                </div>

                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <a href="industry_single.html" class="we_serve_item">
                        <div class="we_serve_item_image">
                            <img src="images/serveicon/financial-industry-icon.png" alt="">
                        </div>
                        <div class="we_serve_item_text">Construction technology</div>
                    </a>
                </div>

                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <a href="industry_single.html" class="we_serve_item">
                        <div class="we_serve_item_image">
                            <img src="images/serveicon/healthcare-industry-icon.png" alt="">
                        </div>
                        <div class="we_serve_item_text">Construction technology</div>
                    </a>
                </div>

                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <a href="industry_single.html" class="we_serve_item">
                        <div class="we_serve_item_image">
                            <img src="images/serveicon/manufacturing-industry-icon.png" alt="">
                        </div>
                        <div class="we_serve_item_text">Construction technology</div>
                    </a>
                </div>

                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <a href="industry_single.html" class="we_serve_item">
                        <div class="we_serve_item_image">
                            <img src="images/serveicon/retail-industry-icon.png" alt="">
                        </div>
                        <div class="we_serve_item_text">Construction technology</div>
                    </a>
                </div>

                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <a href="industry_single.html" class="we_serve_item">
                        <div class="we_serve_item_image">
                            <img src="images/serveicon/service-provider-industry-icon.png" alt="">
                        </div>
                        <div class="we_serve_item_text">Construction technology</div>
                    </a>
                </div>

                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <a href="industry_single.html" class="we_serve_item">
                        <div class="we_serve_item_image">
                            <img src="images/serveicon/small-medium-industry-icon.png" alt="">
                        </div>
                        <div class="we_serve_item_text">Construction technology</div>
                    </a>
                </div>

                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <a href="industry_single.html" class="we_serve_item">
                        <div class="we_serve_item_image">
                            <img src="images/serveicon/travel-industry-icon.png" alt="">
                        </div>
                        <div class="we_serve_item_text">Construction technology</div>
                    </a>
                </div>

            </div>
        </div>

        <!-- sidebar -->
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
                    <li><a href="">State & local government ›</a></li>
                </ul>

                <a href="" class="business_item_button"
                    style="justify-content: left;padding-left:15px;"><span>Explore Insight Public Sector</span>
                    <span class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
            </div>
        </div>

    </div>
</div>
<!---------End -------->

<!--=====// Pageform section //=====-->
<section class="solution_contact_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="thing_together_wrapper">
                    <h4><span class="why_Choose_lineTop">L</span>et’s do big things together.</h4>
                    <p>We’ll align your business with the right technology and solutions to modernize, compete and
                        grow. Together, let’s accelerate tomorrow.</p>

                    <h5><i class="fa-solid fa-phone"></i>1.800.INSIGHT</h5>
                </div>
            </div>
            <!----------Sidebar Privacy Policy --------->
            <div class="col-lg-6 col-sm-12">
                <!-- form Sidebar -->
                <div class="row specialist_contect_form">
                    <h4 class="col-12">Let's connect</h4>
                    <!-- item -->
                    <div class="solution_form_item_wp col-lg-6 col-sm-12">
                        <input class="form_input" type="text" placeholder="First Name">
                        <label class="form_label" for="">First Name: *</label>
                    </div>

                    <!-- item -->
                    <div class="solution_form_item_wp col-lg-6 col-sm-12">
                        <input class="form_input" type="text" placeholder="Last Name">
                        <label class="form_label" for="">Last Name: *</label>
                    </div>

                    <!-- item -->
                    <div class="solution_form_item_wp col-lg-6 col-sm-12">
                        <input class="form_input" type="email" placeholder="Business Email">
                        <label class="form_label" for="">Business Email: *</label>
                    </div>

                    <!-- item -->
                    <div class="solution_form_item_wp col-lg-6 col-sm-12">
                        <input class="form_input" type="number" placeholder="Phone">
                        <label class="form_label" for="">Phone: *</label>
                    </div>

                    <!-- item -->
                    <div class="solution_form_item_wp col-lg-6 col-sm-12">
                        <select name="" id="" class="form_input">
                            <option value="">Sate</option>
                            <option value="">Dhaka</option>
                            <option value="">Dinajpur</option>
                            <option value="">Rangpur</option>
                            <option value="">Panchagar</option>
                            <option value="">Nilphamari</option>
                            <option value="">Gajipur</option>
                            <option value="">Sylhet</option>
                        </select>
                        <label class="form_label" for="">Sate: *</label>
                    </div>

                    <!-- item -->
                    <div class="solution_form_item_wp col-lg-6 col-sm-12">
                        <select name="" id="" class="form_input">
                            <option value="">Country</option>
                            <option value="">Bangladesh</option>
                            <option value="">India</option>
                            <option value="">Pakistan</option>
                            <option value="">Afganistan</option>
                        </select>
                        <label class="form_label" for="">Country: *</label>
                    </div>

                    <!-- item -->
                    <div class="solution_form_item_wp col-lg-12 col-sm-12">
                        <input class="form_input" type="text" placeholder="Company / Organization *">
                        <label class="form_label" for="">Company *</label>
                    </div>
                    <!-- item -->
                    <div class="solution_form_item_wp col-lg-12 col-sm-12">
                        <textarea class="form_input" name="" id="" rows="2"
                            placeholder="To better assist you, please describe how we can help."></textarea>
                        <label class="form_label" for="">To better assist you, please describe how we can
                            help.</label>
                    </div>



                    <div class="d-flex">
                        <!-- checkbox input -->
                        <div class="" style="margin-right: 10px;">
                            <input type="checkbox">
                        </div>
                        <!-- content -->
                        <div class="checkBox_content">By checking this box, I consent to receive Insight marketing
                            emails. We respect your privacy and will not share your personal information with any
                            other company, person or identity.</div>
                    </div>


                    <!-- submit button -->
                    <div>
                        <button href="#" class="common_button2 ml-2 mt-4">Hear from a specialist</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------End -------->
@endsection
