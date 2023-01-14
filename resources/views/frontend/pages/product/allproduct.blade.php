@extends('frontend.master')
@section('content')


    <!--======// Header Title //======-->
    <section class="header_title_product_filter"
        style="background-image: url('{{ asset('storage/' . $cat->image) }}');margin-top: 100px; background-size:contain;background-color:black">
        <h1 class="text-left ml-4 pl-4">
            {{ $cat->title }}
        </h1>
    </section><br><br>
    <!-------- End--------->
 
    <!--=======// Content & Filter //=======-->
    <section class="container">
        <form action="{{ route('custom.product', $cat->slug) }}" method="POST">
            @csrf
            <!----------Filter Top-nav Bar --------->
            <div class="clinet_stories_filter_top_bar">
                <label>Results per page </label>
                <span class="client_story_filter_page">
                    <select class="show" name="show" onchange="this.form.submit();">
                        <option value="">Default</option>
                        <option value="5" @if (!empty($_GET['show']) && $_GET['show'] == '5') selected @endif>5</option>
                        <option value="10" @if (!empty($_GET['show']) && $_GET['show'] == '10') selected @endif>10</option>
                        <option value="20" @if (!empty($_GET['show']) && $_GET['show'] == '20') selected @endif>20</option>
                        <option value="40" @if (!empty($_GET['show']) && $_GET['show'] == '40') selected @endif>40</option>
                    </select>

                </span>

                <label class="ml-4">Sort By: </label>
                <span class="client_story_filter_all_year">
                    <select class='sortBy' name='sortBy' onchange="this.form.submit();">
                        <option value="">Default</option>
                        <option value="titleASC" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleASC') selected @endif>Ascending By Name
                        </option>
                        <option value="priceASC" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceASC') selected @endif> Ascending By Price
                        </option>
                        <option value="titleDESC" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleDESC') selected @endif>Descending By Name
                        </option>
                        <option value="priceDESC" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceDESC') selected @endif>Descending By Price
                        </option>

                    </select>
                </span>
                {{-- <span class="product_go_to_next_pge"><a href="#" class="float-right">Go to next page...<i
                    class="fa-solid fa-chevron-right"></i></a></span> --}}
            </div>
            <hr class="m-1">
            <div class="row">
                <!----------Sidebar client stories --------->
                <div class="col-lg-3 col-sm-12">
                    <div class="sidebar_client_stories">
                        <label><b>
                                @if ($products)
                                    {{ $products->count() }}
                                @else
                                    No
                                @endif
                            </b> results matched your search</label>
                        <hr class="m-0">
                        <!--------Your search--------->
                        <div class="client_stories_your_search">
                            <h6 class="mb-1">Your search</h6>

                            {{-- <input type="hidden" name="customCategory" value="{{ $cat->slug }}"> --}}
                            @if (!empty($_GET['customCategory']))
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    {{ $cat->title }}
                                </div>
                            @endif
                            @if (!empty($_GET['customBrand']))
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    {{ $cat->title }}
                                </div>
                            @endif

                            @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleASC')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Ascending By Name
                                </div>
                            @endif
                            @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceASC')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Ascending By Price
                                </div>
                            @endif
                            @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleDESC')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Descending By Name
                                </div>
                            @endif
                            @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceDESC')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Descending By Price
                                </div>
                            @endif


                            @if (!empty($_GET['show']) && $_GET['show'] == '5')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Showing 5 Products
                                </div>
                            @endif
                            @if (!empty($_GET['show']) && $_GET['show'] == '10')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Showing 5 Products
                                </div>
                            @endif
                            @if (!empty($_GET['show']) && $_GET['show'] == '20')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Showing 5 Products
                                </div>
                            @endif
                            @if (!empty($_GET['show']) && $_GET['show'] == '40')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Showing 5 Products
                                </div>
                            @endif


                        </div>
                        @if (!empty($_GET['category']))
                            @php
                                $filterCats = explode(',', $_GET['category']);
                            @endphp

                            @if (count($filterCats) > 1)
                                @foreach ($filterCats as $filterCat)
                                    <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                                        {{ App\Models\Admin\SubCategory::where('slug', $filterCat)->value('title') }}
                                    </div>
                                @endforeach
                            @endif
                            @if (count($filterCats) == 1)
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                                    {{ App\Models\Admin\SubCategory::where('slug', $filterCats)->value('title') }}
                                </div>
                            @endif
                        @endif

                        @if (!empty($_GET['subcategory']))
                            @php
                                $filtersubCats = explode(',', $_GET['subcategory']);
                            @endphp

                            @if (count($filtersubCats) > 1)
                                @foreach ($filtersubCats as $filtersubCat)
                                    <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                                        {{ App\Models\Admin\SubSubCategory::where('slug', $filtersubCat)->value('title') }}
                                    </div>
                                @endforeach
                            @endif
                            @if (count($filtersubCats) == 1)
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                                    {{ App\Models\Admin\SubSubCategory::where('slug', $filtersubCats)->value('title') }}
                                </div>
                            @endif
                        @endif


                        @if (!empty($_GET['brand']))
                            @php
                                $filterBrands = explode(',', $_GET['brand']);
                            @endphp
                            @if (count($filterBrands) > 1)
                                @foreach ($filterBrands as $filterBrand)
                                    <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                                        {{ App\Models\Admin\Brand::where('slug', $filterBrand)->value('title') }}
                                    </div>
                                @endforeach
                            @elseif (count($filterBrands) == 1)
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                                    {{ App\Models\Admin\Brand::where('slug', $filterBrands)->value('title') }}
                                </div>
                            @else
                            @endif
                        @endif
                        <hr class="m-1">

                        <!-------Content Results---------->
                        <div class="client_stories_narrow_content">
                            <h6 class="mb-2">Narrow results</h6>
                            @if (!empty($_GET['keyword']))
                                <input class="p-1" type="text" name="keyword" value="{{ $_GET['keyword'] }}"
                                    onchange="this.form.submit()">
                            @else
                                <input class="p-1" type="text" name="keyword" placeholder="BY KEYWORD..."
                                    onchange="this.form.submit()">
                            @endif

                        </div>
                        <hr>

                        <!-------Apply Filters Button---------->

                    </div>

                    <hr class="m-1">

                    <!-------List Price---------->
                    <div class="product_list_price">
                        <h6 class="mb-4">List Price</h6>
                        <div id="slider-range" class="price-filter-range text-success" data-min="0" data-max="20000"
                            style="margin-bottom:0.7rem; "></div>
                        <input type="hidden" id="price_range" name="price_range" value="">
                        @if (!empty($_GET['price']))
                            <input class="form-control mb-2" type="text" id="amount"
                                value="USD $ {{ $_GET['price'] }}" readonly>
                        @else
                            <input class="form-control mb-2" type="text" id="amount" value="USD $0 - $20000" readonly>
                        @endif
                    </div>

                    <div id="sticker">
                        <div class="product_apply_filter_btn d-flex">
                            <button class="common_button2 p-2" type="submit">Apply Filters</button>
                        </div>
                        <hr>

                        <!--------Manufacturers--------->
                        <div class="client_stories_filter_category">
                            <h6 onclick="myFunction()" class="mb-4"><i class="fa-solid fa-caret-down"></i>Sub Categories
                                for {{ $cat->title }}
                            </h6>


                            @if (!empty($_GET['category']))
                                @php
                                    $filterCat = explode(',', $_GET['category']);
                                @endphp
                            @endif
                            <div id="filter_category">
                                @foreach ($categories as $category)
                                    @php
                                        $products_cat = App\Models\Admin\Product::where('cat_id', $category->id)->get();
                                    @endphp
                                    <div class="form-check">
                                        <input class="form-check-input custom" name="category[]" type="checkbox"
                                            id="exampleCheckbox{{ $category->id }}" value="{{ $category->slug }}"
                                            @if (!empty($filterCat) && in_array($category->slug, $filterCat)) checked @endif onchange="this.form.submit()">
                                        <span class="ml-2" for="exampleCheckbox{{ $category->id }}">
                                            {{ $category->title }}</span>
                                        <span class="float-right">({{ count($products_cat) }})</span>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                        <hr>

                        <div class="client_stories_filter_category">
                            <h6 onclick="myFunction()" class="mb-4"><i class="fa-solid fa-caret-down"></i>Sub Sub
                                Categories for {{ $cat->title }}
                            </h6>


                            @if (!empty($_GET['subcategory']))
                                @php
                                    $filtersubCat = explode(',', $_GET['subcategory']);
                                @endphp
                            @endif
                            <div id="filter_category">
                                @foreach ($subcategories as $subcategory)
                                    @php
                                        $products_subcat = App\Models\Admin\Product::where('cat_id', $subcategory->id)->get();
                                    @endphp
                                    <div class="form-check">
                                        <input class="form-check-input custom" name="subcategory[]" type="checkbox"
                                            id="exampleCheckbox{{ $subcategory->id }}" value="{{ $subcategory->slug }}"
                                            @if (!empty($filtersubCat) && in_array($subcategory->slug, $filtersubCat)) checked @endif
                                            onchange="this.form.submit()">
                                        <span class="ml-2" for="exampleCheckbox{{ $subcategory->id }}">
                                            {{ $subcategory->title }}</span>
                                        <span class="float-right">({{ count($products_subcat) }})</span>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                        <hr>

                        <!--------System / Type--------->
                        <div class="client_stories_filter_category">
                            <h6 onclick="showhide()" class="mb-4"><i class="fa-solid fa-caret-down"></i>Manufacturers
                            </h6>

                            <div id="newpost">
                                @if (!empty($_GET['brand']))
                                    @php
                                        $filterBrand = explode(',', $_GET['brand']);
                                    @endphp
                                @endif
                                @foreach ($brands as $brand)
                                    @php
                                        $products_brand = App\Models\Admin\Product::where('brand_id', $brand->id)->get();
                                    @endphp
                                    <div class="form-check">
                                        <input class="form-check-input custom" type="checkbox" name="brand[]"
                                            id="exampleBrand{{ $brand->id }}" value="{{ $brand->slug }}"
                                            @if (!empty($filterBrand) && in_array($brand->slug, $filterBrand)) checked @endif
                                            onchange="this.form.submit()">
                                        <span class="ml-2"
                                            for="exampleBrand{{ $brand->id }}">{{ $brand->title }}</span>
                                        <span class="float-right">({{ count($products_brand) }})</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <hr>






                        <!--------End--------->

                    </div>
                </div>
                <!----------conternt client stories --------->

                <div class="col-lg-9 col-sm-12">
                    <div class="row">
                        @if ($products)

                            @foreach ($products as $product)

                            <div class="product_content_item row">
                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <img src="{{ asset($product->thumbnail) }}" alt="{{ $product->name }}" width="150px" height="113px">
                                </div>

                                <div class="col-lg-9 col-md-8 col-sm-12 product_content_item">
                                    <a href="{{ route('product.details',['id'=> $product->slug]) }}">
                                        <h3>{{$product->name}}
                                        </h3>
                                    </a>
                                    <!--Add To Basket-->
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-12">
                                            <p>NgenIt Part #: {{$product->sku_code}}</p>
                                            <p>Mfr Part #: {{$product->mf_code}}</p>

                                            <div class="row">
                                                <div class="col-lg-7 col-md-12">
                                                    <a href="#" class="">Add to My Compare List</a>
                                                </div>
                                                <div class="col-lg-5 col-md-12">
                                                    <a href="#" class="">Compare Similar</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-sm-12">
                                            @if (!empty($product->price))
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h4>List Price</h4>
                                                        <h3>USD $  @if (!empty($product->discount))
                                                            <span class="price_currency_value"
                                                                style="text-decoration: line-through; color:red">
                                                                {{ $product->price }}
                                                            <span class="price_currency_value" style="color: black">
                                                                {{ $product->discount }}</span>
                                                        @else
                                                            <span class="price_currency_value">$ {{ $product->price }}</span>
                                                        @endif</h3>
                                                        <h6>@if (($product->stock) > 0)
                                                            <span class="badge rounded-pill badge-success" style="font-size:17px">{{ $product->stock }} in stock</span>

                                                                @else
                                                                <span class="badge rounded-pill badge-danger" style="font-size:17px">Out of Stock</span>
                                                            @endif</h6>
                                                        <!------------>

                                                    </div>
                                                    <div class="col-6">
                                                        {{-- <div class="quantity d-flex justify-content-start mr-2">
                                                            <input type="number" min="1" max="9" step="1" value="1">
                                                        </div> --}}
                                                        <div class="product_add_bascket_btn d-flex justify-content-end">
                                                            @php
                                                            $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
                                                        @endphp
                                                        @if ($cart->where('id', $product->id)->count())
                                                            <a href="javascript:void(0);" class="common_button2"> Already in Cart</a>
                                                        @else
                                                            <form action="{{ route('add.cart') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="product_id" id="product_id"
                                                                    value="{{ $product->id }}">
                                                                <input type="hidden" name="name" id="name"
                                                                    value="{{ $product->name }}">
                                                                <input type="hidden" name="qty" id="qty" value="1">
                                                                {{-- <!-- button -->onclick="addToCart()" --}}
                                                                {{-- <a href="javascript:void(0);" class="product_button"  id="addToCart">Add to Basket</a> --}}
                                                                <button type="submit" class="product_button">Add to Basket</button>
                                                            </form>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                            <a class="common_button" href="{{route('contact')}}">Call Ngen It for price</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                                <p>{!! $product->short_desc !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div><br><hr><br><br>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!--------item------->





            </div>
            </div>


            <!------------------Pagination------------------->
            <div class="d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{ $products->links() }}
                    </ul>

                </nav>
            </div>
    </section>
    </form>
    <br>
    <!-------- End--------->



@endsection
@section('scripts')
    <script>
        $(document).ready(function() {


        });
    </script>
@endsection
