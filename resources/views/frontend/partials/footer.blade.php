@php
    $setting=App\Models\Admin\Setting::first();
@endphp
<footer class="container-fluid p-0">
    <!-- footyer gradient -->
    <div class="footer_top">
        <p>We deliver Ngen It Intelligent Technology Solutions™ expertise.</p>
    </div>

    <!-- main footer -->
    <div class="footer_middle">
        <div class="row footer_middle_wrapper">
            <!-- item -->

                <div class="col-lg-4 col-md-8 col-sm-12 footer_item_wrapper">
                    <!-- title -->
                    <h6>Newsletter</h6>
                    <!-- text -->
                    <form id="myform" action="{{route('newsletter.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <p>Sign up to receive the IT content that matters most to you. You can update your preferences or unsubscribe any time.</p>
                    <!-- button -->
                        <div class="col-lg-10 common_button2" style="padding: 7px 7px">
                            <input type="email" name="email"  placeholder="Insert Your Email Here.." style="background: transparent; border:1px solid #00000057; color:white">
                            <button id="submitbtn" type="submit" style="background: transparent; border:none; color:white"><i class="ph-paper-plane-tilt" style="font-size: 22px"></i></button>
                        </div>

                    </form>
                    {{-- <button href="" class="common_button2"></button> --}}
                </div>


            <!-- item -->
            <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
                <!-- title -->
                <h6>About NgenIt</h6>
                <!-- nav list -->
                <div class="footer_nav_list">
                    <ul>
                        <li><a href="ngenit/about_us.html">Company overview</a></li>
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
                        <li><a href="{{route('all.blog')}}">NGEN IT Blogs</a></li>
                </div>
            </div>

            <!-- item -->
            <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
                <!-- title -->
                <h6 class="main_footer_item_title">Help And Support</h6>
                <!-- nav list -->
                <div class="footer_nav_list">
                    <ul>
                        <li><a href="{{route('contact')}}">Contact us</a></li>
                        <li><a href="">FAQs</a></li>
                        <li><a href="">Order Helps</a></li>
                        <li><a href="ngenit/user_dashboard_track_order.html">Order Tracks</a></li>
                        <li><a href="{{route('support')}}">Supports</a></li>
                </div>
            </div>
        </div>
    </div>

    <!-- footer social -->
    <div class="social_icon_wrapper">
        <div class="footer_social_icon">
            <ul>
                <li><a href="{{$setting->linked_in}}"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="{{$setting->facebook}}"><i class="fa-brands fa-square-facebook"></i></a></li>
                <li><a href="{{$setting->twitter}}"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="{{$setting->youtube}}"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="{{$setting->instagram}}"><i class="fa-brands fa-instagram"></i> </a></li>
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
                    <li><a href="{{route('terms.policy')}}">Privacy policy</a></li>
                    <li><a href="{{route('terms.policy')}}">All Terms & Policies</a></li>
                    <li><a href="ngenit/web_accessibility.html">Web Accessibility</a></li>
                    <li><a href="{{route('all.techglossy')}}">Tech glossary</a></li>
                    <li><a href="ngenit/sitemap.html">Sitemap</a></li>
                    <li><label for="show_cookies">Cookies settings</label></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<style>
    .common_button2 input::placeholder{
        color: white;
        padding: 5px;
    }
    .common_button2 input:focus{
        border: 1px solid #00000057 !important;
	    border-color: inherit;
        -webkit-box-shadow: none !important;
	    box-shadow: none !important;
}
.common_button2 input:active{
        border: 1px solid #00000057 !important;
	    border-color: inherit;
        -webkit-box-shadow: none !important;
	    box-shadow: none !important;
}
</st
</style>
