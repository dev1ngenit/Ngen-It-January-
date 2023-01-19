@extends('frontend.master')
@section('content')
    <!--======// Banner Section //======-->
    <section class="banner_section">
        <!-- slider -->
        <div class="banner_slider">
            <!-- slider -->
            @if ($home)
            <div class="slider_inage">
                <img src="{{ asset('storage/requestImg/' . $home->branner1) }}" alt="" style="background-repeat: no-repeat;">
            </div>

            <!-- slider -->
            <div class="slider_inage">
                <img src="{{ asset('storage/requestImg/' . $home->branner2) }}" alt="" style="background-repeat: no-repeat;">
            </div>

            <!-- slider -->
            <div class="slider_inage">
                <img src="{{ asset('storage/requestImg/' . $home->branner3) }}" alt="" style="background-repeat: no-repeat;">
            </div>
            @endif
        </div>
    </section>
    <!-- banner start end-->

    <!--======// Home Card Section //======-->
    <section class="home_card_wrapper">
        <div class="container">
            <!-- wrapper -->
            @if ($home)
            <div class="row m-0">
                <!-- home card item -->
                <div class="col-lg-6 col-sm-12">
                    <div class="home_card_item">
                        <h5 class="home_card_item_title">{{$home->btn1_title}}</h5>
                        <div class="home_card_button">
                            <a href="{{route('learn.more')}}">{{$home->btn1_name}}</a>
                        </div>
                        <!-- button -->
                    </div>
                </div>


                <!-- home card item -->
                <div class="col-lg-6 col-sm-12">
                    <div class="home_card_item">
                        <h5 class="home_card_item_title">{{$home->btn2_title}}</h5>
                        <div class="home_card_button">
                            <a href="{{$home->btn2_link}}">{{$home->btn2_name}}</a>
                        </div>
                        <!-- button -->
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
    <!-- home card end -->

    <!--======// Business section //======-->
    <section class="container padding_bottom">
        <!-- home title -->
        @if ($home)
        <div class="home_title">
            <h5 class="home_title_heading"> {{$home->header1}}</h5>
            <p class="home_title_text">{{$home->header2}}</p>
        </div>
        @endif
        <!-- business content -->
        <div class="business_content_wrapper mb-5">
            <!-- business item wrapper -->
            @if ($home)
            <div class="row solution_business_item">
                <!-- item -->
                <div class="text-center col-sm-5 areaBox width20">
                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="{{ asset('storage/requestImg/' . $feature1->logo) }}" alt="">
                    </div>

                    <!-- content -->
                    <div class="business_item_content" style="height: 11rem;">
                        <p class="business_item_title">{{$feature1->badge}}</p>
                        <p class="business_item_text">{{ Str::limit($feature1->header, 150) }}</p>
                        <a href="{{route('feature.details',$feature1->id)}}" class="business_item_button"><span>Learn More</span> <span class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
                <!-- item -->
                <div class="text-center col-sm-5 areaBox width20">
                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="{{ asset('storage/requestImg/' . $feature2->logo) }}" alt="">
                    </div>

                    <!-- content -->
                    <div class="business_item_content" style="height: 11rem;">
                        <p class="business_item_title">{{$feature2->badge}}</p>
                        <p class="business_item_text">{{ Str::limit($feature2->header, 150) }}</p>
                        <a href="{{route('feature.details',$feature2->id)}}" class="business_item_button"><span>Learn More</span> <span class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
                <!-- item -->
                <div class="text-center col-sm-5 areaBox width20">
                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="{{ asset('storage/requestImg/' . $feature3->logo) }}" alt="">
                    </div>

                    <!-- content -->
                    <div class="business_item_content" style="height: 11rem;">
                        <p class="business_item_title">{{$feature3->badge}}</p>
                        <p class="business_item_text">{{ Str::limit($feature3->header, 150) }}</p>
                        <a href="{{route('feature.details',$feature3->id)}}" class="business_item_button"><span>Learn More</span> <span class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
                <!-- item -->
                <div class="text-center col-sm-5 areaBox width20">

                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="{{ asset('storage/requestImg/' . $feature4->logo) }}" alt="">
                    </div>

                    <!-- content -->
                    <div class="business_item_content" style="height: 11rem;">
                        <p class="business_item_title">{{$feature4->badge}}</p>
                        <p class="business_item_text">{{ Str::limit($feature4->header, 150) }}</p>
                        <a href="{{route('feature.details',$feature4->id)}}" class="business_item_button"><span>Learn More</span> <span class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
                <!-- item -->
                <div class="text-center col-sm-5 areaBox width20">

                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="{{ asset('storage/requestImg/' . $feature5->logo) }}" alt="">
                    </div>

                    <!-- content -->
                    <div class="business_item_content" style="height: 11rem;">
                        <p class="business_item_title">{{$feature5->badge}}</p>
                        <p class="business_item_text"> {{ Str::limit($feature5->header, 150) }}</p>
                        <a href="{{route('feature.details',$feature5->id)}}" class="business_item_button"><span>Learn More</span> <span class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <!-- button -->
        <div class="business_seftion_button mt-5 pt-5">
            <a href="ngenit/solution_common.html">Explore all of what we do</a>
        </div>
    </section>
    <!---------End -------->

    <!--======// Learn clint history //======-->
    <section class="account_benefits_section_wp">
        <div class="container">
            <!-- title -->
            <div class="section_title">
                <h3 class="title_top_heading">Learn more in our client stories.</h3><br>
            </div>
            @if ($home)
            <div class="row">
                <!--------item------->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="client_stories_item">
                        <a href="{{route('story.details',$story1->id)}}">
                            <img class="" src="{{ asset('storage/' . $story1->image) }}" alt="{{$story1->badge}}" width="280px" height="160px" >
                            <h6 class="mt-4">{{$story1->badge}}</h6>
                            <h3><strong>{{$story1->title}}</strong></h3>
                        </a>

                    </div>
                </div>
                <!--------item------->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="client_stories_item">
                        <a href="{{route('story.details',$story2->id)}}">
                            <img class="" src="{{ asset('storage/' . $story2->image) }}" alt="{{$story2->badge}}" width="280px" height="160px" >
                            <h6 class="mt-4">{{$story2->badge}}</h6>
                            <h3><strong>{{$story2->title}}</strong></h3>
                        </a>

                    </div>
                </div>
                <!--------item------->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="client_stories_item">
                        <a href="{{route('story.details',$story3->id)}}">
                            <img class="" src="{{ asset('storage/' . $story3->image) }}" alt="{{$story3->badge}}" width="280px" height="160px" >
                            <h6 class="mt-4">{{$story3->badge}}</h6>
                            <h3><strong>{{$story3->title}}</strong></h3>
                        </a>

                    </div>
                </div>
                <!--------item------->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="client_stories_item">
                        <a href="{{route('story.details',$story4->id)}}">
                            <img class="" src="{{ asset('storage/' . $story4->image) }}" alt="{{$story4->badge}}" width="280px" height="160px" >
                            <h6 class="mt-4">{{$story4->badge}}</h6>
                            <h3><strong>{{$story4->title}}</strong></h3>
                        </a>

                    </div>
                </div>
            </div>
            @endif
            <!-- button -->
            <div class="learn_clint_history_btn">
                <a href="{{route('all.story')}}">See all client stories</a>
            </div>
        </div>
    </section>
    <!---------End -------->

    <!--=======// Shop product //======-->
    <section class="padding_top">
        <div class="container">
            <div class="row">
                <!-- content -->
                <div class="col-lg-6 col-sm-12">
                    <div class="home_shop_product_wrapper">
                        <h5> Shop products and hardware</h5>

                        {{-- <p>With more than 600,000 products and 7,500 in-house brand experts at your fingertips, we’ll get you the technology you need to achieve your goals. And, you can manage it all seamlessly through your myInsight account.</p> --}}

                        <div class="d-flex justify-content-start">
                            <a href="{{  route('shop.html') }}" class="common_button">Shop Now</a>
                        </div>

                    </div>
                </div>

                <!-- product brand -->
                <div class="col-lg-6 col-sm-12">
                    <ul class="shop_product_brand_list">
                        <li><a href="{{ route('all.category') }}">Product categories</a></li>
                        <li><a href="{{ route('all.brand') }}">Brands</a></li>
                        <li><a href="{{ route('tech.deals') }}">Tech deals</a></li>
                        <li><a href="{{ route('refurbished') }}">Refurbished</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!--=======// Popular products //======-->
    <section class="popular_product_section section_padding">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="">
                    <h3 class="title_top_heading">Popular products</h3>
                </div>
                <!-- wrapper -->
                <div class="populer_product_slider">

                    <!-- product_item -->
                    @foreach ($products as $item)
                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="{{ asset($item->thumbnail)}}" alt="{{$item->name}}" width="150px" height="113px">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="{{ route('product.details', $item->slug) }}" class="product_item_content_name" style="height: 4rem;">{{$item->name}}</a>

                           @if (!empty($item->price))
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
                             @php
                             $cart = Cart::content();
                             $exist = $cart->where('id' , $item->id );
                             //dd($cart->where('image' , $item->thumbnail )->count());
                             @endphp
                             @if ($cart->where('id' , $item->id )->count())
                             <a href="javascript:void(0);" class="common_button2 p-0 py-2 px-1 pb-2" style="height: 2.5rem"> Already in Cart</a>
                             @else
                             <form action="{{route('add.cart')}}" method="post">
                                 @csrf
                                 <input type="hidden" name="product_id" id="product_id" value="{{ $item->id }}">
                                 <input type="hidden" name="name" id="name" value="{{ $item->name }}">
                                 <input type="hidden" name="qty" id="qty" value="1">
                                 <button type="submit" class="product_button" >Add to Basket</button>
                             </form>
                             @endif
                           @else
                           <a class="product_button mt-3" href="{{ route('product.details', $item->slug) }}">Details</a>
                           @endif
                        </div>

                    </div>
                    @endforeach
                    <!-- product item -->


                </div>
            </div>
        </div>
    </section>
    <!---------End -------->

    <!--======// Magazine Section //======-->
    <section class="account_benefits_section_wp">
        <div class="container">
            @if ($home)
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid" src="{{ asset('storage/' . $techglossy->image) }}" alt="{{$techglossy->badge}}" >
                </div>
                <div class="col-lg-6 col-sm-12 account_benefits_section">
                    <h3>Tech Journal</h3>
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
                    <a href="{{route('techglossy.details',$techglossy->id)}}" class="common_button">Read the Journal</a>
                </div>
            </div>
            @endif
        </div>
    </section><br>
    <!----------End--------->

    <!--======// our success section //======-->
    <section class="container">
        <div class="our_success_wrapper">
            <!-- title -->
            <div class="section_title">
                <h3 class="title_top_heading">Our success starts with our culture.</h3>
            </div>
            <!-- wrapper -->
            @if ($home)
            <div class="row">
                <!-- item -->

                @if ($success1)
                    <div class="col-lg-4 col-sm-12">
                        <div class="our_success_item">
                            <p class="our_success_item_title">{{$success1->title}}</p>
                            <div class="our_success_item_body">
                               {{$success1->description}}
                            </div>
                        </div>
                    </div>
                @endif
                <!-- item -->
                @if ($success2)
                    <div class="col-lg-4 col-sm-12">
                        <div class="our_success_item">
                            <p class="our_success_item_title our_success_item_title2">{{$success2->title}}</p>

                            <div class="our_success_item_body">
                                {{$success2->description}}
                            </div>
                        </div>
                    </div>
                @endif
                <!-- item -->
                @if ($success3)
                    <div class="col-lg-4 col-sm-12">
                        <div class="our_success_item">
                            <p class="our_success_item_title our_success_item_title3">{{$success3->title}}</p>

                            <div class="our_success_item_body">
                                {{$success3->description}}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            @endif
        </div>
    </section>
@endsection
