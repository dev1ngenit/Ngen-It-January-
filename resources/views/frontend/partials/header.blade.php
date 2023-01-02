@php
    $setting=App\Models\Admin\Setting::first();
    $industrys = App\Models\Admin\Industry::orderBy('id','Desc')->limit(5)->get();
    $brands = App\Models\Admin\Brand::where('category','Top')->orWhere('category','Featured')->limit(10)->get();
    $categorys = App\Models\Admin\Category::orderBy('id','DESC')->limit(10)->get();
@endphp

<header class="fixed-top">
    <section class="header_top_menu_wrapper">
        <div class="header_top_menu">
            <div class="header_top_menu_item" style="font-size: 0.875rem;">
                <div class="top_menu_item_wrapper">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Create an account
                    </a>
                    <div class="dropdown-menu top_menu_item" aria-labelledby="navbarDropdown" style="border-radius: 8px">
                        @auth

                        @else
                        <a class="dropdown-item px-3 py-1 p-0" href="{{route('client.login')}}" style="border-bottom: 1px #ffffff dotted">Create Client Account</a>
                        @endauth

                        @if (Auth::guard('partner')->user())

                        @else
                        <a class="dropdown-item px-3 py-1 p-0" href="{{route('partner.login')}}" style="border-bottom: 1px #ffffff dotted">Create Partner Account</a>
                        @endif
                    </div>
                </div>
                <div class="top_menu_item_wrapper">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Your Dashboard
                    </a> 
                    <div class="dropdown-menu top_menu_item" aria-labelledby="navbarDropdown" style="border-radius: 8px">
                        @auth
                        <a class="dropdown-item px-3 py-1 p-0" href="{{route('client.dashboard')}}" style="border-bottom: 1px #ffffff dotted">Client Dashboard</a>
                        @else
                        <a class="dropdown-item px-3 py-1 p-0" href="{{route('client.login')}}" style="border-bottom: 1px #ffffff dotted">Sign In as Client</a>
                        @endauth

                        @if (Auth::guard('partner')->user())
                        <a class="dropdown-item px-3 py-1 p-0" href="{{route('partner.dashboard')}}" style="border-bottom: 1px #ffffff dotted">Partner Dashboard</a>
                        @else
                        <a class="dropdown-item px-3 py-1 p-0" href="{{route('partner.login')}}" style="border-bottom: 1px #ffffff dotted">Sign In as Partner</a>
                        @endif
                    </div>
                </div>


                {{-- <div class="top_menu_item_wrapper">
                    <button class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">Tools</button>

                    <div class="dropdown-menu top_menu_item">
                    <a class="dropdown-item" href="#">Empty</a>
                    <a class="dropdown-item" href="#">Empty</a>
                    </div>
                </div> --}}
                <div class="top_menu_item_wrapper">
                    <button class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">Support</button>

                    <div class="dropdown-menu top_menu_item sp">
                    <a class="dropdown-item px-3 py-1 p-0" href="{{route('contact')}}" style="border-bottom: 1px #ffffff dotted">On Call Support</a>
                    {{-- <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item px-3 py-1 p-0" href="{{route('support')}}">web Support Assistance</a>
                    </div>
                </div>
                    {{-- @php
                       $total_cart = Cart::count();
                    @endphp --}}
                <button class="add_cart"><a href="{{route('mycart')}}"><i class="fa-solid fa-cart-plus fa-1x"></i><span class="add_cart_count" id="cartQty">{{Cart::count()}}</span></a></button>
            </div>
        </div>
    </section>

    <section class="header_bottom_wrapper ">
        <div class="nav_menu_wrapper">
            <div class="mobile_view_wrapper d-flex justify-content-between">
                <!--Logo-->
                <div class="header_logo">
                    <a href="{{route('homepage')}}">
                        <img src="{{ (!file_exists('upload/logoimage/'.$setting->logo)) ? $setting->logo:url('upload/logoimage/'.$setting->logo) }}" alt="Ngen It">
                    </a>
                </div>
                <!--Menu icon-->
                <div class="mobile_nav_menu">
                    <div class="menu_icon">
                        <a href=""><i class="fa-solid fa-user"></i><span class="ipads_menu">Account</span></a>
                        <a href=""><i class="fa-solid fa-cart-plus"></i><span class="ipads_menu">Cart</span></a>
                        <a onclick="switchSearchVisible();" value="Click"><i class="fa-solid fa-magnifying-glass" id="iconSearch" onclick="iconSearch();"></i><span class="ipads_menu">Search</span></a>
                        <a onclick="switchMenuVisible();" value="Click"><i  class="fa-solid fa-bars" id="iconMenu" onclick="iconMenu()"></i><span class="ipads_menu">Menu</span></a>
                    </div>
                </div>
            </div>

            <!--Menu-->
            <nav class="display_none" id="Main_menu">
                <div class="menu_item_wrapper">
                    <!--Menu Item-->
                    <div class="menu_item">
                        <button class="country-btn-portugal">Our Services <i class="fa-solid fa-caret-down"></i></button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style"><i class="fa-solid fa-chevron-left"></i> Back</div>
                            </div>
                            <div class="sub_menu">
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Products<i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    {{-- <p>Harness the power of technology to achieve your most ambitious goals.</p> --}}
                                    <div class="details hidden sub_sub_item">
                                        <a href="{{route('software.common')}}">Software <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="{{route('hardware.common')}}">Hardware <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="{{route('shop')}}">Digital Services <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Developments <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Solutions <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    {{-- <p>Our deep expertise and end-to-end capabilities help you navigate complex IT challenges.</p> --}}
                                    <div class="details hidden sub_sub_item">
                                        {{-- <a href="">Smart City <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">IoT, AI, Aerobotics <i class="fa-solid fa-angle-right"></i></a> --}}
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Industry <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Our service offerings several Industries </p>
                                    <div class="details hidden sub_sub_item">
                                        @foreach ($industrys as $item)
                                        <a href="{{route('industry.details',$item->id)}}">{{$item->title}} <i class="fa-solid fa-angle-right"></i></a>
                                        @endforeach
                                    </div>
                                </div>
                                {{-- <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Services <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Our service offerings drive new business outcomes.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="ngenit/service_single.html">Consulting services <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="ngenit/service_single.html">Managed services <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="ngenit/service_single.html">Digital HR Services <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="ngenit/service_single.html">Support Services <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <a href="{{route('shop.html')}}">View All Products</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="ngenit/solution_common.html">View All Solutions</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="{{route('all.industry')}}">View All Industry</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="ngenit/service_common.html">View All Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Menu Item-->
                    <div class="menu_item">
                        <button class="country-btn-portugal">Tech Contents <i class="fa-solid fa-caret-down"></i></button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu 2-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style"><i class="fa-solid fa-chevron-left"></i> Back</div>
                            </div>
                            <div class="sub_menu mx-5">
                                <div class="col-lg-4 colum-12">
                                    <h3 class="toggleDetails">By Industry <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Harness the power of technology to achieve your most ambitious goals.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Education <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Healthcare <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Manufacturing <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Public sector <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 colum-12">
                                    <h3 class="toggleDetails">By Solution <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Our deep expertise and end-to-end capabilities help you navigate complex IT challenges.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Modern infrastructure <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Networking <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Procurement <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Real-time data <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 colum-12">
                                    <h3 class="toggleDetails">By Technology <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Our service offerings service offerings </p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">AI & IoT <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">IT optimization <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Cloud <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Cybersecurity <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Industries</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Solutions</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Technology</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Menu Item-->
                    {{-- <div class="menu_item">
                        <button class="country-btn-portugal">Partner & Clients <i class="fa-solid fa-caret-down"></i></button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu 3-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style"><i class="fa-solid fa-chevron-left"></i> Back</div>
                            </div>
                            <div class="sub_menu">
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Partners <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Harness the power of technology to achieve your most ambitious goals.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Bangladesh <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Nepal <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Bhutan <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Myanmar <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Clients <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Our deep expertise and end-to-end capabilities help you navigate complex IT challenges.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Public Sector <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Academic <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">FMG <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">MNC <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Principals <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Our service offerings service offerings </p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Software <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Hardware <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Solution <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Service <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Investors <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>No Data</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Empty <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Partners</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Clients</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Principals</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Investors</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--Menu Item-->
                    <div class="menu_item">
                        <button class="country-btn-portugal">Connect Us <i class="fa-solid fa-caret-down"></i></button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu 4-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style"><i class="fa-solid fa-chevron-left"></i> Back</div>
                            </div>
                            <div class="sub_menu">
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Contacts <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Harness the power of technology to achieve your most ambitious goals.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="{{route('support')}}">Direct Reach <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="{{route('contact')}}">Social Connects <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Datasheets <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="{{route('about')}}">About Us <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                                {{-- <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Service <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Our deep expertise and end-to-end capabilities help you navigate complex IT challenges.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Webinars <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Presentations <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">PoCs <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Knowledgebase <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div> --}}
                                {{-- <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Events <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Our service offerings service offerings </p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Online <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Venues <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Newsroom <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div> --}}
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Career <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Our service offerings drive new business outcomes.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="{{route('job.registration')}}">Join our team <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="{{route('job.openings')}}">Available Jobs <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <div class="col-lg-8 common_button2" style="border-radius: 5px;margin:5rem">
                                        <a class="text-white" href="{{route('job.registration')}}">Upload CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <ul class="sub_menu_footer_icon">
                                        <li><i class="fa-brands fa-square-facebook"></i></li>
                                        <li><i class="fa-brands fa-linkedin"></i></li>
                                        <li><i class="fa-brands fa-square-twitter"></i></li>
                                        <li><i class="fa-brands fa-square-instagram"></i></li>
                                    </ul>
                                </div>
                                {{-- <div class="sub_menu_footer_item">
                                    <a href="ngenit/contact_us.html">Request Service Call</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">Request Events</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="ngenit/job_post.html">Request Free Trainings</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!--Menu Item-->

                    <div class="menu_item">
                        <button class="country-btn-portugal">Shop <i class="fa-solid fa-caret-down"></i></button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu 5-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style"><i class="fa-solid fa-chevron-left"></i> Back</div>
                            </div>
                            <div class="sub_menu">
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">By Product Type<i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    {{-- <p>Harness the power of technology to achieve your most ambitious goals.</p> --}}
                                    <div class="details hidden sub_sub_item">
                                        <a href="{{route('software.common')}}">Software <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                    <div class="details hidden sub_sub_item">
                                        <a href="{{route('hardware.common')}}">Hardware <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">By Brand <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    {{-- <p>Our service offerings drive new business outcomes.</p> --}}
                                    <div class="row">
                                        @foreach ($brands as $item)
                                        <div class="details hidden sub_sub_item col-6">
                                            <a href="{{route('custom.product',$item->slug)}}">{{$item->title}} <i class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">By Category <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    {{-- <p>Harness the power of technology to achieve your most ambitious goals. </p> --}}
                                    <div class="row">
                                        @foreach ($categorys as $item)
                                        <div class="details hidden sub_sub_item col-6">
                                            <a href="{{route('category.html',$item->slug)}}">{{$item->title}} <i class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Shop<i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    {{-- <p>Our service offerings drive new business outcomes.</p> --}}
                                    <div class="col-lg-8 common_button2" style="border-radius: 5px">
                                        <a class="text-white" href="{{route('shop.html')}}">Shop All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <a href="{{route('shop.html')}}">View All Product</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="{{route('all.brand')}}">View All Brand</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="{{route('all.category')}}">View All Category</a>
                                </div>
                                {{-- <div class="sub_menu_footer_item">
                                    <a href="ngenit/product_common.html">View All Shop</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    @php
                        $jobs = App\Models\Admin\Job::all();
                    @endphp

                    <div class="menu_item">
                        <button class="country-btn-portugal">Career <i class="fa-solid fa-caret-down"></i></button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu 3-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style"><i class="fa-solid fa-chevron-left"></i> Back</div>
                            </div>
                            <div class="sub_menu">
                                <div class="col-1"></div>
                                <div class="col-lg-6 colum-12">
                                    <h3 class="toggleDetails">Job Openings <i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Wanna Build Your Career in Ngen It? Explore from here.</p>
                                    @foreach ($jobs as $item)
                                        <div class="details hidden sub_sub_item col-6">
                                            <a href="{{route('job.details',$item->id)}}">{{$item->category}} <i class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="colum-3 colum-12">
                                    <div class="col-lg-8 common_button2" style="border-radius: 5px">
                                        <a class="text-white" href="{{route('job.registration')}}">Upload CV</a>
                                    </div>
                                </div>

                            </div>
                            <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <a href="javascript:void(0);"></a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="{{route('job.openings')}}">View All Jobs</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href=""></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!--Search-->
            <div class="search_menu display_none" id="Search_menu">
                <div class="header_search">
                    <div class="row">
                    <form method="post" action="{{ route('product.search') }}">
                        @csrf
                            <input type="search" placeholder="What can we help you find?"
                             id="search_text" name="search" onchange="this.form.submit()">
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        <div id="searchProducts"></div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
</header>


<style>

    .search-area{
      position: relative;
    }

      #searchProducts {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #ffffff;
        z-index: 999;
        border-radius: 8px;
        margin-top: 5px;
      }


    </style>



    <script>
      function search_result_hide(){
        $("#searchProducts").slideUp();
      }

       function search_result_show(){
          $("#searchProducts").slideDown();
      }


    </script>
