@extends('frontend.master')
@section('content')

<!--=======// Header Title //=======-->
<section class="tech_deals_header" style="margin-top:100px">
    <div class="container">
        <h1>Technology deals</h1>
        <h3>Browse and Explore exclusive tech deals from Ngen It. We offer deep discounts on electronics, devices and softwares.</h3>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-2"></div>
            <!--BUTTON START-->
            <div class="col-lg-3 col-sm-12 d-flex justify-content-center mb-4">
                <a class="search_all_tech_deals_btn" href="#tech_deal">Explore tech deals</a>
            </div>
            <div class="col-lg-3 col-sm-12 d-flex justify-content-center mb-4">
                <a class="shop_refurbished_btn " href="{{route('refurbished')}}">Shop refurbished</a>
            </div>
            <!--BUTTON END-->
            <div class="col-lg-2"></div>
            </span>

        </div>
    </div>

</section>
<!---------End-------->

<!--=======// Featured deals //=======-->
<section class="container">
    <div class="tech_deals_section_content" id="tech_deal">
        <!-- section title -->
        <div class="tech_deals_featured_item_title">
            <h3>Featured deals</h3>
            {{-- <p>Discover our latest discounts and limited-time offers on the technology brands and devices your business trusts.</p> --}}
        </div>
        <!-- wrapper -->
        <div class="row">
            <!-- product_item -->

            @foreach ($products as $item)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product_item">
                    <!-- image -->
                    <div class="product_item_thumbnail">
                        <img src="{{ asset($item->thumbnail)}}" alt="{{$item->name}}" width="150px" height="113px">
                    </div>

                    <!-- product content -->
                    <div class="product_item_content">
                        <a href="{{ route('product.details', $item->slug) }}" class="product_item_content_name" style="height: 3rem;">{{$item->name}}</a>

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
                        @php
                            $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
                        @endphp
                        @if ($cart->where('id' , $item->id )->count())
                        <a href="javascript:void(0);" class="common_button2" > Already in Cart</a>
                        @else
                        <form action="{{  route('add.cart') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" id="product_id" value="{{ $item->id }}">
                            <input type="hidden" name="name" id="name" value="{{ $item->name }}">
                            <input type="hidden" name="qty" id="qty" value="1">
                            {{-- <!-- button -->onclick="addToCart()" --}}
                            {{-- <a href="javascript:void(0);" class="product_button"  id="addToCart">Add to Basket</a> --}}
                             <button type="submit" class="product_button"  >Add to Basket</button>
                         </form>
                        @endif

                    </div>

                </div>

                <hr>
            </div>
            @endforeach

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
</section><br><hr>
<!---------End-------->

<!--=======// Trust refurbished //=======-->
{{-- <section class="container">
    <div class="d-flex justify-content-center" id="refurbished">
        <img src="images/tech_deals/featured_partners/microsoft-authorized-refurbisher.png" alt="">
    </div>
    <div class="trust_refurbished_title">
        <h2>Trust Insight for refurbished products.</h2>
        <p>We offer a range of certified refurbished hardware that <a href="client_stories_blog_insert.html">meets your business needs at a lower price point.</a>  From desktops to notebooks to monitors, our refurbished products deliver the performance, support and customization you depend on. And, as a Microsoft Authorized Refurbisher, we adhere to strict requirements that ensure the quality of our refurbished Microsoft hardware.</p>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <button class="common_button">Learn more about refurbished products</button>
    </div>
</section> --}}
<!---------End-------->

<!--=======// shop by brand //=======-->
<section class="container">
    <div class="tech_deals_section_content">
        <!-- section title -->
        <div class="tech_deals_featured_item_title">
            <h3 class="tech_deals_title_topline"></h3>
            <h3>Featured Deals By Brand</h3>
        </div>
        <div class="row">
            <!-- Logo -->

            @foreach ($brands as $item)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- image -->
                    <div class="tech_deals_thumbnail">
                        <a href="{{route('brand.html',$item->slug)}}">
                            <img src="{{asset('storage/requestImg/'.$item->image)}}" alt="{{$item->title}}">
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!---------End-------->



<!--=======// Shop by category //=======-->
<section class="container">
    <!--Title-->
    <div class="tech_deals_featured_item_title">
        <h3 class="tech_deals_title_topline"></h3>
        <h3>Shop by category</h3>
    </div>
    <!--Product Category-->
    <div class="row">
        <!--Category item-->

        @foreach ($categories as $item)
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 p-4">
                <img class="img-fluid mb-4" src="{{asset('storage/requestImg/'.$item->image)}}" alt="{{$item->title}}">
                <div class="common_product_item_text">
                    <a href="{{route('category.html',$item->slug)}}">{{$item->title}}</a>
                </div>
            </div>
        @endforeach




    </div>

</section>
<!---------End-------->

<!--=======// Featured refurbished //=======-->

<!---------End-------->

<!--=======// Purchased warranty //=======-->
<section class="purchased_warranty">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-sm-10">
                <h2>Ngen It offers exclusive deals and refurbished products.</h2>
            </div>
            <div class="col-lg-2 col-sm-2">
                <div class="d-flex justify-content-end">
                    <img class="img-fluid " src="images/tech_deals/check-mark.png" width="100px" alt="">
                </div>

            </div>
        </div>
    </div>
</section>
<!---------End-------->

<!--=======// Recommended technology //=======-->
<section class="container">
    <div class="popular_product_section_content">
        <!-- section title -->
        <div class="tech_deals_featured_item_title">
            <h3>Recommended Refurbished Products for you</h3>
        </div>
        <!-- wrapper -->
        <div class="populer_product_slider">
            <!-- product_item -->
            @foreach ($refurbished_products as $item)
            <div class="product_item">
                <!-- image -->
                <div class="product_item_thumbnail">
                    <img src="{{ asset($item->thumbnail)}}" alt="{{$item->name}}" width="150px" height="113px">
                </div>

                <!-- product content -->
                <div class="product_item_content">
                    <a href="{{ route('product.details', $item->slug) }}" class="product_item_content_name" style="height: 3rem;">{{$item->name}}</a>

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
                    @php
                        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
                    @endphp
                    @if ($cart->where('id' , $item->id )->count())
                    <a href="javascript:void(0);" class="common_button2" > Already in Cart</a>
                    @else
                    <form action="{{  route('add.cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" id="product_id" value="{{ $item->id }}">
                        <input type="hidden" name="name" id="name" value="{{ $item->name }}">
                        <input type="hidden" name="qty" id="qty" value="1">
                        {{-- <!-- button -->onclick="addToCart()" --}}
                        {{-- <a href="javascript:void(0);" class="product_button"  id="addToCart">Add to Basket</a> --}}
                         <button type="submit" class="product_button"  >Add to Basket</button>
                     </form>
                    @endif

                </div>

            </div>
            @endforeach
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4"></div>
            <!--BUTTON START-->
            <div class="col-lg-3 col-sm-12 d-flex justify-content-center mb-4">
                <a class="search_all_tech_deals_btn" href="{{route('tech.deals')}}">Explore All Refurbished Products</a>
            </div>

            <!--BUTTON END-->
            <div class="col-lg-4"></div>
            </span>

        </div>
    </div>
</section><br><br><hr>
<!---------End-------->




@endsection
