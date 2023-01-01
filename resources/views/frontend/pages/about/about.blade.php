@extends('frontend.master')
@section('content')
    <!-- banner single page start -->
    @include('frontend.header')
    <section class="banner_single_page"
        style="background-image:url('{{ asset('assets/frontend/image/buy-brand-hero1.jpg') }}')">
        <div class="container">
            <div class="single_banner_content">
                <!-- heading -->
                <h1 class="single_banner_heading" style="font-size: 55px">Live and work effortlessly </h1>
                <p class="single_banner_text">Apple® next-generation products, available from Insight, will change the way
                    you work and connect.</p>
                <!-- single banner button -->
                <div class="single_buttton_wrapper">
                    <a href="" class="single_banner_button">Talk to a specialist</a>
                </div>
            </div>
        </div>
    </section>

    <!-- banner single page end-->


    <!-- aplle brand  -->

    <div class="product_veiw_details section_padding">
        <div class="container">
            <!-- section title -->
            <div class="section_title">
                <h3 class="title_top_heading">Surface is the answer.</h3>
                <p class="title_tex_content">You want a tablet, but you need a laptop. Microsoft Surface®, available from
                    Insight, offers the best of both.</p>
            </div>

            <!-- wrapper -->
            <div class="aboutus_awrad_wrapper">

                <!-- item -->
                <div class="apple_brand">
                    {{-- image --}}
                    <div class="apple_brand_thumbnail">
                        <img src="{{ asset('assets/frontend/image/cart/about.png') }}" alt="">
                    </div>

                    {{-- content --}}

                    <div class="apple_brand_content">
                        <p class="apple_brand_name">History</p>
                        <p class="apple_brand_text">From a 1988 entrepreneurial startup to
                            a global technology provider, we help
                            clients thrive</p>
                        <a href="" class="product_button" tabindex="0">Learn more</a>
                    </div>
                </div>

                <!-- item -->
                <div class="apple_brand">
                    {{-- image --}}
                    <div class="apple_brand_thumbnail">
                        <img src="{{ asset('assets/frontend/image/cart/about1.png') }}" alt="">
                    </div>

                    {{-- content --}}

                    <div class="apple_brand_content">
                        <p class="apple_brand_name">History</p>
                        <p class="apple_brand_text">From a 1988 entrepreneurial startup to
                            a global technology provider, we help
                            clients thrive</p>
                        <a href="" class="product_button" tabindex="0">Learn more</a>
                    </div>
                </div>

                <!-- item -->
                <div class="apple_brand">
                    {{-- image --}}
                    <div class="apple_brand_thumbnail">
                        <img src="{{ asset('assets/frontend/image/cart/about2.png') }}" alt="">
                    </div>

                    {{-- content --}}

                    <div class="apple_brand_content">
                        <p class="apple_brand_name">History</p>
                        <p class="apple_brand_text">From a 1988 entrepreneurial startup to
                            a global technology provider, we help
                            clients thrive</p>
                        <a href="" class="product_button" tabindex="0">Learn more</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- aplle brand end -->


    <!-- solution feature -->

    <section class="solution_feature">
        <div class="container">
            <div class="solution_feature_wrapper">

                <!-- content -->
                <div class="solution_feature_content">

                    <div class="solution_feature_title">Making a positive impact, globally.</div>

                    <p class="solution_feature_text">Insight is committed to serving as a good corporate citizen. This means
                        conducting business with integrity, avoiding corruption of all kinds and reducing our impact on the
                        environment.</p>
                    <p class="solution_feature_text">Insight is committed to serving as a good corporate citizen. This means
                        conducting business with integrity, avoiding corruption of all kinds and reducing our impact on the
                        environment.</p>

                    <a href="" class="product_button">Read our Corporate Citizenship Report</a>

                </div>

                <!-- image -->
                <div class="solution_feature_image">
                    <img src="{{ asset('assets/frontend/image/cart/aboutSolution.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- solution end -->

    <!-- about seo -->
    <div class="about_seo">
        <div class="container">

            <div class="about_seo_wrapper">

                <!-- image -->
                <div class="about_seo_imgage">
                    <img src="{{ asset('assets/frontend/image/cart/seosir.jpg') }}" alt="">
                </div>

                <!-- content -->
                <div class="about_seo_content">
                    <div class="about_seo_text">
                        <h4>"Our goal at NGen IT is to make meaningful connections that positively impact the lives of the
                            people we serve, including our clients, partners and teammates."</h4>
                        <p>
                            <strong>Md Rasel sir</strong>
                            <small>CEO NGenit</small>
                        </p>
                    </div>
                </div>

            </div>

            <div class="about_ceo_btn">
                <a href="" class="product_button">Meet our leadership</a>
            </div>

        </div>
    </div>
    <!-- about seo end -->

    <!-- solution feature -->

    <section class="solution_feature">
        <div class="container">
            <div class="solution_feature_wrapper">

                <!-- content -->
                <div class="solution_feature_content">

                    <div class="solution_feature_title">iPad</div>

                    <p class="solution_feature_text">Make work fun with an iconic tablet. Four models let you jot down notes
                        with Apple Pencil®, add a keyboard and work from anywhere — the way you want to work.
                    </p>

                    <a href="" class="product_button">Shop Now</a>

                </div>
                <!-- image -->
                <div class="solution_feature_image">
                    <img src="{{ asset('assets/frontend/image/cart/ipad-mobile.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Product solution end -->


    <!-- solution feature -->

    <section class="solution_feature solution_feature2">
        <div class="container">
            <div class="solution_feature_wrapper solution_feature_wrapper2">

                <!-- content -->
                <div class="solution_feature_content">

                    <div class="solution_feature_title">Apple TV</div>

                    <p class="solution_feature_text">Watch movies and shows in amazing 4K High Dynamic Range (HDR) quality.
                        Apple TV® 4K keeps you up to date with content from apps such as Netflix®, Hulu® and ESPN®. You can
                        also stream live sports and the news, and browse content from more than 60 video services without
                        switching from one app to the next.
                    </p>
                    <a href="" class="product_button">Shop Now</a>

                </div>
                <!-- image -->
                <div class="solution_feature_image">
                    <img src="{{ asset('assets/frontend/image/cart/apple-tv.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- solution feature end-->


    <!-- solution feature -->

    <section class="solution_feature">
        <div class="container">
            <div class="solution_feature_wrapper">

                <!-- content -->
                <div class="solution_feature_content">

                    <div class="solution_feature_title">iPhone</div>

                    <p class="solution_feature_text">Combining incredible designs and advanced features, the iPhone is an
                        experience you won’t forget. Capture your favorite moments with an enhanced dual camera, interact in
                        a magical way with Dynamic Island and go at the speed of lightning with the A16 Bionic Chip.</p>

                    <a href="" class="product_button">Learn more</a>

                </div>
                <!-- image -->
                <div class="solution_feature_image">
                    <img src="{{ asset('assets/frontend/image/cart/iphone-brand.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Product solution end -->


    <!-- solution feature -->

    <section class="solution_feature solution_feature2">
        <div class="container">
            <div class="solution_feature_wrapper solution_feature_wrapper2">

                <!-- content -->
                <div class="solution_feature_content">

                    <div class="solution_feature_title">Apple Watch</div>

                    <p class="solution_feature_text">Take your applications wherever you go. The Apple Watch® family
                        seamlessly integrates between your iPhone and other Apple devices, so you can stay connected
                        anywhere and never miss an important notification.
                    </p>
                    <a href="" class="product_button">Shop Now</a>

                </div>
                <!-- image -->
                <div class="solution_feature_image">
                    <img src="{{ asset('assets/frontend/image/cart/iphone-watch.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- solution feature end-->


    <!-- solution feature -->

    <section class="solution_feature">
        <div class="container">
            <div class="solution_feature_wrapper">

                <!-- content -->
                <div class="solution_feature_content">

                    <div class="solution_feature_title">Maximize your Apple investment.</div>

                    <p class="solution_feature_text">Together, Insight and Apple offer solutions that will modernize your
                        digital workplace environment. Our services were developed based on Apple’s best practices to help
                        you deploy and manage the consumption of Apple devices at scale, achieving full ecosystem
                        integration.</p>

                    <a href="" class="product_button">Learn more</a>

                </div>
                <!-- image -->
                <div class="solution_feature_image">
                    <img src="{{ asset('assets/frontend/image/cart/group.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Product solution end -->

    {{-- apple resaler --}}

    <div class="apple_resaler">
        <div class="container">
            {{-- wrapper --}}
            <div class="apple_resaler_wrapper">
                {{-- content --}}
                <div class="apple_resaler_content">
                    {{-- logo --}}
                    <div class="apple_resaler_content_logo">
                        <img src="assets/frontend/image/cart/apple-logo.png" alt="">
                    </div>
                    <p class="apple_reselar_title">Achieve your ambitious goals</p>
                    <p class="apple_reselar_maint">Achieve IT with Insight and Mac</p>

                    <a href="" class="product_button">Learn more</a>
                </div>
                {{-- image --}}
                <div class="apple_resaler_image">
                    <img src="{{ asset('assets/frontend/image/cart/laptop-mac.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- apple resaler end --}}

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
                        <img src="assets/frontend/image/single page/feature/feature1.jpg" alt="">
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
                        <img src="assets/frontend/image/single page/feature/feature2.jpg" alt="">
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
                        <img src="assets/frontend/image/single page/feature/feature3.jpg" alt="">
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
                        <img src="assets/frontend/image/single page/feature/feature4.jpg" alt="">
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
@endsection
