@extends('frontend.master')
@section('content')

    <!-- banner single page start -->
    <section class="banner_single_page"
        style="background-image:url('{{ asset('storage/'.$category->image) }}');
        margin-top:100px; background-position: left center;background-repeat: no-repeat; background-size: cover; height:260px">

        <div class="container">
            <div class="single_banner_content">
                <!-- image -->
                <div class="single_banner_image">
                    <img src="" alt="">
                </div>
                <!-- heading -->
                <h1 class="single_banner_heading text-center text-white">{{ $category->title }}</h1>
                {{-- <p class="single_banner_text">{{ $data->h2 }}</p> --}}
                <div class="single_buttton_wrapper text-center mb-2">
                    <a href="{{ route('custom.product',$category->slug) }}" class="common_button2">Browse all {{ $category->title  }}</a>

                </div>
            </div>
        </div>
    </section>

<!---Products Section-->
    <section class="container">
        <div class="tech_deals_section_content" id="tech_deal">
            <!-- section title -->
            <div class="tech_deals_featured_item_title">
                <h3>Featured Products for {{ $category->title }}</h3>
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
<!---Products Section-->


    <!-- network cable -->
    <section class="network_cable section_padding">
        <div class="container">

            <div class="section_title">
                <h3 class="title_top_heading">Display Sub Categories for {{ $category->title }}</h3>
            </div>

            <div class="row">
                <!-- item -->
                @foreach ($sub_cats as $key => $item)

                <div class="col-lg-3 col-md-3 col-sm-6 p-4">
                    <img class="img-fluid mb-4" src="{{ asset('storage/requestImg/' . $item->image) }}" alt="{{$item->title}}">
                    <div class="common_product_item_text">
                        <a href="{{ route('category.html',$item->slug) }}">Shop {{$item->title}}</a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="category_all_btn text-center">
                <a href="{{ route('custom.product',$category->slug) }}" class="product_button">Shop all {{ $category->title  }}</a>
            </div>

        </div>
    </section>

    <!--======// Network cables //=====-->
    <section class="section_wp2">
        <div class="container">
            <!--Title-->
            <div class="common_product_item_title">

            </div>
            <!--Product brands-->
            <div class="row">
                <!--Category item-->

                @foreach ($sub_sub_cats as $key => $item)
                            @php
                                $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                            @endphp
                <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                    <img class="img-fluid mb-4" src="{{ asset('storage/requestImg/' . $item->image) }}" alt="{{$item->title}}">
                    <div class="common_product_item_text">
                        <a href="{{ route('category.html',$item->slug) }}">{{$item->title}}</a>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="d-flex justify-content-center mt-4">
                {{-- <a href="product_filters.html" class="common_button">Shop all cables</a> --}}
            </div>
        </div>
    </section>
    <!--------- End --------->

    <!--======// Adapters //=====-->

    <!--------- End --------->

    <!--======// By brand //=====-->
    <section class="section_wp2">
        <div class="container">
            <!--Title-->
            <div class="common_product_item_title">
                <h3>Related Brands for {{ $category->title }}</h3>

            </div>
            <!--Product brands-->
            <div class="row">
                <!--Category item-->
                @foreach ($brands as $key => $item)
                <div class="col-lg-3 col-md-3 col-sm-6 p-4">
                    <img class="img-fluid mb-4" src="{{ asset('storage/requestImg/' . $item->image) }}" alt="{{$item->title}}">
                    <div class="common_product_item_text">
                        <a href="{{ (!empty($item->slug)) ? route('custom.product', $item->slug):route('all.brand') }}">Shop {{$item->title}}</a>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="{{route('all.brand')}}" class="common_button">Shop all brands</a>
            </div>
        </div>
    </section>
    <!--------- End --------->





@endsection
