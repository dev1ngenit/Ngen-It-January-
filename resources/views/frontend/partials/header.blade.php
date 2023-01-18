@php
    $setting = App\Models\Admin\Setting::first();
    $industrys = App\Models\Admin\IndustryPage::orderBy('id', 'Desc')->limit(10)->get();
    $features = App\Models\Admin\Feature::orderBy('id', 'Desc')->limit(10)->get();
    $solutions = App\Models\Admin\SolutionDetail::orderBy('id', 'Desc')->limit(10)->get();
    $brands = App\Models\Admin\BrandPage::orderBy('id', 'Desc')->limit(10)->get();
    $categorys = App\Models\Admin\Category::orderBy('id', 'DESC')->limit(10)->get();
    $blogs = App\Models\Admin\Blog::inRandomOrder()->limit(2)->get();
    $clientstorys = App\Models\Admin\ClientStory::inRandomOrder()->limit(2)->get();
    $techglossys = App\Models\Admin\Techglossy::inRandomOrder()->limit(2)->get();
    $jobs = App\Models\Admin\Job::all();
@endphp

<header class="fixed-top">
    <section class="header_top_menu_wrapper">
        <div class="header_top_menu">
            <div class="header_top_menu_item" style="font-size: 0.875rem;">
                <div class="top_menu_item_wrapper">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Create an account
                    </a>
                    <div class="dropdown-menu top_menu_item" aria-labelledby="navbarDropdown"
                        style="border-radius: 8px">
                        @if (Auth::guard('client')->user())
                        @else
                            <a class="dropdown-item px-3 py-1 p-0" href="{{ route('client.login') }}"
                                style="border-bottom: 1px #ffffff dotted">Create Client Account</a>
                        @endif

                        @if (Auth::guard('partner')->user())
                        @else
                            <a class="dropdown-item px-3 py-1 p-0" href="{{ route('partner.login') }}"
                                style="border-bottom: 1px #ffffff dotted">Create Partner Account</a>
                        @endif
                    </div>
                </div>
                <div class="top_menu_item_wrapper">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Your Dashboard
                    </a>
                    <div class="dropdown-menu top_menu_item" aria-labelledby="navbarDropdown"
                        style="border-radius: 8px">
                        @if (Auth::guard('client')->user())
                            <a class="dropdown-item px-3 py-1 p-0" href="{{ route('client.dashboard') }}"
                                style="border-bottom: 1px #ffffff dotted">Client Dashboard</a>
                        @else
                            <a class="dropdown-item px-3 py-1 p-0" href="{{ route('client.login') }}"
                                style="border-bottom: 1px #ffffff dotted">Sign In as Client</a>
                        @endif

                        @if (Auth::guard('partner')->user())
                            <a class="dropdown-item px-3 py-1 p-0" href="{{ route('partner.dashboard') }}"
                                style="border-bottom: 1px #ffffff dotted">Partner Dashboard</a>
                        @else
                            <a class="dropdown-item px-3 py-1 p-0" href="{{ route('partner.login') }}"
                                style="border-bottom: 1px #ffffff dotted">Sign In as Partner</a>
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
                    <button class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown">Support</button>

                    <div class="dropdown-menu top_menu_item sp">
                        <a class="dropdown-item px-3 py-1 p-0" href="{{ route('contact') }}"
                            style="border-bottom: 1px #ffffff dotted">On Call Support</a>
                        {{-- <div class="dropdown-divider"></div> --}}
                        <a class="dropdown-item px-3 py-1 p-0" href="{{ route('support') }}">web Support Assistance</a>
                    </div>
                </div>
                {{-- @php
                       $total_cart = Cart::count();
                    @endphp --}}
                <button class="add_cart"><a href="{{ route('mycart') }}"><i
                            class="fa-solid fa-cart-plus fa-1x"></i><span class="add_cart_count"
                            id="cartQty">{{ Cart::count() }}</span></a></button>
            </div>
        </div>
    </section>

    <section class="header_bottom_wrapper ">
        <div class="nav_menu_wrapper">
            <div class="mobile_view_wrapper d-flex justify-content-between">
                <!--Logo-->
                <div class="header_logo">
                    <a href="{{ route('homepage') }}">
                        <img src="{{ !file_exists('upload/logoimage/' . $setting->logo) ? $setting->logo : url('upload/logoimage/' . $setting->logo) }}"
                            alt="Ngen It">
                    </a>
                </div>
                <!--Menu icon-->
                <div class="mobile_nav_menu">
                    <div class="menu_icon">
                        <a href=""><i class="fa-solid fa-user"></i><span class="ipads_menu">Account</span></a>
                        <a href=""><i class="fa-solid fa-cart-plus"></i><span class="ipads_menu">Cart</span></a>
                        <a onclick="switchSearchVisible();" value="Click"><i class="fa-solid fa-magnifying-glass"
                                id="iconSearch" onclick="iconSearch();"></i><span class="ipads_menu">Search</span></a>
                        <a onclick="switchMenuVisible();" value="Click"><i class="fa-solid fa-bars" id="iconMenu"
                                onclick="iconMenu()"></i><span class="ipads_menu">Menu</span></a>
                    </div>
                </div>
            </div>


            <!--Menu-->
            <nav class="display_none" id="Main_menu">
                <div class="menu_item_wrapper">
                    <!--Menu Item-->
                    <div class="menu_item">
                        <button class="country-btn-portugal">Our Services <i
                                class="fa-solid fa-caret-down"></i></button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style"><i
                                        class="fa-solid fa-chevron-left"></i> Back</div>
                            </div>
                            <div class="sub_menu">
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Products<i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Harness the power of technology to achieve your most ambitious goals.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="{{ route('software.common') }}">Software <i
                                                class="fa-solid fa-angle-right"></i></a>
                                        <a href="{{ route('hardware.common') }}">Hardware <i
                                                class="fa-solid fa-angle-right"></i></a>
                                        <a href="{{ route('shop') }}">Digital Services <i
                                                class="fa-solid fa-angle-right"></i></a>
                                        <!-- <a href="report.html">Developments <i class="fa-solid fa-angle-right"></i></a> -->
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Solutions <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Our deep expertise and end-to-end capabilities help you navigate complex IT
                                        challenges.</p>
                                    <div class="details hidden sub_sub_item">
                                        @foreach ($solutions as $item)
                                            <a href="{{ route('solution.details', $item->id) }}">
                                                {{ $item->name }}<i class="fa-solid fa-angle-right"></i></a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Industry <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Our service offerings service offerings </p>
                                    <div class="details hidden sub_sub_item">
                                        @foreach ($industrys as $item)
                                            <a href="{{ route('industry.details', $item->id) }}">{{ App\Models\Admin\Industry::where('id', $item->industry_id)->value('title') }}
                                                <i class="fa-solid fa-angle-right"></i></a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Features <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i></h3>

                                    <div class="details hidden sub_sub_item">
                                        @foreach ($features as $item)
                                            <a href="{{ route('feature.details', $item->id) }}">{{ $item->badge }}
                                                <i class="fa-solid fa-angle-right"></i></a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <a href="{{ route('shop.html') }}">View All Products</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="ngenit/solution_common.html">View All Solutions</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="{{ route('all.industry') }}">View All Industry</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="ngenit/service_common.html">View All Features</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Menu Item-->
                    <div class="menu_item">
                        <button class="country-btn-portugal">Tech Contents <i
                                class="fa-solid fa-caret-down"></i></button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left border-bottom ">
                            <!--Sub menu 2-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style"><i
                                        class="fa-solid fa-chevron-left"></i> Back</div>
                            </div>
                            <div class="sub_menu row px-5">
                                <div class="col-4 colum-12">
                                    <h3 class="toggleDetails">Blogs<i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    @foreach ($blogs as $item)
                                        <div class="d-flex mb-3">
                                            <div class="w-50">
                                                <img class="w-100"
                                                    src="{{ asset('storage/requestImg/' . $item->image) }}"
                                                    alt="">
                                            </div>
                                            <p class="w-50 ml-3">{{ $item->title }}</p>
                                        </div>
                                    @endforeach

                                    <button class="py-1 mt-1">View all Blogs</button>
                                </div>

                                <div class="col-4 colum-12">
                                    <h3 class="toggleDetails">Client Storys<i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    @foreach ($clientstorys as $item)
                                        <div class="d-flex mb-3">
                                            <div class="w-50">
                                                <img class="w-100"
                                                    src="{{ asset('storage/requestImg/' . $item->image) }}"
                                                    alt="">
                                            </div>
                                            <p class="w-50 ml-3">{{ $item->title }}</p>
                                        </div>
                                    @endforeach
                                    <button class="py-1 mt-1">View all client stories</button>
                                </div>

                                <div class="col-4 colum-12">
                                    <h3 class="toggleDetails">Tech Glossary<i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    @foreach ($techglossys as $item)
                                        <div class="d-flex mb-3">
                                            <div class="w-50">
                                                <img class="w-100"
                                                    src="{{ asset('storage/requestImg/' . $item->image) }}"
                                                    alt="">
                                            </div>
                                            <p class="w-50 ml-3">{{ $item->title }}</p>
                                        </div>
                                    @endforeach

                                    <button class="py-1 mt-1">View all Tech Glossary</button>
                                </div>

                            </div>
                            <!-- <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Industries</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Solutions</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Technology</a>
                                </div>

                            </div> -->
                        </div>
                    </div>
                    <!--Menu Item-->
                    <div class="menu_item">
                        <button class="country-btn-portugal">Partner & Clients <i
                                class="fa-solid fa-caret-down"></i></button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu 3-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style"><i
                                        class="fa-solid fa-chevron-left"></i> Back</div>
                            </div>
                            <div class="sub_menu">
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Partners <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Harness the power of technology to achieve your most ambitious goals.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Bangladesh <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Nepal <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Bhutan <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Myanmar <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Clients <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Our deep expertise and end-to-end capabilities help you navigate complex IT
                                        challenges.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Public Sector <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Academic <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">FMG <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">MNC <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Principals <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                    <p>Our service offerings service offerings </p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Software <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Hardware <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Solution <i class="fa-solid fa-angle-right"></i></a>
                                        <a href="">Service <i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Investors <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
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
                    </div>
                    <!--Menu Item-->
                    <div class="menu_item">
                        <button class="country-btn-portugal">Connect Us <i
                                class="fa-solid fa-caret-down"></i></button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu 4-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style"><i
                                        class="fa-solid fa-chevron-left"></i> Back</div>
                            </div>
                            <div class="sub_menu row border-bottom">
                                <div class="col-4 colum-12 p-4">
                                    <h3 class="text-center">Upload your CV</h3>
                                    <div class="col-lg-6 common_button2"
                                        style="border-radius: 5px;margin-top:2rem;margin-left:6rem;">
                                        <a class="text-white" href="{{ route('job.registration') }}">Upload CV</a>
                                    </div>
                                    {{-- <a href="{{route('job.registration')}}" class="common_button2">CV Upload</a> --}}
                                </div>
                                <div class="col-8 row">
                                    <div class="col-4 colum-12">
                                        <h3 class="toggleDetails">Contacts <i
                                                class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                        <p>Harness the power of technology to achieve your most ambitious goals.</p>
                                        <div class="details hidden sub_sub_item">
                                            <a href="{{ route('support') }}">Direct Reach <i
                                                    class="fa-solid fa-angle-right"></i></a>
                                            <a href="{{ route('contact') }}">Social Connects <i
                                                    class="fa-solid fa-angle-right"></i></a>
                                            <a href="">Datasheets <i class="fa-solid fa-angle-right"></i></a>
                                            <a href="{{ route('about') }}">About Us <i
                                                    class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-start">
                                            <p class="mt-1"><strong><span class="border-top">Stay</span>
                                                    Connected</strong></p>
                                            <ul class="sub_menu_footer_icon">
                                                <li><a href="{{ $setting->facebook }}"><i
                                                            class="h4 fa-brands fa-square-facebook"></i></a></li>
                                                <li><a href="{{ $setting->linked_in }}"></a><i
                                                        class="h4 fa-brands fa-linkedin"></i></a></li>
                                                <li><a href="{{ $setting->twitter }}"></a><i
                                                        class="h4 fa-brands fa-square-twitter"></i></a></li>
                                                <li><a href="{{ $setting->youtube }}"><i
                                                            class="h4 fa-brands fa-youtube"></i></a></li>
                                                <li><a href="{{ $setting->instagram }}"></a><i
                                                        class="h4 fa-brands fa-square-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-4 colum-12">
                                        <h3 class="toggleDetails">Career <i
                                                class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                        <p>Our service offerings drive new business outcomes.</p>
                                        <div class="details hidden sub_sub_item">
                                            <a href="{{ route('job.registration') }}">Join our team <i
                                                    class="fa-solid fa-angle-right"></i></a>
                                            <a href="{{ route('job.openings') }}">Available Jobs <i
                                                    class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-4 colum-12">
                                        <h3 class="toggleDetails">Media relations <i
                                                class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                        <p>Our service offerings drive new business outcomes.</p>
                                        <div class="details hidden sub_sub_item">
                                            <a href="javascript:void(0);">Under Construction </a>
                                            {{-- <a href="ngenit/job_post.html">Available Jobs <i class="fa-solid fa-angle-right"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <ul class="sub_menu_footer_icon">
                                        <li><i class="fa-brands fa-square-facebook"></i></li>
                                        <li><i class="fa-brands fa-linkedin"></i></li>
                                        <li><i class="fa-brands fa-square-twitter"></i></li>
                                        <li><i class="fa-brands fa-square-instagram"></i></li>
                                    </ul>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="ngenit/contact_us.html">Request Service Call</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">Request Events</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="ngenit/job_post.html">Request Free Trainings</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!--Menu Item-->
                    <div class="menu_item">
                        <button class="country-btn-portugal">Shop <i class="fa-solid fa-caret-down"></i></button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left border-bottom">
                            <!--Sub menu 5-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style"><i
                                        class="fa-solid fa-chevron-left"></i> Back</div>
                            </div>
                            <div class="sub_menu row px-3">
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-4 colum-12">
                                            <h3 class="toggleDetails">Shop by Product <i
                                                    class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                            <p>Harness the power of technology to achieve your most ambitious goals.</p>
                                            <div class="details hidden sub_sub_item">
                                                <a href="ngenit/product_filters.html">Product <i
                                                        class="fa-solid fa-angle-right"></i></a>
                                            </div>
                                            <div class="common_button py-0">Show all products</div>
                                        </div>
                                        <div class="col-4 colum-12">
                                            <h3 class="toggleDetails">Shop by Brand <i
                                                    class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                            <div class="row">
                                                @foreach ($brands as $item)
                                                    <div class="details hidden sub_sub_item col-6">
                                                        <a
                                                            href="{{ route('custom.product', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}">{{ App\Models\Admin\Brand::where('id', $item->brand_id)->value('title') }}
                                                            <i class="fa-solid fa-angle-right"></i></a>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="common_button py-0">Show all brands</div>
                                        </div>
                                        <div class="col-4 colum-12">
                                            <h3 class="toggleDetails">Shop by Category <i
                                                    class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                            <div class="row">
                                                @foreach ($categorys as $item)
                                                    <div class="details hidden sub_sub_item col-6">
                                                        <a href="{{ route('category.html', $item->slug) }}">{{ $item->title }}
                                                            <i class="fa-solid fa-angle-right"></i></a>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="common_button py-0">Show all categories</div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6 colum-12">
                                            <h3 class="toggleDetails">Explore our deals<i
                                                    class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                            <p>Harness the power of technology to achieve your most ambitious goals.</p>
                                            <div class="details hidden sub_sub_item">
                                                <a href="{{ route('tech.deals') }}">Technology deals <i
                                                        class="fa-solid fa-angle-right"></i></a>
                                                <a href="{{ route('refurbished') }}">certified refurbished <i
                                                        class="fa-solid fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- <div class="col-6 colum-12">
                                        <h3 class="toggleDetails">Purchasing contracts<i class="fa-solid fa-angle-right mb_sh float-right"></i></h3>
                                        <p>Our service offerings drive new business outcomes.</p>
                                        <div class="details hidden sub_sub_item">
                                            <a href="ngenit/hardware_single.html">Education <i class="fa-solid fa-angle-right"></i></a>
                                            <a href="ngenit/hardware_single.html">Federal government <i class="fa-solid fa-angle-right"></i></a>
                                            <a href="ngenit/hardware_single.html">Healthcare <i class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                    </div> -->

                                    </div>
                                </div>

                                <div class="col-4 colum-12 border-left">
                                    <div>
                                        <p class="font-weight-bold">Manage your purchasing and products.</p>
                                        <p>Log in to NGenIT for smarter shopping, hardware, software and cloud
                                            management, and tailored reporting</p>
                                        <div class="common_button2 py-1">Log in to your NGenIT account</div>
                                        <a class="text-danger" href="">Create my NGenIT account</a>
                                    </div>
                                    <hr>
                                    <div>
                                        <p class="font-weight-bold">Simplify and streamline with a myInsight account.
                                        </p>
                                        <p>We’ll help you procure and manage your products throughout their lifecycle.
                                        </p>
                                        <a class="text-danger" href="">See the benefits of our e-procurement
                                            solutions</a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <a href="ngenit/product_filters.html">View All Product</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="ngenit/brand_common.html">View All Brand</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Category</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="ngenit/product_common.html">View All Shop</a>
                                </div>
                            </div> -->
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
                            <input type="search" placeholder="What can we help you find?" id="search_text"
                                name="search" onchange="this.form.submit()">
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
    .search-area {
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
    function search_result_hide() {
        $("#searchProducts").slideUp();
    }

    function search_result_show() {
        $("#searchProducts").slideDown();
    }
</script>
