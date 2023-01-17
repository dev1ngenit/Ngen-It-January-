@extends('frontend.master')
@section('content')
    <!--======// Header Title //======-->
    <section class="common_product_header" style="background-image: url('{{asset('storage/requestImg/'.$solution->banner_image)}}');margin-top: 100px;">
        <div class="container">
            <div class="">
                <h1>{{$solution->name}}</h1>
                <h3>{{$solution->header}}</h3>
            </div>

            <div class="d-flex justify-content-center">
                <a class="common_button2" href="#hear_from_team">Hear from our team</a>
            </div>
        </div>

    </section>
    <!----------End--------->

    <!--======// Header Title //======-->
    @if ($row_one)
    <section class="container section_padding">
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <div class="section_text_wrapper">
                    <h4>{{$row_one->title}}</h4>
                    <p style="text-align: justify;">{!!$row_one->short_des!!}</p>

                </div>
            </div>
            <div class="col-lg-5 col-sm-12">
                <div class="industry_single_help_list">
                    <h5></h5>
                    <ul>

                        <li class="d-flex">
                            <div><i class="fa-solid fa-check mr-2"></i></div>
                            <div><a href="javascript:void(0);">{{$row_one->list_one}}</a></div>
                        </li>

                        <li class="d-flex">
                            <div><i class="fa-solid fa-check mr-2"></i></div>
                            <div><a href="javascript:void(0);">{{$row_one->list_two}}</a></div>
                        </li>

                        <li class="d-flex">
                            <div><i class="fa-solid fa-check mr-2"></i></div>
                            <div><a href="javascript:void(0);">{{$row_one->list_three}}</a></div>
                        </li>

                        <li class="d-flex">
                            <div><i class="fa-solid fa-check mr-2"></i></div>
                            <div><a href="javascript:void(0);">{{$row_one->list_four}}</a></div>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </section>
    @endif
    <!----------End--------->

    <!--======// Solution feature //======-->
    <section class="section_wp">
        <div class="container">
            <!--title-->
            <div class="section_text_wrapper">
                <h3 class="section_title">{{$solution->row_two_title}}</h3>
                <p class="text-center" style="padding:0px 20%;">{{$solution->row_two_header}}</p>
            </div>
            <!--Content Wrapper-->
            <div class="row mt-4">
                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img src="{{asset('storage/requestImg/'.$card1->image)}}" alt="">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">{{$card1->title}}</p>
                        <p>{{$card1->short_des}}</p>
                    </div>
                </div>

                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img src="{{asset('storage/requestImg/'.$card2->image)}}" alt="">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">{{$card2->title}}</p>
                        <p>{{$card2->short_des}}</p>
                    </div>
                </div>

                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img src="{{asset('storage/requestImg/'.$card3->image)}}" alt="">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">{{$card3->title}}</p>
                        <p>{{$card3->short_des}}</p>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <!-- item -->
                    <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                        <!-- image -->
                        <div class="product_veiw_details_item_image">
                            <img src="{{asset('storage/requestImg/'.$card4->image)}}" alt="">
                        </div>
                        <!-- content -->
                        <div class="product_veiw_details_item_content">
                            <p style="font-size: 20px; margin: 4px 0px;">{{$card4->title}}</p>
                            <p>{{$card4->short_des}}</p>
                        </div>
                    </div>

                    <!-- item -->
                    <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                        <!-- image -->
                        <div class="product_veiw_details_item_image">
                            <img src="{{asset('storage/requestImg/'.$card5->image)}}" alt="">
                        </div>
                        <!-- content -->
                        <div class="product_veiw_details_item_content">
                            <p style="font-size: 20px; margin: 4px 0px;">{{$card5->title}}</p>
                            <p>{{$card5->short_des}}</p>
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
                <h4 class="section_title">{{$solution->row_three_title}}</h4>
                <p>{{$solution->row_three_header}}</p>
            </div>
        </div>

    </section>
    <!----------End--------->

    <!--=======// Building resilient IT //=====-->
    @if ('row_four')
    <section class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 account_benefits_section">
                    <h3>{{$row_four->title}}</h3>
                    <p>{!!$row_four->description!!} </p>


                    <button href="{{$row_four->link}}" class="common_button mt-4">Learn more</button>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid" src="{{asset('storage/'.$row_four->image)}}" alt="" width="540px" height="338px">
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-------------End--------->

    <!--======// Solution feature //======-->
    <section class="section_wp">
        <div class="container">
            <!--title-->
            <div class="section_text_wrapper">
                <h3 class="section_title">{{$solution->row_five_title}}</h3>
                <p class="text-center" style="padding:0px 20%;">{{$solution->row_five_header}}</p>
            </div>
            <!--Content Wrapper-->
            <div class="row mt-4">
                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                        <!-- image -->
                        <div class="product_veiw_details_item_image">
                            <img src="{{asset('storage/requestImg/'.$card6->image)}}" alt="">
                        </div>
                        <!-- content -->
                        <div class="product_veiw_details_item_content">
                            <p style="font-size: 20px; margin: 4px 0px;">{{$card6->title}}</p>
                            <p>{{$card6->short_des}}</p>
                        </div>
                    </div>

                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                        <!-- image -->
                        <div class="product_veiw_details_item_image">
                            <img src="{{asset('storage/requestImg/'.$card7->image)}}" alt="">
                        </div>
                        <!-- content -->
                        <div class="product_veiw_details_item_content">
                            <p style="font-size: 20px; margin: 4px 0px;">{{$card7->title}}</p>
                            <p>{{$card7->short_des}}</p>
                        </div>
                    </div>

                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                        <!-- image -->
                        <div class="product_veiw_details_item_image">
                            <img src="{{asset('storage/requestImg/'.$card8->image)}}" alt="">
                        </div>
                        <!-- content -->
                        <div class="product_veiw_details_item_content">
                            <p style="font-size: 20px; margin: 4px 0px;">{{$card8->title}}</p>
                            <p>{{$card8->short_des}}</p>
                        </div>
                    </div>
            </div>

        </div>
    </section>
    <!----------End--------->

    <!--======// Solution feature //======-->
    <section class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid p-4" src="{{asset('frontend/images/hardware/solution2.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 col-sm-12 pl-4 section_text_wrapper">
                    <h4>{{$solution->row_five_title}}</h4>
                    <p>{{$solution->row_five_header}}</p>

                    <a href="{{route('shop')}}" class="common_button">Shop now</a>
                </div>
            </div>
        </div>
    </section>
    <!-------------End--------->

    <!--======// Featured content //======-->
    <section class="related_posts_wrapper">
        <div class="container">
            <div class="related_posts_title">
                <h1 class="text-center">Featured content</h1>
            </div>

            <div class="row">
                <!--------item------->
                @if ($solutions)
                @foreach ($solutions as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="related-item">
                            <a href="{{route('solution.details',$item->id)}}">
                                <img class="img-fluid" src="{{asset('storage/requestImg/'.$item->banner_image)}}" width="275px" height="157px" alt="">
                                <h4>{{App\Models\Admin\Industry::where('id',$item->industry_id)->value('title')}}</h6>
                                <h3><strong>{{$item->name}}</strong></h3>
                            </a>

                        </div>
                    </div>
                @endforeach
                @endif


            </div>

        </div>
    </section>
    <!-------------End--------->

    @php
        $setting = App\Models\Admin\Setting::first();
    @endphp

    <!--=====// Pageform section //=====-->
    <section class="solution_contact_wrapper">
        <div class="container" >
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="thing_together_wrapper">
                        <h4></h4>
                        <p></p>

                        <h5 style="font-size: 24px;"><i class="fa-solid fa-phone"></i>{{$setting->phone}} &nbsp; {{$setting->name}}</h5 style="font-size: 16px;">
                    </div>
                </div>
                <!-------From------->
                <div class="col-lg-6 col-sm-12 p-0" id="hear_from_team">
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
