@extends('frontend.master')
@section('content')
    <!--========// Header Title //========-->
    <section class="apply_job_form_title"
        style="background-image: url('{{ asset('frontend/images/buy-category-hero.jpg') }}'); margin-top:100px">
        <div class="container">
            <div class="d-flex justify-content-center">
                <span></span>
            </div>
            <h1>Registration for a job</h1>
        </div>

    </section>
    <!------- End------->

    <!--=======// Apply For A Job //========-->
    <section class="container">
        <div class="apply_job_form_wrapper">
            <form action="{{ route('job_registration.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!--Personal Details (1)-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="" data-toggle="collapse" aria-expanded="true" href="#collapseOne">Personal
                                    Details</a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-6">
                                        <input type="text" name="name" required placeholder="Your name">
                                    </div>
                                    <div class="col-6">
                                        <input type="email" name="email" required placeholder="Email">
                                    </div>
                                    <div class="col-6">
                                        <input type="number" name="phone_number" required placeholder="Phone number"
                                        maxlength="255" tabindex="0">

                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="address" placeholder="Address">
                                    </div>
                                    <div class="col-6">

                                        <input type="text" name="district" required placeholder="District"
                                            maxlength="255" tabindex="0">

                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="country" required placeholder="Country"
                                            maxlength="255" tabindex="0">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Professional Training (1)-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="" data-toggle="collapse" href="#collapseOne">Professional Training</a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-8">
                                        <input type="text" name="training_one_institution"
                                            placeholder="Training Institute name (1)">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="training_one_topic" placeholder="Topics Covered">
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="training_two_institution"
                                            placeholder="Training Institute name (2)">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="training_two_topic" placeholder="Topics Covered">
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="training_three_institution"
                                            placeholder="Training Institute name (3)">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="training_three_topic" placeholder="Topics Covered">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Professional  Details (2)-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFour">Professional Details</a>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-6">
                                        <input type="text" name="professional_company_name_one"
                                            placeholder="Company Name (Experience 1)">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="professional_depertment_one" placeholder="Department">
                                    </div>
                                    <div class="col-6">
                                        <span class="text-white">Start Date:</span>
                                        <input type="date" name="professional_start_date_one">
                                    </div>
                                    <div class="col-6">
                                        <span class="text-white pl-2">End Date :</span>
                                        <input type="date" name="professional_end_date_one">
                                    </div>
                                    <div class="col-12">
                                        <label class="m-2" for=""></label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="professional_company_name_two"
                                            placeholder="Company Name (Experience 1)">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="professional_depertment_two"
                                            placeholder="Department">
                                    </div>
                                    <div class="col-6">
                                        <span class="text-white">Start Date:</span>
                                        <input type="date" name="professional_start_date_two">
                                    </div>
                                    <div class="col-6">
                                        <span class="text-white pl-2">End Date :</span>
                                        <input type="date" name="professional_end_date_two">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Academic Details (2)-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFour">Academic Details</a>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-6">
                                        <input type="text" name="academic_institution_one"
                                            placeholder="Institute Name (Academic 1)">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_degree_one" placeholder="Exam/Degree Title">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_passing_one" placeholder="Year of Passing">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_result_one" placeholder="Result/CGPA">
                                    </div>
                                    <div class="col-12">
                                        <label class="m-2" for=""></label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_institution_two"
                                            placeholder="Institute Name (Academic 2)">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_degree_two" placeholder="Exam/Degree Title">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_passing_two" placeholder="Year of Passing">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="academic_result_two" placeholder="Result/CGPA">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Skill Set-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapseSix">Skill Set</a>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-4">
                                        <input type="text" name="skill_one" placeholder="Skill in">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="skill_two" placeholder="Skill in">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="skill_three" placeholder="Skill in">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="skill_four" placeholder="Skill in">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="skill_five" placeholder="Skill in">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="skill_six" placeholder="Skill in">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Extra-Curriculum Activities-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapseSix">Extra-Curriculum
                                    Activities</a>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-4">
                                        <input type="text" name="activity_one" placeholder="Activities One">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="activity_two" placeholder="Activities Two">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="activity_three" placeholder="Activities Three">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="activity_four" placeholder="Activities Four">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="activity_five" placeholder="Activities Five">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="activity_six" placeholder="Activities Six">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Professional Reference-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapseEight">Reference Relative</a>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse">
                                <!--form item-->
                                <div class="job_apply_form row mt-2">
                                    <div class="col-6">
                                        <input type="text" name="reference_name_one" placeholder="Name">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="reference_organisation_one"
                                            placeholder="Organization">
                                    </div>
                                    <div class="col-6">
                                        <input type="email" name="reference_email_one" placeholder="Email">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="reference_phone_one" placeholder="Mobile Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Relative Reference-->
                    <div class="col-lg-6 col-sm-12">
                        <div class="apply_item_wrapper">
                            <div class="panel-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapseEight">Reference Personal</a>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse mt-2">
                                <!--form item-->
                                <div class="job_apply_form row">
                                    <div class="col-6">
                                        <input type="text" name="reference_name_two" placeholder="Name">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="reference_organisation_two"
                                            placeholder="Organization">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="reference_email_two" placeholder="Email">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="reference_phone_two" placeholder="Mobile Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job_apply_form row">
                    <div class="col-lg-6 col-sm-12">
                        <input type="file" name="resume">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row linkdin_profile_link">
                            <div class="col-4">
                                <label class="text-dark">Linkedin Profile</label>
                            </div>
                            <div class="col-8">
                                <input type="url" name="linkedin" placeholder="https://www.linkedin.com">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="job_submit_btn">Submit</button>
                </div>

            </form>
        </div>
    </section><br>
    <!---------End------->
    <!--========// Footer //=======-->
    <footer class="container-fluid p-0">
        <!-- footyer gradient -->
        <div class="footer_top">
            <p>We deliver Insight Intelligent Technology Solutions™ expertise.</p>
        </div>

        <!-- main footer -->
        <div class="footer_middle">
            <div class="row footer_middle_wrapper">
                <!-- item -->
                <div class="col-lg-4 col-md-8 col-sm-12 footer_item_wrapper">
                    <!-- title -->
                    <h6>Newsletter</h6>
                    <!-- text -->
                    <p>Sign up to receive the IT content that matters most to you. You can update your preferences or
                        unsubscribe any time.</p>
                    <!-- button -->
                    <button href="" class="common_button2">Sign up for our newsletter</button>

                    <!-- <div class="footer_item_logo">
                                                                                                                                                                                                        <h6><a href="#">Read the magazine</a></h6>
                                                                                                                                                                                                        <img src="images/footerLogo.png" alt="">
                                                                                                                                                                                                    </div> -->
                </div>

                <!-- item -->
                <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
                    <!-- title -->
                    <h6>About NgenIt</h6>
                    <!-- nav list -->
                    <div class="footer_nav_list">
                        <ul>
                            <li><a href="">Company overview</a></li>
                            <li><a href="">Principal</a></li>
                            <li><a href="">Partners</a></li>
                            <li><a href="">Clients</a></li>
                        </ul>
                    </div>
                </div>

                <!-- item -->
                <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
                    <!-- title -->
                    <h6 class="main_footer_item_title">Products & Services</h6>
                    <!-- nav list -->
                    <div class="footer_nav_list">
                        <ul>
                            <li><a href="">Products</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Solutions</a></li>
                            <li><a href="">Industry</a></li>
                            <li><a href="">TechViews</a></li>
                        </ul>
                    </div>
                </div>

                <!-- item -->
                <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
                    <!-- title -->
                    <h6 class="main_footer_item_title">Features & Knowledge </h6>
                    <!-- nav list -->
                    <div class="footer_nav_list">
                        <ul>
                            <li><a href="">Knowledge base</a></li>
                            <li><a href="">NGEN IT Account</a></li>
                    </div>
                </div>

                <!-- item -->
                <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
                    <!-- title -->
                    <h6 class="main_footer_item_title">Help And Support</h6>
                    <!-- nav list -->
                    <div class="footer_nav_list">
                        <ul>
                            <li><a href="">Contact us</a></li>
                            <li><a href="">FAQs</a></li>
                            <li><a href="">Order Helps</a></li>
                            <li><a href="">Order Tracks</a></li>
                            <li><a href="">Supports</a></li>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer social -->
        <div class="social_icon_wrapper">
            <div class="footer_social_icon">
                <ul>
                    <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-square-facebook"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i> </a></li>
                </ul>
            </div>
        </div>

        <!-- footer bottom -->

        <div class="footer_bottom">
            <div class="footer_bottom_wrapper">
                <!-- copy -->
                <div class="footer_copy">&copy NgenIt</div>
                <!-- footer bottom list -->
                <div class="footer_bottom_list">
                    <ul>
                        <li><a href="./privacy_policy.html">Privacy policy</a></li>
                        <li><a href="./terms_policy.html">All Terms & Policies</a></li>
                        <li><a href="./web_accessibility.html">Web Accessibility</a></li>
                        <li><a href="./tech_glossary.html">Tech glossary</a></li>
                        <li><a href="./sitemap.html">Sitemap</a></li>
                        <li><label for="show_cookies">Cookies settings</label></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!--=======// Cookises Modals //=======-->
    <section class="cookises_settings_wrapper">

        <input type="checkbox" id="show_cookies">
        <!-- <label for="show_cookies">View Form</label> -->

        <!--Content Wrapper-->
        <div class="cookises_settings_pop">
            <label for="show_cookies" class="close-btn fas fa-times" title="close"></label>
            <div class="modal_title_cookises">
                <img src="images/ngenit.png" alt="">
                <h2 class="align-middle">Privacy Preference Center</h2>
            </div>
            <!--------Cookies Tab content-------->
            <div id="Cookies" class="tab_cookises_wrapper">
                <div class="tab_cookises_settings">
                    <button class="tablinks" onclick="openCity(event, 'Privacy')" id="defaultOpen">Your privacy</button>
                    <button class="tablinks" onclick="openCity(event, 'Strictly')">Strictly necessary cookies</button>
                    <button class="tablinks" onclick="openCity(event, 'Performance')">Performance cookies</button>
                    <button class="tablinks" onclick="openCity(event, 'Functional')">Functional cookies</button>
                    <button class="tablinks" onclick="openCity(event, 'Targeting')">Targeting cookies</button>
                </div>

                <div id="Privacy" class="tab_cookises_tabcontent" style="display:block">
                    <h5>Your privacy</h5>
                    <p>When you visit any website, it may store or retrieve information on your browser, mostly in the form
                        of cookies. This information might be about you, your preferences or your device and is mostly used
                        to make the site work as you expect it to. The information does not usually directly identify you,
                        but it can give you a more personalized web experience. Because we respect your right to privacy,
                        you can choose not to allow some types of cookies. Click on the different category headings to find
                        out more and change our default settings. However, blocking some types of cookies may impact your
                        experience of the site and the services we are able to offer. You can get more information by going
                        to our Privacy Policy or Statement in the footer of the website.</p>
                </div>

                <div id="Strictly" class="tab_cookises_tabcontent" style="display:none">
                    <div class="d-flex justify-content-between">
                        <h5>Strictly necessary cookies</h5>
                        <h5 style="color: #ae0a46; display: inline;">Always active</h5>
                    </div>

                    <p>These cookies are necessary for the website to function and cannot be switched off in our systems.
                        They are usually only set in response to actions made by you which amount to a request for services,
                        such as setting your privacy preferences, logging in or filling in forms. You can set your browser
                        to block or alert you about these cookies, but some parts of the site will not then work. These
                        cookies do not store any personally identifiable information.</p>

                    <a>Cookies details</a>

                </div>

                <div id="Performance" class="tab_cookises_tabcontent" style="display:none">
                    <div class="d-flex justify-content-between">
                        <h5>Performance cookies</h5>
                        <label class="switch">
                            <input type="checkbox" id="myCheckboxbtn" onclick="myCheckboxbtn()" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <p>These cookies allow us to count visits and traffic sources so we can measure and improve the
                        performance of our site. They help us to know which pages are the most and least popular and see how
                        visitors move around the site. Most of these cookies collect and process aggregated (anonymized)
                        information without identifying individuals. If you do not allow these cookies we will not know when
                        you have visited our site, and will not be able to monitor its performance.</p>

                    <a style="color: #ae0a46; cursor: pointer;" onclick="switchVisible();" value="Click"> Cookies
                        details</a>
                </div>

                <div id="Functional" class="tab_cookises_tabcontent" style="display:none">
                    <div class="d-flex justify-content-between">
                        <h5>Functional cookies</h5>
                        <label class="switch">
                            <input type="checkbox" id="myCheckboxbtn1" onclick="myCheckboxbtn1()" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <p>These cookies enable the website to provide enhanced functionality and personalisation. They may be
                        set by us or by third party providers whose services we have added to our pages. If you do not allow
                        these cookies then some or all of these services may not function properly.</p>

                    <a style="color: #ae0a46; cursor: pointer;" onclick="switchVisible();" value="Click"> Cookies
                        details</a>
                </div>

                <div id="Targeting" class="tab_cookises_tabcontent" style="display:none">
                    <div class="d-flex justify-content-between">
                        <h5>Targeting cookies</h5>
                        <label class="switch">
                            <input type="checkbox" id="myCheckboxbtn2" onclick="myCheckboxbtn2()" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <p>These cookies may be set through our site by our advertising partners. They may be used by those
                        companies to build a profile of your interests and show you relevant adverts on other sites. They do
                        not store directly personal information, but are based on uniquely identifying your browser and
                        internet device. If you do not allow these cookies, you will experience less targeted advertising.
                    </p>

                    <a style="color: #ae0a46; cursor: pointer;" onclick="switchVisible();" value="Click"> Cookies
                        details</a>
                </div>
            </div>
            <!--------Cookies Details----------->
            <div id="Cookies_details" class="Cookies_details_wrapper">
                <div class="cookie_list_filter row d-flex">
                    <div class="col-4 d-flex">
                        <label onclick="switchVisible();" value="Click"><i
                                class="fa-solid fa-angle-left fa-xl"></i></label>
                        <h5>Cookie List</h5>
                    </div>
                    <div class="col-8 d-flex justify-content-end">
                        <form class="cookies_search_btn d-flex" action="">
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <button class="cookie_filter_icon"><i class="fa-solid fa-filter fa-xl"></i></button>
                    </div>
                </div>
                <div class="cookie_list_content">
                    <div class="cookie_list_content_item">
                        <!--====///First///====-->
                        <button class="collapsible">First party cookies</button>
                        <div class="content">
                            <!--Item-->
                            <ul>
                                <li>
                                    <div class="cookie_veiw_name">Name</div>
                                    <div class="cookie_veiw_title">trwv.vc</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Host</div>
                                    <div class="cookie_veiw_title">ngenit.com</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Duration</div>
                                    <div class="cookie_veiw_title">A few seconds</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Type</div>
                                    <div class="cookie_veiw_title">First Party</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Category</div>
                                    <div class="cookie_veiw_title">Targeting cookies</div>
                                </li>
                            </ul>

                            <!--Item-->
                            <ul>
                                <li>
                                    <div class="cookie_veiw_name">Name</div>
                                    <div class="cookie_veiw_title">trwv.vc</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Host</div>
                                    <div class="cookie_veiw_title">ngenit.com</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Duration</div>
                                    <div class="cookie_veiw_title">A few seconds</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Type</div>
                                    <div class="cookie_veiw_title">First Party</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Category</div>
                                    <div class="cookie_veiw_title">Targeting cookies</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Description</div>
                                    <div class="cookie_veiw_title">Marketo - These cookies store the total number of visits
                                        each visitor has to the Site, track email recipient behavior to measure campaign
                                        effectiveness and personalize Site content based on information known about the
                                        visitor.</div>
                                </li>
                            </ul>
                            <!--Item-->
                            <ul>
                                <li>
                                    <div class="cookie_veiw_name">Name</div>
                                    <div class="cookie_veiw_title">trwv.vc</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Host</div>
                                    <div class="cookie_veiw_title">ngenit.com</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Duration</div>
                                    <div class="cookie_veiw_title">A few seconds</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Type</div>
                                    <div class="cookie_veiw_title">First Party</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Category</div>
                                    <div class="cookie_veiw_title">Targeting cookies</div>
                                </li>
                            </ul>

                            <!--Item-->
                            <ul>
                                <li>
                                    <div class="cookie_veiw_name">Name</div>
                                    <div class="cookie_veiw_title">trwv.vc</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Host</div>
                                    <div class="cookie_veiw_title">ngenit.com</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Duration</div>
                                    <div class="cookie_veiw_title">A few seconds</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Type</div>
                                    <div class="cookie_veiw_title">First Party</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Category</div>
                                    <div class="cookie_veiw_title">Targeting cookies</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Description</div>
                                    <div class="cookie_veiw_title">Marketo - These cookies store the total number of visits
                                        each visitor has to the Site, track email recipient behavior to measure campaign
                                        effectiveness and personalize Site content based on information known about the
                                        visitor.</div>
                                </li>
                            </ul>
                        </div><br>

                        <!--====///First///====-->
                        <button class="collapsible">exchange.mediavine.com</button>
                        <div class="content">
                            <!--Item-->
                            <ul>
                                <li>
                                    <div class="cookie_veiw_name">Name</div>
                                    <div class="cookie_veiw_title">trwv.vc</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Host</div>
                                    <div class="cookie_veiw_title">ngenit.com</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Duration</div>
                                    <div class="cookie_veiw_title">A few seconds</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Type</div>
                                    <div class="cookie_veiw_title">First Party</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Category</div>
                                    <div class="cookie_veiw_title">Targeting cookies</div>
                                </li>
                            </ul>

                            <!--Item-->
                            <ul>
                                <li>
                                    <div class="cookie_veiw_name">Name</div>
                                    <div class="cookie_veiw_title">trwv.vc</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Host</div>
                                    <div class="cookie_veiw_title">ngenit.com</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Duration</div>
                                    <div class="cookie_veiw_title">A few seconds</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Type</div>
                                    <div class="cookie_veiw_title">First Party</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Category</div>
                                    <div class="cookie_veiw_title">Targeting cookies</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Description</div>
                                    <div class="cookie_veiw_title">Marketo - These cookies store the total number of visits
                                        each visitor has to the Site, track email recipient behavior to measure campaign
                                        effectiveness and personalize Site content based on information known about the
                                        visitor.</div>
                                </li>
                            </ul>
                            <!--Item-->
                            <ul>
                                <li>
                                    <div class="cookie_veiw_name">Name</div>
                                    <div class="cookie_veiw_title">trwv.vc</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Host</div>
                                    <div class="cookie_veiw_title">ngenit.com</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Duration</div>
                                    <div class="cookie_veiw_title">A few seconds</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Type</div>
                                    <div class="cookie_veiw_title">First Party</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Category</div>
                                    <div class="cookie_veiw_title">Targeting cookies</div>
                                </li>
                            </ul>

                            <!--Item-->
                            <ul>
                                <li>
                                    <div class="cookie_veiw_name">Name</div>
                                    <div class="cookie_veiw_title">trwv.vc</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Host</div>
                                    <div class="cookie_veiw_title">ngenit.com</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Duration</div>
                                    <div class="cookie_veiw_title">A few seconds</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Type</div>
                                    <div class="cookie_veiw_title">First Party</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Category</div>
                                    <div class="cookie_veiw_title">Targeting cookies</div>
                                </li>
                                <li>
                                    <div class="cookie_veiw_name">Description</div>
                                    <div class="cookie_veiw_title">Marketo - These cookies store the total number of visits
                                        each visitor has to the Site, track email recipient behavior to measure campaign
                                        effectiveness and personalize Site content based on information known about the
                                        visitor.</div>
                                </li>
                            </ul>
                        </div><br>

                    </div>


                </div>
            </div>
            <div class="modal_footer_cookises">
                <div class="d-flex justify-content-between">
                    <button class="btn_footer_cookises"><strong> Confirm choices</strong></button>
                    <!--Show & Hide butoon-->
                    <button class="btn_footer_cookises" id="btn_show"><strong> Allow cookises</strong></button>
                </div>

                <div class="text_footer_cookises">
                    <p>Powered by<span class="text-success h6">OneTrust</span></p>
                </div>
            </div>
        </div>
    </section>

    <!--=======// Feedback Page //=======-->
    <section>
        <div id="feedback_Sidebar" class="feedbacksidebar">
            <div class="feedback_header_logo">
                <button class="close_feedback" onclick="feedbackButtonClicked()"><i
                        class="close-btn fas fa-times"></i></button>
                <div class="modal_logo_feedback">
                    <img src="images/ngenit.png" alt="">
                </div>
            </div>
            <div
                style="height: 5px; width:100%; background: linear-gradient(90deg, #ae0a46, #a80b6e 25%, #582873 75%);margin: 5px 0px;">
            </div>
            <div id="feedback" class="feedback_details">
                <p>Thank you for assisting us with your feedback in this quick survey. Please take a minute to answer the
                    questions below regarding your experience.<br><br>
                    If you are experiencing an issue with your account, orders, or billing and want immediate assistance,
                    please use our chat feature. </p>
                <div class="d-flex justify-content-end">
                    <button class="feedback_continue_btn" onclick="feedbackVisible();" value="Click">continue</button>
                </div>
            </div>
            <div id="feedback_details" class="feedback_details" style="display: none;">
                <p>What topic(s) would you like to provide feedback on?</p>

                <!--Check Box item-->
                <div class="checkbox_wrapper">
                    <label class="feedback_details_checkbox">Product Details and availability
                        <input type="checkbox" checked="checked">
                        <span class="checkmark_feedback"></span>
                    </label>
                </div>

                <!--Check Box item-->
                <div class="checkbox_wrapper">
                    <label class="feedback_details_checkbox">Articles, reports, & blog content
                        <input type="checkbox" checked="checked">
                        <span class="checkmark_feedback"></span>
                    </label>
                </div>
                <!--Check Box item-->
                <div class="checkbox_wrapper">
                    <label class="feedback_details_checkbox">Purchasing, checkout & cart
                        <input type="checkbox" checked="checked">
                        <span class="checkmark_feedback"></span>
                    </label>
                </div>
                <!--Check Box item-->
                <div class="checkbox_wrapper">
                    <label class="feedback_details_checkbox">Pricing
                        <input type="checkbox" checked="checked">
                        <span class="checkmark_feedback"></span>
                    </label>
                </div>
                <!--Check Box item-->
                <div class="checkbox_wrapper">
                    <label class="feedback_details_checkbox">Solutions & services content
                        <input type="checkbox" checked="checked">
                        <span class="checkmark_feedback"></span>
                    </label>
                </div>
                <!--Check Box item-->
                <div class="checkbox_wrapper">
                    <label class="feedback_details_checkbox">Product search
                        <input type="checkbox" checked="checked">
                        <span class="checkmark_feedback"></span>
                    </label>
                </div>

                <p>Based on your selected topic(s) above, how would you rate your overall web experience?</p>

                <!--Check Rounded item-->
                <div class="checkrounded_wrapper">
                    <label class="feedback_details_checkrounded">
                        <input type="checkbox">
                        <p>5 (Best)</p>
                        <span class="checkmark_rounded"></span>
                    </label>
                </div>

                <!--Check Rounded item-->
                <div class="checkrounded_wrapper">
                    <label class="feedback_details_checkrounded">
                        <input type="checkbox">
                        <p>4</p>
                        <span class="checkmark_rounded"></span>
                    </label>
                </div>

                <!--Check Rounded item-->
                <div class="checkrounded_wrapper">
                    <label class="feedback_details_checkrounded">
                        <input type="checkbox">
                        <p>3</p>
                        <span class="checkmark_rounded"></span>
                    </label>
                </div>

                <!--Check Rounded item-->
                <div class="checkrounded_wrapper">
                    <label class="feedback_details_checkrounded">
                        <input type="checkbox">
                        <p>2</p>
                        <span class="checkmark_rounded"></span>
                    </label>
                </div>

                <!--Check Rounded item-->
                <div class="checkrounded_wrapper">
                    <label class="feedback_details_checkrounded">
                        <input type="checkbox">
                        <p>1 (Worst)</p>
                        <span class="checkmark_rounded"></span>
                    </label>
                </div>

                <div class="d-flex justify-content-between m-2">
                    <button class="feedback_continue_btn" onclick="feedbackVisible();" value="Click"><i
                            class="fa-solid fa-chevron-left"></i> previous</button>
                    <button class="feedback_continue_btn" onclick="feedbackVisible();" value="Click">continue <i
                            class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>

        <div id="feedback_btn">
            <button id="sidebarButton_fb" class="openbtnfeedback" onclick="feedbackButtonClicked()"><i
                    class="fa-solid fa-bullhorn"></i> Feedback</button>
        </div>
    </section>
@endsection
