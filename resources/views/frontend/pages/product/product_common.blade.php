@extends('frontend.master')
@section('content')


    <!--========Header Title==========-->
    <section class="common_product_header"
        style="background-image:url('{{ asset('frontend/images/buy-category-hero.jpg') }}'); margin-top:100px">
        <div class="container">
            <h1>Ready to shop?</h1>
            <h3>Explore our product categories to see options for hardware, software and accessories. Use our configurators
                for advanced help with your selection. And, find discounts under our tech deals.</h3>

            <div class="row d-flex justify-content-center">
                <div class="col-lg-2"></div>
                <!--BUTTON START-->
                <div class="col-lg-3 col-sm-12 d-flex justify-content-center mb-4">
                    <a class="search_all_product_btn" href="{{ route('filter') }}">Search all Products</a>
                </div>
                <div class="col-lg-3 col-sm-12 d-flex justify-content-center mb-4">
                    @if (Auth::guard('client')->check())
                    <a class="create_your_account_btn " href="{{ route('client.dashboard') }}">Your Dashboard</a>
                    @else
                    <a class="create_your_account_btn " href="{{ route('client.login') }}">Create your account</a>
                    @endif

                </div>
                <!--BUTTON END-->
                <div class="col-lg-2"></div>
                </span>

            </div>
        </div>

    </section>
    <!----------Header Title End--------->


    <!--=======Popular products Begin=======-->
    <section class="container">
        <div class="popular_product_section_content">
            <!-- section title -->
            <div class="common_product_item_title">
                <h3>Top Products</h3>
            </div>
            <!-- wrapper -->
            <div class="populer_product_slider">

                <!-- product_item -->
                @foreach ($products as $item)
                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="{{ asset($item->thumbnail) }}" alt="" width="150px" height="113px">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="{{ route('product.details', $item->slug) }}" class="product_item_content_name" style="height: 4rem;">{{$item->name}}</a>

                           @if ($item->rfq != 1)
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
                    <!-- product item -->
                @endforeach
            </div>
        </div>
    </section><br>
    <!-- Related Product Section End -->

    <!--========Shop by category=======-->
    <section class="container">
        <!--Title-->
        <div class="common_product_item_title">
            <h3>Shop By Category</h3>

        </div>
        <!--Product Category-->
        <div class="row">
            <!--Category item-->
            @foreach ($categories as $item)
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 p-4">
                    <img class="img-fluid mb-4" src="{{ asset('storage/requestImg/' . $item->image) }}" alt="">
                    <div class="common_product_item_text">
                        <a href="{{ route('category.html',$item->id) }}">{{ $item->title }}</a>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
    <!------Shop by category---->

    <!--=====Transform your devices======-->
    <section class="container">
        <div class="transform_devices_wrapper">
            <div class="row" style="border: 1px solid #e3e3e3;">
                <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                    <img class="img-fluid" src="{{ asset('frontend/images/windows-11-with-cad-drawer.jpg') }}"
                        alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 transform_devices_blog">
                    <img src="images/windows-11.png" alt="">
                    <h2>Transform your devices</h2>
                    <p>with intuitive designs and advanced features available through Windows® 11 Pro.</p>
                    <a href="">Learn more</a>
                </div>
            </div>
        </div>
    </section>
    <!-----Transform your devices----->

    <!--=====Need Help Finding Prodcut======-->
    <section class="need_help_finding_prodcut"
        style="background-image:url('{{ asset('frontend/images/help-background-imges.jpg') }}')">
        <div class="container">
            <h2>Need help finding the right product?</h2>
            <h3>Our product selectors and configurators will pinpoint the right item for your organization. These
                easy-to-use Insight Intelligent Technology™ tools let you choose your needs and requirements, and then
                generate the results that are the best match.</h3>
            <div class="d-flex justify-content-center">
                <a href="#" class="finding_product_btn">Explore our configurators</a>
            </div>

        </div>
    </section>
    <!------Need Help Finding End---->

    <!--===== Technolgy Deals======-->
    <section class="common_product_technolgy_deals_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img class="img-fluid" src="{{ asset('frontend/images/technology-deals.png') }}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 technolgy_deals_blog">
                    <h2>Unbeatable technology deals</h2>
                    <p>Explore <a href="#">discounts,</a> <a href="#">refurbished products</a> and limited-time
                        offers. From laptops to cables, accessories and printers, we offer the technology you need at
                        affordable prices — you gain the option of discounted pricing from a variety of brands.</p><br>
                    <a href="" class="common_button">Shop & Save</a>
                </div>
            </div>
        </div>
    </section>

    <!----Technolgy Deals End---->

    <!--========Shop by category=======-->
    <section class="container">
        <!--Title-->
        <div class="common_product_item_title">
            <h3>Shop by Brands</h3>

        </div>
        <!--Product Category-->
        <div class="row">
            @foreach ($brands as $item)
                <!--Category item-->
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 p-4">
                    <img class="img-fluid mb-4" src="{{ asset('storage/requestImg/'.$item->image) }}" alt="" >
                    <div class="common_product_item_text">
                        <a style="font-size: 18px" href="{{ url('hardware/' . $item->title) }}">Shop
                            {{ $item->title }}</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            <form method="GET" action="{{ url('product/filter') }}"><button type="submit" class="common_button">
                    @foreach ($brands as $item)
                        <input type="hidden" name="filterbrand[]" value="{{ $item->title }}">
                    @endforeach
                    Shop all brands
                </button>
            </form>
        </div>
    </section>
    <!------Shop top brands.---->
    <br>


@endsection
