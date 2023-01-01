@extends('frontend.master')
@section('content')

  <!--======// Header Title //======-->
  <section class="common_product_header" style="background-image: url('{{asset('frontend/images/softwer-banner.jpg')}}'); margin-top:100px">
    <div class="container">
        <h1>Shop for Software</h1>
        {{-- <h3>Through our deep partnerships with trusted brands, Insight offers a comprehensive catalog of software
            for business.</h3> --}}

        <div class="d-flex justify-content-center">
            <div class="row">
                <!--BUTTON START-->
                <div class="m-4">
                    <a href="#Contact" class="common_button2">Hear From Our specialist</a>
                </div>

            </div>

        </div>
    </div>

</section>
<!----------End--------->

<!--======// Nasted tab //======-->
<div class="section_wp">
    <!--Tab Section-->
    <div class="container mb-5">
        <!-- home title -->
        <div class="nasted_tabbar_title">
            <h5>Category and Software Products List</h5>
            <p class="home_title_text">Explore our software related products, categories and brands</p>
        </div>
        <div class="row tabbar_wrapper">
            <div class="col-4 m-0 p-0 text-center">
                <div class="tabbar_header_title">Software</div>
                <div class="data_tabs_button" data-tabs>
                    <button class="active">Products</button>
                    <button>Category</button>
                    <button>Brands</button>
                    {{-- <button>Service</button> --}}
                    {{-- <button>Industry</button> --}}
                </div>
            </div>
            <div class="col-8 data_tabs_content" data-panes>
                <!--==// Tab Item //==-->
                <div class="active">
                    <!--Sub Button-->
                    {{-- <div class="sub_tabs_button" data-tabs>
                        <button class="active">QA Wolf</button>
                        <button>Freshservice</button>
                        <button>JIRA</button>
                    </div> --}}

                    <div class="sub_tabs_content" data-panes>
                        <!--Sub Item-->
                        <div class="active">
                            <div class="col-lg-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="bg-dark p-1">
                                            <th width="80%"><h5 class="text-center text-white">Product List For Softwares</h5></th>
                                            <th width="20%"><input type="text" placeholder="Search From the table" id="softwareInput"></th>
                                        </tr>
                                        <tr class="p-1 text-center">
                                            <th width="80%">Product Name</th>
                                            <th width="20%">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody id="softwareTable">
                                        @foreach ($products as $product)
                                        <tr class="p-1">
                                            <td class="p-1" width="80%"><a href="{{route('product.details',$product->slug)}}">{{$product->name}}</a></td>
                                            <td class="p-1" width="20%">USD : $ @if ($product->discount == Null)
                                                {{$product->price}}
                                            @else
                                            {{$product->discount}}
                                            @endif</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
                <!--==// Tab Item //==-->


                <div>
                    <!--Sub Button-->
                    <div >
                        <div class="col-lg-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-dark p-1">
                                        <th width="80%"><h5 class="text-center text-white">Category List For Softwares</h5></th>
                                        <th width="20%"><input type="text" placeholder="Search From the table" id="categoryInput"></th>
                                    </tr>
                                    <tr class="p-1 text-center">
                                        <th width="80%">Category Name</th>
                                        <th width="20%">Total Products</th>
                                    </tr>
                                </thead>
                                <tbody id="categoryTable">
                                    @foreach ($categories as $item)
                                    <tr class="p-1 text-center">
                                        <td class="p-1" width="80%"><a href="{{route('custom.product',$item->slug)}}">{{$item->title}}</a></td>
                                        <td class="p-1" width="20%">{{App\Models\Admin\Product::where('cat_id',$item->id)->where('product_type','software')->count()}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <div>
                    <!--Sub Button-->
                    <div>
                        <div class="col-lg-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-dark p-1">
                                        <th width="80%"><h5 class="text-center text-white">Brand List For Softwares</h5></th>
                                        <th width="20%"><input type="text" placeholder="Search From the table" id="brandInput"></th>
                                    </tr>
                                    <tr class="p-1 text-center">
                                        <th width="80%">Brand Name</th>
                                        <th width="20%">Total Products</th>
                                    </tr>
                                </thead>
                                <tbody id="brandTable">
                                    @foreach ($brands as $item)
                                    <tr class="p-1 text-center">
                                        <td class="p-1" width="80%"><a href="{{route('custom.product',$item->slug)}}">{{$item->title}}</a></td>
                                        <td class="p-1" width="20%">{{App\Models\Admin\Product::where('brand_id',$item->id)->where('product_type','software')->count()}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <div class="col-lg-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-dark p-1">
                                        <th width="80%"><h5 class="text-center text-white">Industry List For Softwares</h5></th>
                                        <th width="20%"><input type="text" placeholder="Search From the table" id="brandInput"></th>
                                    </tr>
                                    <tr class="p-1 text-center">
                                        <th width="80%">Brand Name</th>
                                        <th width="20%">Total Products</th>
                                    </tr>
                                </thead>
                                <tbody id="brandTable">
                                    @foreach ($brands as $item)
                                    <tr class="p-1 text-center">
                                        <td class="p-1" width="80%"><a href="{{route('custom.product',$item->slug)}}">{{$item->title}}</a></td>
                                        <td class="p-1" width="20%">{{App\Models\Admin\Product::where('brand_id',$item->id)->where('product_type','software')->count()}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <!--Sub Button-->
                    <div>
                        <div class="col-lg-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-dark">
                                        <th width="80%"><h5 class="text-center text-white">Industry List For Softwares</h5></th>
                                        <th width="20%"><input type="text" name="" id=""></th>
                                    </tr>
                                    <tr>
                                        <th width="80%">Product Name</th>
                                        <th width="20%">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="80%"></td>
                                        <td width="20%"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--=======// Popular products //======-->
<section class="popular_product_section section_padding">
    <!-- container -->
    <div class="container">
        <div class="popular_product_section_content">
            <!-- section title -->
            <div class="">
                <h3 class="title_top_heading text-center"><span class="topLine"> Po</span>pular Produ<span class="bottomLine">cts</span></h3>
            </div>
            <!-- wrapper colum -->
            <div class="populer_product_slider">

                <!-- product_item -->

                @foreach ($products as $item )
                <div class="product_item">
                    <!-- image -->
                    <div class="product_item_thumbnail">
                        <img src="{{asset($item->thumbnail)}}" alt="{{$item->name}}" width="150px" height="113px">
                    </div>

                    <!-- product content -->
                    <div class="product_item_content">
                        <a href="{{ route('product.details', $item->slug) }}" class="product_item_content_name" style="height: 3rem;">{{$item->name}}</a>

                        <!-- price -->
                        <div class="product_item_price">
                            <span class="price_currency">USD</span>
                            @if (!empty($item->discount))
                            <span class="price_currency_value" style="text-decoration: line-through; color:red">$ {{ $item->price }}</span>
                            <span class="price_currency_value" style="color: black">$ {{ $item->discount }}</span>
                            @else
                            <span class="price_currency_value">$ {{ $item->price }}</span>
                            @endif

                        </div>

                        <!-- button -->
                        <a href="" class="product_button">Add to Basket</a>
                    </div>

                </div>
                @endforeach


                <!-- product item -->


            </div>

        </div>
    </div>
</section>
<!---------End -------->

<!--======// our client tab //======-->
<section class="clint_tab_section">
    <div class="container">
        <div class="clint_tab_content">
            <!-- home title -->
            <div class="home_title">
                <h5 class="home_title_heading">Featured Contents</h5>
                <p class="home_title_text"></p>
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
                                <a href="#">Explore {{$story1->badge}}</a>
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
                                <a href="#">Explore {{$story2->badge}}</a>
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
                                <a href="#">Explore {{$story3->badge}}</a>
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

                <h3>{{$techglossy->badge}}</h3>
                <p>{{$techglossy->title}}</p>
                <p>{{$techglossy->header}}</p>
                <ul >
                    @php
                        $tag = $techglossy->tags;
                        $tags = explode(',', $tag);
                    @endphp
                    @foreach ($tags as $item)
                    <li class="col-lg-6">{{ ucwords($item) }}</li>
                    @endforeach
                </ul>
                <a href="{{route('techglossy.details',$techglossy->id)}}" class="common_button2">Read the Journal</a>
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
        @foreach ($features as $feature1)
            <div class="col-lg-4 col-sm-6">
                <!-- image -->
               <!-- image -->
               <div class="business_item_icon">
                    <img src="{{ asset('storage/requestImg/' . $feature1->logo) }}" alt="">
                </div>

                <!-- content -->
                <div class="business_item_content">
                    <p class="business_item_title">{{$feature1->title}}</p>
                    <p class="business_item_text">{{ Str::limit($feature1->short_desc, 150) }}</p>
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
</div> --}}
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
        <div class="col-lg-12 col-sm-12">
            <div class="we_serve_title">
                <p>Private sector</p>
            </div>
            <!-- we_serveItem_wrapper -->
            <div class="row">
                <!-- item -->
                {{-- <div class="col-lg-3 col-sm-6">
                    <a href="" class="we_serve_item">
                        <div class="we_serve_item_image">
                            <img src="images/serveicon/construction-industry-icon.png" alt="">
                        </div>
                        <div class="we_serve_item_text">Construction technology</div>
                    </a>
                </div> --}}
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
                <a href="" class="industry_solution_item_button">Explore our solutions → </a>
            </div>
        </div>
        @endforeach



            </div>
        </div>

        <!-- sidebar -->
        {{-- <div class="col-lg-3 col-sm-12">
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
