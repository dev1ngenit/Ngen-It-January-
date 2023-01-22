@extends('frontend.master')

@section('content')

    <!--======// Header Title //======-->
    <section class="brand_header_wrapper" style="background-image: url('{{ asset('frontend/images/single-page/banner/cables-hero-1.jpg') }}'); margin-top:100px; height:15rem">
        <div class="container">
            <h1>Shop By Category</h1>

        </div>

    </section>
    <!--------- End --------->

    <!--======// Top Brand //=====-->
    <section class="container">
        <!--Title-->
        <div class="common_product_item_title">
            <h3>All Categories</h3>
        </div>
        <!--Product brands-->
        <div class="row">
            <!--Category item-->
            @foreach ($categorys as $item)
                <div class="col-lg-2 col-md-4 col-sm-6 p-4">
                    <a href="{{ route('category.html',$item->slug) }}" class="top_brand_image">
                        <img class="img-fluid mb-4" src="{{ asset('storage/requestImg/' . $item->image) }}" alt="{{$item->title}}" width="180px" height="100px">
                        <h6 class="text-center">{{$item->title}}</h6>
                    </a>
                </div>
            @endforeach



        </div>
    </section>
    <!--------- End -------->




    <!--======// Featured Sub Categories //=====-->
    <section class="container">
        <!--Title-->
        <div class="common_product_item_title">
            <h3>All Sub Categories</h3>
        </div>
        <!--Product Sub Categories-->
        <div class="row">
            <!--Category item-->
            @foreach ($sub_cats as $item)
            @php
                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
            @endphp
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                <a href="{{ route('category.html',$item->slug) }}" class="top_brand_image">

                    <img class="img-fluid mb-4" src="{{ asset('storage/requestImg/' . $item->image) }}" alt="{{$item->title}}" width="180px" height="100px">
                    <h6 class="text-center">{{$item->title}}</h6>
                </a>
            </div>
            @endforeach
            @foreach ($sub_sub_cats as $item)
            @php
                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
            @endphp
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                <a href="{{ route('category.html',$item->slug) }}" class="top_brand_image">
                    <img class="img-fluid mb-4" src="{{ asset('storage/requestImg/' . $item->image) }}" alt="{{$item->title}}" width="180px" height="100px">
                    <h6 class="text-center">{{$item->title}}</h6>
                </a>
            </div>
            @endforeach

            <!--Category item-->

        </div>
    </section><hr>
    <!--------- End -------->






    <!--======// Alphabetically //====-->
    <section class="container section_padding">
        <div class="tech_glossary_area_left">
            <div class="browse_alphabetically">
                <h2>Explore all the Categories Ngen It has to offer.</h2>
                <div class="advanceto_index">
                    <a href="">#</a>
                    <a href="#brand_A">A</a>
                    <a href="#brand_B">B</a>
                    <a href="#brand_C">C</a>
                    <a href="#brand_D">D</a>
                    <a href="#brand_E">E</a>
                    <a href="#brand_F">F</a>
                    <a href="#brand_H">H</a>
                    <a href="#brand_I">I</a>
                    <a href="#brand_K">K</a>
                    <a href="#brand_L">L</a>
                    <a href="#brand_M">M</a>
                    <a href="#brand_N">N</a>
                    <a href="#brand_O">O</a>
                    <a href="#brand_P">P</a>
                    <a href="#brand_R">R</a>
                    <a href="#brand_S">S</a>
                    <a href="#brand_T">T</a>
                    <a href="#brand_U">U</a>
                    <a href="#brand_V">V</a>
                    <a href="#brand_W">W</a>
                    <a href="#brand_Z">Z</a>
                  </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" >
                <h2 class="letter_content_title">#</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        <li class="col-lg-3 col-sm-6"><a href="#">5G</a></li>
                    </ul>
                </div>
            </div>

            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_A">
                <h2 class="letter_content_title">A</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'A')

                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)

                            @if ($item->title[0] == 'A')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'A')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'A')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_B">
                <h2 class="letter_content_title">B</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'B')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'B')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'B')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'B')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_C">
                <h2 class="letter_content_title">C</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'C')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'C')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'C')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'C')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_D">
                <h2 class="letter_content_title">D</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'D')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'D')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'D')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'D')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_E">
                <h2 class="letter_content_title">E</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'E')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'E')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'E')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'E')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_F">
                <h2 class="letter_content_title">F</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'F')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'F')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'F')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'F')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_H">
                <h2 class="letter_content_title">H</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'H')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'H')
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'H')
                            @php
                            $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                        @endphp
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'H')
                            @php
                            $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                        @endphp
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_I">
                <h2 class="letter_content_title">I</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'I')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'I')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'I')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'I')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_K">
                <h2 class="letter_content_title">K</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'K')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'K')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'K')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'K')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_L">
                <h2 class="letter_content_title">L</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'L')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'L')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'L')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'L')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_M">
                <h2 class="letter_content_title">M</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'M')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'M')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'M')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'M')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_N">
                <h2 class="letter_content_title">N</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'N')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'N')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'N')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'N')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_O">
                <h2 class="letter_content_title">O</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'O')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'O')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'O')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'O')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_P">
                <h2 class="letter_content_title">P</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'P')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'P')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'P')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'P')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_R">
                <h2 class="letter_content_title">R</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'R')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'R')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'R')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'R')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_S">
                <h2 class="letter_content_title">S</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'S')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'S')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'S')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'S')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_T">
                <h2 class="letter_content_title">T</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'T')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'T')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'T')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'T')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_U">
                <h2 class="letter_content_title">U</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'U')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'U')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'U')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'U')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_V">
                <h2 class="letter_content_title">V</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'V')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'V')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'V')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'V')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_W">
                <h2 class="letter_content_title">W</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'W')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'W')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'W')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'W')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_Z">
                <h2 class="letter_content_title">Z</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($categorys as $item)
                            @if ($item->title[0] == 'Z')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_cats as $item)
                            @if ($item->title[0] == 'Z')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_cats as $item)
                            @if ($item->title[0] == 'Z')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('category.html',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                        @foreach ($sub_sub_sub_cats as $item)
                            @if ($item->title[0] == 'Z')
                            <li class="col-lg-3 col-sm-6"><a href="#">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </section>


    <!--========// Related Product Begin //==========-->
    <section class="popular_product_section section_padding">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="section_title">
                    <h3 class="title_top_heading">Related Products</h3>
                </div>
                <!-- wrapper -->
                <div class="populer_product_slider">

                    <!-- product_item -->
                    @foreach ($products as $item)
                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="{{asset($item->thumbnail)}}" alt="{{$item->name}}" width="150px" height="113px">
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
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-------End-------->



@endsection
