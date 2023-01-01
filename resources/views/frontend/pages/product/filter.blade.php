@extends('frontend.master')
@section('content')

    <!--========Header Title==========-->
    <section class="header_title_product_filter"
        style="background-image:url('{{ asset('frontend/images/desktop-shop-hero.jpg') }}'); margin-top: 100px;">
        <h3 class="text-center text-white">Shop By Your Choice</h3>
    </section>
    <!----------Header Title End--------->
    <br><br>
    {{ Form::open(['method' => 'GET', 'enctype' => 'multipart/form-data']) }}
    <!--============Content & Filter=============-->
    <section class="container">
        <!----------Filter Top-nav Bar --------->
        <div class="clinet_stories_filter_top_bar">
            <label for="Per Page">Results Per Page</label>
            {{ Form::select('per_page', array_combine([5, 10, 20, 40], [5, 10, 20, 40]), $request->per_page, ['class' => 'autoSubmit']) }}

            <span class="product_go_to_next_pge"><a href="{{ $products->nextPageUrl() }}" class="pull-right">Go to next
                    page...<i class="fa-solid fa-chevron-right"></i></a></span>
        </div>
        <hr>
        <div class="row">
            <!----------Sidebar client stories --------->
            <div class="col-lg-3 col-sm-12 border">
                <div class="sidebar_client_stories">
                    <label id="count"><b>{{ $products->count() }}</b> results matched your search</label>
                    <hr id="hr">
                    <!--------Your search--------->
                    <div id="yoursearch" class="client_stories_your_search">
                        <h6 class="mb-2">Your search</h6>

                        @if ($request->keyword)
                            <div class="alert alert-secondary alert-dismissible">
                                <button type="button" class="close"
                                    data-dismiss="alert">&times;</button>{{ $request->keyword }}
                            </div>
                        @endif

                        @if ($request->filterbrand)
                            @foreach ($request->filterbrand as $item)
                                <div class="alert alert-secondary alert-dismissible">
                                    <button type="button" class="close"
                                        data-dismiss="alert">&times;</button>{{ $item }}
                                </div>
                            @endforeach
                        @endif

                        @if ($request->filtercategory)
                            @foreach ($request->filtercategory as $item)
                                <div class="alert alert-secondary alert-dismissible">
                                    <button type="button" class="close"
                                        data-dismiss="alert">&times;</button>{{ $item }}
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <hr id="hr">
                    <form action="{{ URL::current() }}" method="GET">

                        <!-------Content Results---------->
                        <div class="client_stories_narrow_content">
                            <h6 class="mb-2">Narrow results</h6>
                            <input class="p-1" type="text" name="keyword" placeholder="BY KEYWORD...">
                        </div>
                        <hr>


                        <!-------Apply Filters Button---------->
                        <div id="sticker">
                            <div class="product_apply_filter_btn d-flex">
                                <button onclick="show()" type="submit">Apply Filters</button>
                            </div>
                        </div>

                        <hr>

                        <!-------List Price---------->
                        <div class="product_list_price">
                            <h6 class="mb-2">List Price</h6>
                            <form action="#">
                                <input type="number" id="quantity" name="low" style="width: 80px;">
                                <label for="#">to</label>
                                <input type="number" id="quantity" name="high" style="width: 80px;">
                            </form>
                        </div>
                        <hr>

                        <!-------Stock Status---------->
                        <div class="product_stock_status">
                            <h6 class="mb-2">Stock Status</h6>
                            <div class="form-check">
                                <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                                <span class="ml-2">Show only in-stock items</span>
                            </div>

                        </div>
                        <hr>

                        <!--------Manufacturers--------->
                        <div class="client_stories_filter_category">
                            <h6 onclick="myFunction()" class="mb-2"><i class="fa-solid fa-caret-down"></i> Brands
                            </h6>
                        </div>

                        <div id="filter_category">
                            @foreach ($brands as $item)
                                @php
                                    $checked = [];
                                    if (isset($_GET['filterbrand'])) {
                                        $checked = $_GET['filterbrand'];
                                    }
                                @endphp
                                <div class="form-check py-1 m-0" style="font-size:12px;">
                                    <span><input type="checkbox" name="filterbrand[]" class="custom" value="{{ $item->title }}"
                                        @if (in_array($item->title, $checked)) checked @endif />
                                    {{ $item->title }} </span><br>
                                </div>
                            @endforeach
                            {{-- <div class="product_apply_filter_btn d-flex">
                         <button type="submit">Apply Filters</button>
                         </div> --}}
                        </div>

                        <hr>

                        <!--------System / Type--------->
                        <div class="client_stories_filter_category">
                            <h6 onclick="showhide()" class="mb-2"><i class="fa-solid fa-caret-down"></i> Category</h6>
                            <div id="newpost">
                                @foreach ($categories as $item)
                                    @php
                                        $checked = [];
                                        if (isset($_GET['filtercategory'])) {
                                            $checked = $_GET['filtercategory'];
                                        }
                                    @endphp
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input custom" name="filtercategory[]"
                                            value="{{ $item->category }}"
                                            @if (in_array($item->title, $checked)) checked @endif />
                                        {{ $item->title }}
                                    </div>
                                @endforeach
                                {{-- <div class="product_apply_filter_btn d-flex">
                                    <button type="submit">Apply filters</button>
                                 </div> --}}
                            </div>
                    </form>
                </div>
                <hr>

                <!--------End--------->

            </div>
        </div>
        <!----------conternt client stories --------->
        <div class="col-lg-9 col-sm-12">


            <!--------item------->
            @foreach ($products as $item)
                <div class="product_content_item row">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <img class="img-fluid" src="{{ asset('upload/Product/' . $item->image) }}" alt="">
                    </div>

                    <div class="col-lg-9 col-md-8 col-sm-12 product_content_item">
                        <a href="#">
                            <h3>
                                <a href="{{ route('product.details', ['id' => $item->id]) }}"
                                    class="product_item_content_name">{{ $item->name }}</a>
                            </h3>
                        </a>
                        <!--Add To Basket-->
                        <div class="row">
                            <div class="col-lg-7 col-sm-12">
                                {{-- <p>Insight Part #: 11MY001SUS</p>
                                    <p>Mfr Part #: 11MY001SUS</p> --}}
                                <ul class="mt-2">
                                    <li>{{ $item->description }}</li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-sm-12">
                                <h4>List Price</h4>
                                <h3>USD ${{ $item->price }}</h3>
                                <h6>{{ $item->stock }} in stock</h6>
                                <!------------>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                    <input type="hidden" value="{{ $item->name }}" name="name">
                                    <input type="hidden" value="{{ $item->price }}" name="price">
                                    <input type="hidden" value="{{ $item->thumbnail }}" name="image">
                                    <div class="row mt-4">
                                        <div class="col-4 quantity">
                                            <input type="number" min="1" name="quantity" max="9"
                                                step="1" value="1">
                                        </div>
                                        <div class="col-8 filter_btn">
                                            <button onclick="a()"
                                                style="background:transparent;border:none;color:white">Add To
                                                Basket</button>
                                        </div>
                                    </div>
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div><br>
                <hr><br><br>
            @endforeach
        </div>
        </div>
        </div>

        {{ Form::close() }}

        <!------------------Pagination------------------->
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                {!! $products->withQueryString()->links() !!}
            </nav>
        </div>
    </section>
    <br>

    <style>
        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #ae0a46 !important;
            border-color: #ae0a46 !important;
        }
    </style>




    <!---================================================================--->

    <script>
        // $("#count").hide();
        // $("#yoursearch").hide();
        // $("#hr").hide();

        function myFunction() {
            var x = document.getElementById("filter_category");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function showhide() {
            var div = document.getElementById("newpost");
            if (div.style.display !== "none") {
                div.style.display = "none";
            } else {
                div.style.display = "block";
            }
        }
        //-----------------
        // $(document).ready(function() {
        // 	var s = $("#sticker");
        // 	var pos = s.position();
        // 	$(window).scroll(function() {
        // 		var windowpos = $(window).scrollTop();
        // 		if (windowpos > pos.top) {
        // 			s.addClass("stick");
        // 		} else {
        // 			s.removeClass("stick");
        // 		}
        // 	});
        // });
        //-----------------
        function ReadMoreLess() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var iMoreLess = document.getElementById("iMoreLess");
            var lblText = document.getElementById("lblText");
            if (dots.style.display === "none") {
                dots.style.display = "inline";
                iMoreLess.className = "fa fa-chevron-circle-right";
                lblText.innerHTML = "See all open positions";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                iMoreLess.className = "fa fa-chevron-circle-down";
                lblText.innerHTML = "Hide all open positions";
                moreText.style.display = "inline";
            }
        }
    </script>

    <script>
        $(".autoSubmit").change(function() {
            $(this).parents("form").submit()
        });

        function show() {
            $("#count").show();
            $("#yoursearch").show();
            $("#hr").show();
        }
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection
