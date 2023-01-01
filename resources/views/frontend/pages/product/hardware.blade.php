@extends('frontend.master')
@section('content')
{{-- @dd($solution->section2); --}}
    @include('frontend.header')
    <!-- banner single page start -->

    <section class="banner_single_page" style="background: url({{ asset('storage/Banner/' . $solution->banner) }})">
        <div class="container">
            <div class="single_banner_content">
                <!-- image -->
                <div class="single_banner_image">
                    <img width="200px" src="{{ asset('storage/Brand/' . $brand->image) }}" alt="">
                </div>
                <!-- heading -->
                <h1 class="single_banner_heading">{{ $solution->h1 }}</h1>
                <p class="single_banner_text">{{ $solution->h2 }}</p>
                <!-- single banner button -->
                <div class="single_buttton_wrapper">
                    <a href="{{ url('contact') }}" class="single_banner_button">Talk to a specialist</a>
                    <form method="GET" action="{{ url('product/filter') }}"><button type="submit"
                            href="{{ url('product/filter') }}" class="single_banner_button single_banner_button2"><input
                                type="hidden" name="keyword" value="{{ $brand->title }}">
                            Shop all {{ $brand->title }} devices</button></form>
                </div>
            </div>
        </div>
    </section>

    <!-- banner single page end-->



    <!-- single popular Product -->

    <section class="popular_product_section section_padding">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="section_title">
                    <h3 class="title_top_heading">Popular Products</h3>
                </div>
                <!-- wrapper -->
                <div class="populer_product_slider">

                    <!-- product_item -->
                    @foreach ($products as $item)
                        <div class="product_item">
                            <!-- image -->
                            <div class="product_item_thumbnail">
                                <img src="{{ asset('storage/Product/' . $item->image) }}" alt="">
                            </div>

                            <!-- product content -->
                            <div class="product_item_content">
                                <a href="{{ route('product', ['id' => $item->id]) }}"
                                    class="product_item_content_name">{{ $item->title }}</a>

                                <!-- price -->
                                <div class="product_item_price">
                                    <span class="price_currency">usd</span>
                                    <span class="price_currency_value">${{ $item->price }}</span>
                                </div>
                                <form class="myForm">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}"   name="id" id="id">
                                    <input type="hidden" value="{{ $item->title }}" name="name" id="name">
                                    <input type="hidden" value="{{ $item->price }}" name="price" id="price">
                                    <input type="hidden" value="{{ $item->image }}" name="image" id="image">
                                    <input type="hidden" value="1" name="quantity" id="quantity">
                                    <button type="submit" class="product_button product_button_change" data-toggle="modal" id="addToBasket"
                                        data-target="#mediumModal"
                                        data-attr="{{ route('modal', ['id' => $item->id]) }}">Add to Basket</button>
                                </form>
                            </div>

                        </div>
                    @endforeach
                    <!-- product item -->
                </div>
            </div>
        </div>
    </section>

    <!-- single popular Product end-->



    <!-- Product veiw details  -->

    <div class="product_veiw_details section_padding">
        <div class="container">
            <!-- section title -->
            <div class="section_title">
                <h3 class="title_top_heading">Surface is the answer.</h3>
                <p class="title_tex_content">You want a tablet, but you need a laptop. Microsoft Surface®, available from
                    Insight, offers the best of both.</p>
            </div>

            <!-- wrapper -->
            <div class="product_veiw_details_wrapper">

                <!-- item -->
                <div class="product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img style="clip-path: circle();" src="{{ asset('storage/Circle1/' . $solution->circle1) }}"
                            alt="">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">Versatile</p>
                        <p>{{ $solution->ctitle1 }}</p>
                    </div>
                </div>

                <!-- item -->
                <div class="product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img style="clip-path: circle();" src="{{ asset('storage/Circle2/' . $solution->circle2) }}"
                            alt="">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">Versatile</p>
                        <p>{{ $solution->ctitle2 }}</p>
                    </div>
                </div>

                <!-- item -->
                <div class="product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img style="clip-path: circle();" src="{{ asset('storage/Circle3/' . $solution->circle3) }}"
                            alt="">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">Versatile</p>
                        <p>{{ $solution->ctitle3 }}</p>
                    </div>
                </div>




            </div>
        </div>
    </div>

    <!-- Product veiw details end -->

    <!-- solution feature -->

        <section class="solution_feature">
            <div class="container">
                <div class="solution_feature_wrapper">
                    @foreach ($solution->section1 as $item)
                     @if($item->id != null)
                        <!-- content -->
                        <div class="solution_feature_content">

                            <div class="solution_feature_title">{{ $item->title }}</div>

                            <p class="solution_feature_text">{{ $item->description }}
                            </p>

                        <a href="{{ url('single/product/'.$item->id) }}"><button class="product_button">Shop Now</button></a>


                        {{-- <button value="{{ $solution->btn1 }}" onclick="my()" id="goja" class="product_button">{{ $solution->btn1 }}</button> --}}

                        </div>
                        <!-- image -->
                        <div class="solution_feature_image">
                            <img src="{{ asset('storage/Product/'.$item->image) }}" alt="">
                        </div>
                        @endif
                        @endforeach


                </div>
            </div>

            <div class="container">
                <div class="solution_feature_wrapper">
                    @foreach ($solution->sec1 as $item)
                     @if($item->id != null)
                        <!-- content -->
                        <div class="solution_feature_content">

                            <div class="solution_feature_title">{{ $item->title }}</div>

                            <p class="solution_feature_text">{{ $item->header1 }}
                            </p>

                        <a href="{{ route('single',['id' =>$item->id]) }}"><button class="product_button">Learn More</button></a>


                        {{-- <button value="{{ $solution->btn1 }}" onclick="my()" id="goja" class="product_button">{{ $solution->btn1 }}</button> --}}

                        </div>
                        <!-- image -->
                        <div class="solution_feature_image">
                            <img src="{{ asset('storage/Blog/'.$item->logo) }}" alt="">
                        </div>
                        @endif
                        @endforeach


                </div>
            </div>
        </section>


    <!-- Product solution end -->


    <!-- solution feature -->

    <section class="solution_feature solution_feature2">
        <div class="container">
            <div class="solution_feature_wrapper solution_feature_wrapper2">
                @foreach ($solution->section2 as $item)
                 @if($item->id != null)
                    <!-- content -->
                    <div class="solution_feature_content">

                        <div class="solution_feature_title">{{ $item->title }}</div>

                        <p class="solution_feature_text">{{ $item->description }}
                        </p>

                    <a href="{{ url('single/product/'.$item->id) }}"><button class="product_button">Shop Now</button></a>


                    {{-- <button value="{{ $solution->btn1 }}" onclick="my()" id="goja" class="product_button">{{ $solution->btn1 }}</button> --}}

                    </div>
                    <!-- image -->
                    <div class="solution_feature_image">
                        <img src="{{ asset('storage/Product/'.$item->image) }}" alt="">
                    </div>
                    @endif
                    @endforeach


            </div>
        </div>

        <div class="container">
            <div class="solution_feature_wrapper solution_feature_wrapper2">
                @foreach ($solution->sec2 as $item)
                 @if($item->id != null)
                    <!-- content -->
                    <div class="solution_feature_content">

                        <div class="solution_feature_title">{{ $item->title }}</div>

                        <p class="solution_feature_text">{{ $item->header1 }}
                        </p>

                    <a href="{{ route('single',['id' =>$item->id]) }}"><button class="product_button">Learn More</button></a>


                    {{-- <button value="{{ $solution->btn1 }}" onclick="my()" id="goja" class="product_button">{{ $solution->btn1 }}</button> --}}

                    </div>
                    <!-- image -->
                    <div class="solution_feature_image">
                        <img src="{{ asset('storage/Blog/'.$item->logo) }}" alt="">
                    </div>
                    @endif
                    @endforeach


            </div>
        </div>
    </section>

    <!-- solution feature end-->


    <!-- single popular Product -->

    <section class="popular_product_section section_padding">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="section_title">
                    <h3 class="title_top_heading">Top Products</h3>
                </div>
                <!-- wrapper -->
                <div class="populer_product_slider">

                    <!-- product_item -->
                    @foreach ($products as $item)
                        <div class="product_item">
                            <!-- image -->
                            <div class="product_item_thumbnail">
                                <img src="{{ asset('storage/Product/' . $item->image) }}" alt="">
                            </div>

                            <!-- product content -->
                            <div class="product_item_content">
                                <a href="{{ route('product', ['id' => $item->id]) }}"
                                    class="product_item_content_name">{{ $item->title }}</a>

                                <!-- price -->
                                <div class="product_item_price">
                                    <span class="price_currency">usd</span>
                                    <span class="price_currency_value">${{ $item->price }}</span>
                                </div>

                                <!-- button -->
                                <form class="myForm">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}"   name="id" id="id">
                                    <input type="hidden" value="{{ $item->title }}" name="name" id="name">
                                    <input type="hidden" value="{{ $item->price }}" name="price" id="price">
                                    <input type="hidden" value="{{ $item->image }}" name="image" id="image">
                                    <input type="hidden" value="1" name="quantity" id="quantity">
                                    <button type="submit" class="product_button" data-toggle="modal" id="addToBasket"
                                        data-target="#mediumModal"
                                        data-attr="{{ route('modal', ['id' => $item->id]) }}">Add to Basket</button>
                                </form>
                            </div>

                        </div>
                    @endforeach
                    <!-- product item -->
                </div>
            </div>
        </div>
    </section>

    <!-- single popular Product end-->

    <!-- solution feature -->

    <section class="solution_feature">
        <div class="container">
            <div class="solution_feature_wrapper">
                @foreach ($solution->section3 as $item)
                 @if($item->id != null)
                    <!-- content -->
                    <div class="solution_feature_content">

                        <div class="solution_feature_title">{{ $item->title }}</div>

                        <p class="solution_feature_text">{{ $item->description }}
                        </p>

                    <a href="{{ url('single/product/'.$item->id) }}"><button class="product_button">Shop Now</button></a>


                    {{-- <button value="{{ $solution->btn1 }}" onclick="my()" id="goja" class="product_button">{{ $solution->btn1 }}</button> --}}

                    </div>
                    <!-- image -->
                    <div class="solution_feature_image">
                        <img src="{{ asset('storage/Product/'.$item->image) }}" alt="">
                    </div>
                    @endif
                    @endforeach


            </div>
        </div>

        <div class="container">
            <div class="solution_feature_wrapper">
                @foreach ($solution->sec3 as $item)
                 @if($item->id != null)
                    <!-- content -->
                    <div class="solution_feature_content">

                        <div class="solution_feature_title">{{ $item->title }}</div>

                        <p class="solution_feature_text">{{ $item->header1 }}
                        </p>

                    <a href="{{ route('single',['id' =>$item->id]) }}"><button class="product_button">Learn More</button></a>


                    {{-- <button value="{{ $solution->btn1 }}" onclick="my()" id="goja" class="product_button">{{ $solution->btn1 }}</button> --}}

                    </div>
                    <!-- image -->
                    <div class="solution_feature_image">
                        <img src="{{ asset('storage/Blog/'.$item->logo) }}" alt="">
                    </div>
                    @endif
                    @endforeach


            </div>
        </div>
    </section>

    <!-- Product solution end -->


    <!-- solution feature -->

    <section class="solution_feature solution_feature2">
        <div class="container">
            <div class="solution_feature_wrapper solution_feature_wrapper2">
                @foreach ($solution->section4 as $item)
                 @if($item->id != null)
                    <!-- content -->
                    <div class="solution_feature_content">

                        <div class="solution_feature_title">{{ $item->title }}</div>

                        <p class="solution_feature_text">{{ $item->description }}
                        </p>

                    <a href="{{ url('single/product/'.$item->id) }}"><button class="product_button">Shop Now</button></a>


                    {{-- <button value="{{ $solution->btn1 }}" onclick="my()" id="goja" class="product_button">{{ $solution->btn1 }}</button> --}}

                    </div>
                    <!-- image -->
                    <div class="solution_feature_image">
                        <img src="{{ asset('storage/Product/'.$item->image) }}" alt="">
                    </div>
                    @endif
                    @endforeach


            </div>
        </div>

        <div class="container">
            <div class="solution_feature_wrapper solution_feature_wrapper2">
                @foreach ($solution->sec4 as $item)
                 @if($item->id != null)
                    <!-- content -->
                    <div class="solution_feature_content">

                        <div class="solution_feature_title">{{ $item->title }}</div>

                        <p class="solution_feature_text">{{ $item->header1 }}
                        </p>

                    <a href="{{ route('single',['id' =>$item->id]) }}"><button class="product_button">Learn More</button></a>


                    {{-- <button value="{{ $solution->btn1 }}" onclick="my()" id="goja" class="product_button">{{ $solution->btn1 }}</button> --}}

                    </div>
                    <!-- image -->
                    <div class="solution_feature_image">
                        <img src="{{ asset('storage/Blog/'.$item->logo) }}" alt="">
                    </div>
                    @endif
                    @endforeach


            </div>
        </div>
    </section>

    <!-- solution feature end-->


    <!-- industry section -->

    {{-- <section class="industry_section section_padding">
        <div class="container">
            <!-- section title -->
            <div class="section_title">
                <h3 class="title_top_heading">Industry-leading accessories</h3>
                <p class="title_tex_content">With the latest accessories from Insight and Microsoft, your teams can
                    transform the way they work. Explore products built to maximize efficiency at the office, in a flexible
                    workspace or at home.</p>
            </div>

            <!-- wrapper -->
            <div class="industry_section_wrapper">
                <!-- item -->
                <div class="industry_section_item">
                    <!-- thumbnail -->
                    <div class="industry_section_item_thumbnail">
                        <img src="{{ asset('assets/frontend/image/single page/industry/industry1.png') }}"
                            alt="">
                    </div>
                    <!-- content -->
                    <div class="industry_section_item_content">
                        <p class="industry_item_content_name">Surface Dock 2</p>
                        <p class="industry_item_content_text">The new Surface Dock 2 instantly transforms your Surface into
                            a desktop PC with all the next-gen ports you need, including USB-C.
                        </p>
                        <a href="{{ route('shop.html') }}" class="industry_content_btn">Shop Now</a>
                    </div>
                </div>

                <!-- item -->
                <div class="industry_section_item">
                    <!-- thumbnail -->
                    <div class="industry_section_item_thumbnail">
                        <img src="{{ asset('assets/frontend/image/single page/industry/industry2.png') }}"
                            alt="">
                    </div>
                    <!-- content -->
                    <div class="industry_section_item_content">
                        <p class="industry_item_content_name">Surface Dock 2</p>
                        <p class="industry_item_content_text">The new Surface Dock 2 instantly transforms your Surface into
                            a desktop PC with all the next-gen ports you need, including USB-C.
                        </p>
                        <a href="{{ route('shop.html') }}" class="industry_content_btn">Shop Now</a>
                    </div>
                </div>

                <!-- item -->
                <div class="industry_section_item">
                    <!-- thumbnail -->
                    <div class="industry_section_item_thumbnail">
                        <img src="{{ asset('assets/frontend/image/single page/industry/industry3.png') }}"
                            alt="">
                    </div>
                    <!-- content -->
                    <div class="industry_section_item_content">
                        <p class="industry_item_content_name">Surface Dock 2</p>
                        <p class="industry_item_content_text">The new Surface Dock 2 instantly transforms your Surface into
                            a desktop PC with all the next-gen ports you need, including USB-C.
                        </p>
                        <a href="{{ route('shop.html') }}" class="industry_content_btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- industry section end -->


    <!-- feature content -->

    <div class="feature_content section_padding">
        <div class="container">
            <!-- section title -->
            <div class="section_title">
                <h3 class="title_top_heading">Featured content</h3>
            </div>
            <!-- wrapper -->
            <div class="feature_content_wrapper">
                <!-- item -->
                <a href="" class="feature_content_item">
                    <!-- image -->
                    <div class="feature_content_item_thumbnail">
                        <img src="{{ asset('assets/frontend/image/single page/feature/feature1.jpg') }}" alt="">
                    </div>
                    <!-- content -->
                    <div class="feature_content_item_content">
                        <p class="feature_content_item_name"> Solution brief </p>
                        <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                    </div>
                </a>

                <!-- item -->
                <a href="" class="feature_content_item">
                    <!-- image -->
                    <div class="feature_content_item_thumbnail">
                        <img src="{{ asset('assets/frontend/image/single page/feature/feature2.jpg') }}" alt="">
                    </div>
                    <!-- content -->
                    <div class="feature_content_item_content">
                        <p class="feature_content_item_name"> Solution brief </p>
                        <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                    </div>
                </a>


                <!-- item -->
                <a href="" class="feature_content_item">
                    <!-- image -->
                    <div class="feature_content_item_thumbnail">
                        <img src="{{ asset('assets/frontend/image/single page/feature/feature3.jpg') }}" alt="">
                    </div>
                    <!-- content -->
                    <div class="feature_content_item_content">
                        <p class="feature_content_item_name"> Solution brief </p>
                        <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                    </div>
                </a>


                <!-- item -->
                <a href="" class="feature_content_item">
                    <!-- image -->
                    <div class="feature_content_item_thumbnail">
                        <img src="{{ asset('assets/frontend/image/single page/feature/feature4.jpg') }}" alt="">
                    </div>
                    <!-- content -->
                    <div class="feature_content_item_content">
                        <p class="feature_content_item_name"> Solution brief </p>
                        <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- feature content end-->
    @include('frontend.footer')

    <script>
    function my(){
       $var = $("#goja").val();
       if($var == 'Shop Now'){
        var url = "http://localhost/ngenit/public/single/product/8";
               $(location).attr('href',url);
       }

    }
    </script>

@endsection
