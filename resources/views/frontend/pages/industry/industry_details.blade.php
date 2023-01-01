@extends('frontend.master')
@section('content')
<!--======// Header Title //======-->
<section class="common_product_header" style="background-image: url('asset('frontend/images/softwer-banner.jpg')'); margin-top:100px">
    <div class="container">
        <div class="">
            <h1>{{$industry->title}}</h1>
            <h3>{{$industry->header}}</h3>
        </div>

        <div class="d-flex justify-content-center">
            <a class="common_button2" href="#Contact">Hear from our team</a>
        </div>
    </div>

</section>
<!----------End--------->

<!--======// Modern finance //======-->
<section class="container section_padding">
    <div class="row">
        <div class="col-lg-7 col-sm-12">
            <div class="section_text_wrapper">
                <h4>Modern finance and accounting solutions</h4>
                <p style="text-align: justify;">Advanced solutions — from big data to modern infrastructure — are changing the way the financial services industry operates. Early adopters are gaining a competitive edge as they transform legacy applications and processes.</p>

                <p>Modernize your business with agile, flexible and secure financial technology solutions that grow the business and fit customer needs. Leveraging our technical expertise and end-to-end services will propel your organization into the future.</p>
            </div>
        </div>
        <div class="col-lg-5 col-sm-12">
            <div class="industry_single_help_list">
                <h5>We can help you with:</h5>
                <ul>
                    <li class="d-flex">
                        <div><i class="fa-solid fa-check mr-2"></i></div>
                        <div>Sourcing and adopting financial services hardware and software</div>
                    </li>
                    <li class="d-flex">
                        <div><i class="fa-solid fa-check mr-2"></i></div>
                        <div>Building applications that leverage big data and <a href=""> Artificial Intelligence (AI)</a></div>
                    </li>
                    <li class="d-flex">
                        <div><i class="fa-solid fa-check mr-2"></i></div>
                        <div><a href="">IT infrastructure modernization</a></div>
                    </li>
                    <li class="d-flex">
                        <div><i class="fa-solid fa-check mr-2"></i></div>
                        <div><a href="">Device and collaboration management</a></div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>
<!----------End--------->

<!--======// Solution feature //======-->
<section class="section_wp">
    <div class="container">
        <!--title-->
        <div class="section_text_wrapper">
            <h3 class="section_title">Making smart decisions</h3>
            <p class="text-center" style="padding:0px 20%;">We use an iterative design approach to create solutions that empower workers, improve products, optimize operations and strengthen customer relationships.</p>
        </div>
        <!--Content Wrapper-->
        <div class="row mt-4">
            <!-- item -->
            <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                <!-- image -->
                <div class="product_veiw_details_item_image">
                    <img src="{{asset('frontend')}}/images/single-page/product_details/image1.png" alt="">
                </div>
                <!-- content -->
                <div class="product_veiw_details_item_content">
                    <p style="font-size: 20px; margin: 4px 0px;">Data and AI</p>
                    <p>Use smart technology powered by AI and machine learning to monitor trends, identify patterns and provide personalized experiences, so you can stay one step ahead.</p>
                </div>
            </div>

            <!-- item -->
            <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                <!-- image -->
                <div class="product_veiw_details_item_image">
                    <img src="{{asset('frontend')}}/images/single-page/product_details/image2.png" alt="">
                </div>
                <!-- content -->
                <div class="product_veiw_details_item_content">
                    <p style="font-size: 20px; margin: 4px 0px;">Smart spaces</p>
                    <p>Gather and analyze data from smart devices — including sensors, cameras and displays — to improve your ATM, retail banking and customer engagement strategies.</p>
                </div>
            </div>

            <!-- item -->
            <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                <!-- image -->
                <div class="product_veiw_details_item_image">
                    <img src="{{asset('frontend')}}/images/single-page/product_details/image3.png" alt="">
                </div>
                <!-- content -->
                <div class="product_veiw_details_item_content">
                    <p style="font-size: 20px; margin: 4px 0px;">Modern apps</p>
                    <p>Adopt the latest software capabilities by modernizing dated systems or developing new business applications, including conversational agents, that enhance workflows.</p>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img src="{{asset('frontend')}}/images/single-page/product_details/image2.png" alt="">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">Transformation services</p>
                        <p>Invest in staff skills and support technology adoptions with our Agile enablement, organizational change management and learning and development services.</p>
                    </div>
                </div>

                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img src="{{asset('frontend')}}/images/single-page/product_details/image3.png" alt="">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">IoT</p>
                        <p>The Internet of Things (IoT) can transform your operations by improving how you track trends, staff locations and serve customers.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!----------End--------->

<!--======// Gradian Background //======-->
<section class="integrated_security">
    <div class="container">
        <div class="call_to_action_text">
            <h4 class="section_title">Robust and integrated security</h4>
            <p>Security is considered at every step when you choose Insight. The result is a solution aligned to strong cybersecurity and regulatory best practices and an understanding of who owns and can access internal data.</p>
        </div>
    </div>

</section>
<!----------End--------->

<!--=======// Building resilient IT //=====-->
<section class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 account_benefits_section">
                <h3>Building resilient IT infrastructure</h3>
                <p>Your customers expect their data to be protected from breaches and natural disasters. Any IT system your organization uses also needs to meet current and future technology demands. We’ll help you achieve business agility while maintaining the highest levels of security.</p>

                <ul>
                    <li>Preserve data and restore it fast with a disaster recovery strategy.</li>
                    <li>Align workloads to best-fit platforms.</li>
                    <li>Ensure a successful migration.</li>
                    <li>Relieve IT teams, so they can focus on innovation.</li>
                </ul>
                <button href="" class="common_button mt-4">Learn more</button>
            </div>
            <div class="col-lg-6 col-sm-12">
                <img class="img-fluid" src="{{asset('frontend')}}/images/account_benifit/account_benifits_flow (4).jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-------------End--------->

<!--======// Solution feature //======-->
<section class="section_wp">
    <div class="container">
        <!--title-->
        <div class="section_text_wrapper">
            <h3 class="section_title">Get the devices and financial software you need.</h3>
            <p class="text-center" style="padding:0px 20%;">Providing your staff cutting-edge technology is essential to staying relevant and competitive. Acquire and manage the solutions you need without complicating IT or breaking the budget.</p>
        </div>
        <!--Content Wrapper-->
        <div class="row mt-4">
            <!-- item -->
            <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                <!-- image -->
                <div class="product_veiw_details_item_image">
                    <img src="{{asset('frontend')}}/images/single-page/product_details/image1.png" alt="">
                </div>
                <!-- content -->
                <div class="product_veiw_details_item_content">
                    <p style="font-size: 20px; margin: 4px 0px;">Technology procurement</p>
                    <p>myInsight streamlines hardware, software and cloud purchasing and reporting by providing easy-to-use tools through a single, customizable procurement portal.</p>
                </div>
            </div>

            <!-- item -->
            <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                <!-- image -->
                <div class="product_veiw_details_item_image">
                    <img src="{{asset('frontend')}}/images/single-page/product_details/image2.png" alt="">
                </div>
                <!-- content -->
                <div class="product_veiw_details_item_content">
                    <p style="font-size: 20px; margin: 4px 0px;">Software solutions and services</p>
                    <p>Whether you need to optimize your portfolio, control license provisioning, handle renewals or pass publisher audits, we’ll help you manage your entire software lifecycle.</p>
                </div>
            </div>

            <!-- item -->
            <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                <!-- image -->
                <div class="product_veiw_details_item_image">
                    <img src="{{asset('frontend')}}/images/single-page/product_details/image3.png" alt="">
                </div>
                <!-- content -->
                <div class="product_veiw_details_item_content">
                    <p style="font-size: 20px; margin: 4px 0px;">IT asset management</p>
                    <p>Smart lifecycle management takes a comprehensive approach. We’ll support you with end-to-end deployment, maintenance, warranty and disposition services.</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!----------End--------->

<!--======// Solution feature //======-->
<section class="account_benefits_section_wp">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img class="img-fluid" src="{{ asset('storage/' . $techglossy->image) }}" alt="{{$techglossy->badge}}" >
            </div>
            <div class="col-lg-6 col-sm-12 account_benefits_section">

                <h5>{{$techglossy->badge}}</h5>
                <p>{{$techglossy->title}}</p>

                <a href="{{route('shop')}}" class="common_button">Shop Now</a>
            </div>
        </div>

    </div>
</section><br>
<!-------------End--------->

<!--======// Featured content //======-->
<section class="related_posts_wrapper">
    <div class="container">
        <div class="related_posts_title">
            <h1 class="text-center">Featured content</h1>
        </div>

        <div class="row">
            <!--------item------->
            @foreach ($storys as $item)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="related-item">
                        <a href="">
                            <img class="img-fluid" src="{{ asset('storage/requestImg/' . $item->image) }}" alt="">
                            <h4>{{$item->badge}}</h6>
                            <h3><strong>{{$item->title}}</strong></h3>
                        </a>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
<!-------------End--------->

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

