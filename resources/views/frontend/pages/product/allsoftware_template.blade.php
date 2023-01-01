@extends('frontend.master')

@section('content')
    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->

    <!-- business section -->

    <section class="business_seftion section_padding">
        <div class="container">
            <div class="business_seftion_content">
                <!-- home title -->
                <div class="home_title">
                    <h5 class="home_title_heading"> <Span>T</Span>op businesses across industries have trusted Insight to
                        achieve their ambitious business goals.</h5>

                    <p class="home_title_text">Our technical expertise, broad solutions portfolio and supply chain
                        capabilities give us the right resources and scale to achieve more for you.</p>
                </div>

                <!-- business item wrapper -->
                <div class="business_seftion_wrapper">

                    <!-- item -->
                    <div href="#" class="business_item">

                        <!-- image -->
                        <div class="business_item_icon">
                            <img src="assets/frontend/image/business icon/outcomes-client-experience-icon.png"
                                alt="">
                        </div>

                        <!-- content -->
                        <div class="business_item_content">
                            <p class="business_item_title">Client experience</p>
                            <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                                hardware, software and applications.</p>
                            <a href="" class="business_item_button"><span>Learn More</span> <span
                                    class="business_item_button_icon"><i
                                        class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>

                    <!-- item -->
                    <div href="#" class="business_item">

                        <!-- image -->
                        <div class="business_item_icon">
                            <img src="assets/frontend/image/business icon/outcomes-grow-revenue-icon.png" alt="">
                        </div>

                        <!-- content -->
                        <div class="business_item_content">
                            <p class="business_item_title">Client experience</p>
                            <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                                hardware, software and applications.</p>
                            <a href="" class="business_item_button"><span>Learn More</span> <span
                                    class="business_item_button_icon"><i
                                        class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>


                    <!-- item -->
                    <div href="#" class="business_item">

                        <!-- image -->
                        <div class="business_item_icon">
                            <img src="assets/frontend/image/business icon/outcomes-manage-cost-icon.png" alt="">
                        </div>

                        <!-- content -->
                        <div class="business_item_content">
                            <p class="business_item_title">Client experience</p>
                            <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                                hardware, software and applications.</p>
                            <a href="" class="business_item_button"><span>Learn More</span> <span
                                    class="business_item_button_icon"><i
                                        class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>

                    <!-- item -->
                    <div href="#" class="business_item">

                        <!-- image -->
                        <div class="business_item_icon">
                            <img src="assets/frontend/image/business icon/outcomes-mitigate-risk-icon.png" alt="">
                        </div>

                        <!-- content -->
                        <div class="business_item_content">
                            <p class="business_item_title">Client experience</p>
                            <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                                hardware, software and applications.</p>
                            <a href="" class="business_item_button"><span>Learn More</span> <span
                                    class="business_item_button_icon"><i
                                        class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>


                    <!-- item -->
                    <div href="#" class="business_item">

                        <!-- image -->
                        <div class="business_item_icon">
                            <img src="assets/frontend/image/business icon/outcomes-operational-efficiencies-icon.png"
                                alt="">
                        </div>

                        <!-- content -->
                        <div class="business_item_content">
                            <p class="business_item_title">Client experience</p>
                            <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                                hardware, software and applications.</p>
                            <a href="" class="business_item_button"><span>Learn More</span> <span
                                    class="business_item_button_icon"><i
                                        class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>


                </div>

                <!-- button -->
                <div class="business_seftion_button">
                    <a href="#">Explore business outcomes</a>
                </div>
            </div>
        </div>
    </section>

    <!-- business section end-->


    <!-- our clint tab -->

    <section class="clint_tab_section section_padding">
        <div class="container">

            <div class="clint_tab_content">
                <!-- home title -->
                <div class="home_title" style="max-width: 980px;">
                    <h5 class="home_title_heading"> Client success stories</h5>
                    <p class="home_title_text">See how we’ve helped organizations of all sizes — across every industry —
                        maximize the value of their IT solutions, leverage emerging technologies and create fresh
                        experiences.</p>
                </div>

                <!-- clint_tab_content_button  -->

                <div class="clint_tab_button">
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
                </div>

                <!-- clint tab contet area -->

                <div class="clint_tab_area_main tab-content">

                    <!-- single area -->
                    <div class="clint_tab_area tab-pane fade show active" id="clintFirstTab">
                        <!-- wrapper -->
                        <div class="clint_tab_area_wrapper">
                            <!-- thumbanial -->
                            <div class="clint_tab_area_thumbnail">
                                <div class="clint_tab_area_thumbnail_image">
                                    <img src="assets/frontend/image/tabs image/steward-health-care-transforms-care.jpg"
                                        alt="">
                                </div>

                                <div class="clint_tab_area_thumbnail_caption">
                                    <p>Steward Health Care reduces patient length of stay and improves care coordination
                                        with real-time data analytics.</p>
                                </div>
                            </div>


                            <!-- content -->
                            <div class="clint_tab_area_content">
                                <p class="clint_tab_content_title">Steward Health Care Transforms Care Through Digital
                                    Innovation</p>

                                <div class="clint_tab_content_text_area">
                                    <p class="clint_tab_content_text_title">Challenge</p>
                                    <p class="clint_tab_content_text_paragraph">Steward Health Care wanted to reduce
                                        patient length of stay and improve the overall patient experience.</p>
                                </div>

                                <div class="clint_tab_content_text_area">
                                    <p class="clint_tab_content_text_title">solutions</p>
                                    <p class="clint_tab_content_text_paragraph">Microsoft Azure role-based access control
                                        and encryption provide HIPAA-compliant security for a unified data monitoring
                                        platform that leverages real-time business data and analytics.</p>
                                </div>

                                <div class="clint_tab_content_text_area_list">
                                    <p class="clint_tab_content_text_title">Results</p>

                                    <ul>
                                        <li>98% accurate prediction of patient load out to a week at a time</li>
                                        <li>Reduced patient length of stay by 1.5 dayss</li>
                                        <li>Predictable staffing</li>
                                        <li>Reduced operational costs — saving millions of dollars per hospital, per year
                                        </li>
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
                        <div class="clint_tab_area_wrapper">
                            <!-- thumbanial -->
                            <div class="clint_tab_area_thumbnail">
                                <div class="clint_tab_area_thumbnail_image">
                                    <img src="assets/frontend/image/tabs image/bonvista-energy-move-to-the-cloud-thumbnail.jpg"
                                        alt="">
                                </div>

                                <div class="clint_tab_area_thumbnail_caption">
                                    <p>Steward Health Care reduces patient length of stay and improves care coordination
                                        with real-time data analytics.</p>
                                </div>
                            </div>


                            <!-- content -->
                            <div class="clint_tab_area_content">
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
                                        <li>Reduced operational costs — saving millions of dollars per hospital, per year
                                        </li>
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
                        <div class="clint_tab_area_wrapper">
                            <!-- thumbanial -->
                            <div class="clint_tab_area_thumbnail">
                                <div class="clint_tab_area_thumbnail_image">
                                    <img src="assets/frontend/image/tabs image/college-campus-fast-tracks-deployment-for-distance-learning-thumb.jpg"
                                        alt="">
                                </div>

                                <div class="clint_tab_area_thumbnail_caption">
                                    <p>Steward Health Care reduces patient length of stay and improves care coordination
                                        with real-time data analytics.</p>
                                </div>
                            </div>


                            <!-- content -->
                            <div class="clint_tab_area_content">
                                <p class="clint_tab_content_title">Steward Health Care Transforms Care Through Digital
                                    Innovation</p>

                                <div class="clint_tab_content_text_area">
                                    <p class="clint_tab_content_text_title">Challenge</p>
                                    <p class="clint_tab_content_text_paragraph">Steward Health Care wanted to reduce
                                        patient length of stay and improve the overall patient experience.</p>
                                </div>

                                <div class="clint_tab_content_text_area">
                                    <p class="clint_tab_content_text_title">solutions</p>
                                    <p class="clint_tab_content_text_paragraph">Microsoft Azure role-based access control
                                        and encryption provide HIPAA-compliant security for a unified data monitoring
                                        platform that leverages real-time business data and analytics.</p>
                                </div>

                                <div class="clint_tab_content_text_area_list">
                                    <p class="clint_tab_content_text_title">Results</p>

                                    <ul>
                                        <li>98% accurate prediction of patient load out to a week at a time</li>
                                        <li>Reduced patient length of stay by 1.5 dayss</li>
                                        <li>Predictable staffing</li>
                                        <li>Reduced operational costs — saving millions of dollars per hospital, per year
                                        </li>
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
                        <div class="clint_tab_area_wrapper">
                            <!-- thumbanial -->
                            <div class="clint_tab_area_thumbnail">
                                <div class="clint_tab_area_thumbnail_image">
                                    <img src="assets/frontend/image/tabs image/newcrest-mining-improve-operations-with-azure-iot.jpg"
                                        alt="">
                                </div>

                                <div class="clint_tab_area_thumbnail_caption">
                                    <p>Steward Health Care reduces patient length of stay and improves care coordination
                                        with real-time data analytics.</p>
                                </div>
                            </div>


                            <!-- content -->
                            <div class="clint_tab_area_content">
                                <p class="clint_tab_content_title">Steward Health Care Transforms Care Through Digital
                                    Innovation</p>

                                <div class="clint_tab_content_text_area">
                                    <p class="clint_tab_content_text_title">Challenge</p>
                                    <p class="clint_tab_content_text_paragraph">Steward Health Care wanted to reduce
                                        patient length of stay and improve the overall patient experience.</p>
                                </div>

                                <div class="clint_tab_content_text_area">
                                    <p class="clint_tab_content_text_title">solutions</p>
                                    <p class="clint_tab_content_text_paragraph">Microsoft Azure role-based access control
                                        and encryption provide HIPAA-compliant security for a unified data monitoring
                                        platform that leverages real-time business data and analytics.</p>
                                </div>

                                <div class="clint_tab_content_text_area_list">
                                    <p class="clint_tab_content_text_title">Results</p>

                                    <ul>
                                        <li>98% accurate prediction of patient load out to a week at a time</li>
                                        <li>Reduced patient length of stay by 1.5 dayss</li>
                                        <li>Predictable staffing</li>
                                        <li>Reduced operational costs — saving millions of dollars per hospital, per year
                                        </li>
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

    <!-- our clint tab end -->


    <!-- our expert -->
    <section class="our_expert_section section_padding">
        <div class="container">
            <div class="our_expert_section_wrapper">
                <div class="our_expert_video">
                    <iframe allow="autoplay; fullscreen; picture-in-picture; camera; microphone; display-capture"
                        allowfullscreen="" allowtransparency="true" referrerpolicy="no-referrer-when-downgrade"
                        class="vidyard-iframe-W5NGDbKxgaZQQsSm1eaazn" frameborder="0" height="100%" width="100%"
                        scrolling="no"
                        src="https://play.vidyard.com/W5NGDbKxgaZQQsSm1eaazn?disable_popouts=1&amp;v=4.3.10&amp;type=inline"
                        title="Be Ambitious"
                        style="opacity: 1; background-color: transparent; height: 326px; max-width: 100%;"></iframe>
                </div>

                <div class="our_expert_content">
                    <div class="home_title" style="width: 100%; margin: 0px;">
                        <h5 class="home_title_heading" style="text-align: left;"> <span>O</span>ur areas of expertise</h5>

                        <p class="home_title_text" style="text-align: left;">We’ll help you navigate today’s ever-changing
                            business environment with teams of technical experts and decades of industry experience.</p>

                        <div class="business_seftion_button" style="text-align: left;">
                            <a href="#">Explore business outcomes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our expert end -->



    <!-- software show -->

    <section class="software_show section_padding">
        <div class="container">
            <div class="software_show_wrapper">
                <!-- item -->
                <div href="#" class="business_item">

                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="assets/frontend/image/business icon/outcomes-client-experience-icon.png" alt="">
                    </div>

                    <!-- content -->
                    <div class="business_item_content">
                        <p class="business_item_title">Client experience</p>
                        <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                            hardware, software and applications.</p>
                        <a href="" class="business_item_button"><span>Learn More</span> <span
                                class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>

                <div href="#" class="business_item">

                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="assets/frontend/image/business icon/outcomes-client-experience-icon.png" alt="">
                    </div>

                    <!-- content -->
                    <div class="business_item_content">
                        <p class="business_item_title">Client experience</p>
                        <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                            hardware, software and applications.</p>
                        <a href="" class="business_item_button"><span>Learn More</span> <span
                                class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>


                <div href="#" class="business_item">

                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="assets/frontend/image/business icon/outcomes-client-experience-icon.png" alt="">
                    </div>

                    <!-- content -->
                    <div class="business_item_content">
                        <p class="business_item_title">Client experience</p>
                        <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                            hardware, software and applications.</p>
                        <a href="" class="business_item_button"><span>Learn More</span> <span
                                class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>



                <div href="#" class="business_item">

                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="assets/frontend/image/business icon/outcomes-client-experience-icon.png" alt="">
                    </div>

                    <!-- content -->
                    <div class="business_item_content">
                        <p class="business_item_title">Client experience</p>
                        <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                            hardware, software and applications.</p>
                        <a href="" class="business_item_button"><span>Learn More</span> <span
                                class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>



                <div href="#" class="business_item">

                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="assets/frontend/image/business icon/outcomes-client-experience-icon.png" alt="">
                    </div>

                    <!-- content -->
                    <div class="business_item_content">
                        <p class="business_item_title">Client experience</p>
                        <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                            hardware, software and applications.</p>
                        <a href="" class="business_item_button"><span>Learn More</span> <span
                                class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>



                <div href="#" class="business_item">

                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="assets/frontend/image/business icon/outcomes-client-experience-icon.png" alt="">
                    </div>

                    <!-- content -->
                    <div class="business_item_content">
                        <p class="business_item_title">Client experience</p>
                        <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                            hardware, software and applications.</p>
                        <a href="" class="business_item_button"><span>Learn More</span> <span
                                class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- software show end -->


    <!-- clint help section -->
    <section class="clint_help_section clint_help_padding">
        <div class="container">
            <!-- heading wrapper -->
            <div class="clint_help_section_heading_wrapper">
                <!-- title -->
                <h5 class="home_title_heading" style="text-align: left;"> <span>W</span>e help clients drive digital
                    transformation</h5>

                <!-- button -->
                <div class="business_seftion_button">
                    <a href="#">Explore business outcomes</a>
                </div>
            </div>
        </div>

        <!-- wrapper -->
        <div class="clint_help_wrapper">

            <!-- item -->
            <div class="clint_help_item">
                <!-- image -->
                <div class="clint_help_item_thumbnail">
                    <img src="assets/frontend/image/service/businessmen-using-laptop-during-discussion.jpg"
                        alt="">
                </div>
                <!-- item content -->
                <div class="clint_help_item_content">
                    <h5 class="clint_help_item_title">Consulting services</h5>
                    <p class="clint_help_item_text">Navigate the complexities of your IT ecosystem with confidence. Our
                        technical experts and technology specialists are equipped with partner certifications, industry
                        knowledge and deep expertise to guide you along the way.</p>

                    <!-- list item -->
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
                </div>
                <!-- clint help button -->

                <a href="" class="clint_help_button">
                    <span>Explore managed services</span>
                    <span><i class="fa-solid fa-arrow-right-long"></i></span>
                </a>
            </div>


            <!-- item -->
            <div class="clint_help_item">
                <!-- image -->
                <div class="clint_help_item_thumbnail">
                    <img src="assets/frontend/image/service/consulting-presentation.jpg" alt="">
                </div>
                <!-- item content -->
                <div class="clint_help_item_content">
                    <h5 class="clint_help_item_title">Consulting services</h5>
                    <p class="clint_help_item_text">Navigate the complexities of your IT ecosystem with confidence. Our
                        technical experts and technology specialists are equipped with partner certifications, industry
                        knowledge and deep expertise to guide you along the way.</p>

                    <!-- list item -->
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
                </div>
                <!-- clint help button -->

                <a href="" class="clint_help_button">
                    <span>Explore managed services</span>
                    <span><i class="fa-solid fa-arrow-right-long"></i></span>
                </a>
            </div>


            <!-- item -->
            <div class="clint_help_item">
                <!-- image -->
                <div class="clint_help_item_thumbnail">
                    <img src="assets/frontend/image/service/remote-business-hours.jpg" alt="">
                </div>
                <!-- item content -->
                <div class="clint_help_item_content">
                    <h5 class="clint_help_item_title">Consulting services</h5>
                    <p class="clint_help_item_text">Navigate the complexities of your IT ecosystem with confidence. Our
                        technical experts and technology specialists are equipped with partner certifications, industry
                        knowledge and deep expertise to guide you along the way.</p>

                    <!-- list item -->
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
                </div>
                <!-- clint help button -->

                <a href="" class="clint_help_button">
                    <span>Explore managed services</span>
                    <span><i class="fa-solid fa-arrow-right-long"></i></span>
                </a>
            </div>

        </div>
    </section>
    <!-- clint help section end-->


    <!-- global call section -->

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

    <!-- global call section end -->
@endsection
