@extends('frontend.master')

@section('content')

<section class="cart_page_content p-4 px-5 py-5" style="margin-top:90px;">
    <!--====// Cart header //====-->
    <div class="cart_header">
        <div class="cart_header_content text-center">
            <!-- wrapper -->
            <div class="justify-content-between" style="display: inline-flex;">
                <!-- title -->
                <div class="cart_header_title text-center"><h2 class="text-center" style="color: #ae0a46">My Cart</h2></div>
                <div class="cart_header_right_inner text-right">
                    {{-- <ul>
                        <li><a href="" onclick="print()"><span><i class="fa-solid fa-print"></i> </span><span>Print</span></a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>

    <!--======// Card body //=======-->
    <div class="cart_body_wrapper">
        <!--====// Left //====-->
        <div class="cart_body_left">

            <!----// Cart Details //---->
            <div class="your_cart">
                <!-- header -->
                <div class="your_cart_header pl-1">
                    <div class="your_cart_title">Your cart</div>
                    <div class="your_cart_title text-center" style="width: 16rem">Name</div>
                    <div class="your_cart_title">Unit Price</div>
                    <div class="your_cart_title">Quantity</div>
                    <div class="your_cart_title">Total</div>
                    <div class="your_cart_empty">
                        <form method="get" action="{{route('cart.destroy')}}">
                            
                        <a href="javascript:void(0);" class="rmvBtn">Empty cart</a></div>
                    </form>
                </div>

                <!-- your cart item-->
                @foreach ($cart_details as $item)
                    @php
                        $slug = App\Models\Admin\Product::where('id', $item->id)->value('slug');
                    @endphp

                    <div class="your_cart_item">
                        <!-- wrapper -->
                        <div class="your_cart_item_wrapper">
                            <!-- image -->
                            <div class="cart_item_image">
                                <img src="{{$item->options->has('image') ? $item->options->image : ''}}" alt="{{ $item->name }}" width="75px" height="75px">
                            </div>

                            <!-- content -->
                            <div class="cart_item_content">
                                <!-- utitlity -->
                                <div class="cart_item_content_utitlity">
                                    <div class="cart_content_details">
                                        <!-- name -->
                                        <a href="{{ route('product.details', $slug) }}" class="cart_produt_name" style="width: 15rem">{{ $item->name }}</a>
                                    </div>

                                    <!-- cart product price -->
                                    <div class="cart_product_price"> <small>USD</small>
                                        <span class="unitCart_price">$ {{ number_format($item->price, 2) }}</span>
                                        </div>

                                    <!-- cart counter-->
                                    <div class="card_product_counter">
                                        <form class="myForm">


                                            <input type="hidden" id="price" name="price" value="{{ $item->price }}">
                                                <div class="pro-qty mb-2" style="width: 5.5rem">
                                                    <div class="counter" style="width: 2rem">
                                                        <input name="rowID" type="hidden" id="rowID" value="{{ $item->rowId }}">
                                                        <span class="down" id="{{ $item->rowId }}" onClick='decreaseCount(event, this, this.id)'>-</span>
                                                        <input type="text" name="qty" value="{{ $item->qty }}" style="width: 1.5rem">
                                                        <span class="up" id="{{ $item->rowId }}" onClick='increaseCount(event, this, this.id)'>+</span>
                                                    </div>
                                                </div>
                                                {{-- <a href="javascript:void(0);" class="common_button2 p-1 mt-1" id="update">Update</a> --}}
                                        </form>
                                    </div>

                                    <div class="cart_product_price" id="tp"> <small>USD</small> $ {{ $item->price * $item->qty}}  </div>

                                </div>
                                <!-- delete -->
                                <div class="cart_item_delete">
                                    <a class="text-danger removeCart mx-2" href="{{route('cart.remove',$item->rowId)}}"><span ><i class="fa-solid fa-trash-can"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <!-------End-------->

            <!----// Popular Product Begin //---->
            <section class="popular_product_section section_padding">
                <!-- container -->
                <div class="container">
                    <div class="popular_product_section_content">
                        <!-- section title -->
                        <div class="section_title">
                            <h3 class="title_top_heading">Popular Product</h3>
                        </div>
                        <!-- wrapper -->
                        <div class="populer_product_slider">

                            <!-- product_item -->

                            @foreach ($products as $item)
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

                                        <!-- button -->
                                    @php
                                        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
                                    @endphp
                                    @if ($cart->where('id' , $item->id )->count())
                                    <a href="javascript:void(0);" class="common_button2 p-0 py-2 px-1 pb-2" style="height: 2.5rem"> Already in Cart</a>
                                    @else
                                    <form action="{{  route('add.cart') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id" value="{{ $item->id }}">
                                        <input type="hidden" name="name" id="name" value="{{ $item->name }}">
                                        <input type="hidden" name="qty" id="qty" value="1">
                                        {{-- <!-- button -->onclick="addToCart()" --}}
                                        {{-- <a href="javascript:void(0);" class="product_button"  id="addToCart">Add to Basket</a> --}}
                                        <button type="submit" class="product_button">Add to Basket</button>
                                    </form>
                                    @endif
                                    </div>

                                </div>
                            @endforeach
                            <!-- product item -->


                        </div>
                    </div>
                </div>
            </section>
            <!-------End-------->

        </div>
        <!--====// Right //====-->
        <div class="cart_sidebar_sumury">
            <div class="cart_summury_title">Summary</div>

            <div class="summury_count">
                <ul>
                    <li class=""><span>Subtotal</span> <span id="totalPrice1"><small>USD</small>{{Cart::subtotal()}} $</span></li>
                    {{-- <li class=""><span>*Estimated Shipping</span> <span><small>USD</small>100$</span></li> --}}
                    <li class=""><span>Tax estimate</span> <span><small>USD</small>0$</span></li>
                </ul>

                <p class="summury_count_total"> <span>Total</span> <span id="totalPrice2"><small>USD</small> {{ Cart::total() }} $</span></p>

                <!-- button -->
                <input id='checkout' type="hidden" value="{{ Cart::total() }}">
                <div class="d-flex justify-content-center">
                    <a href="{{route('checkout')}}" id="work" class="common_button2">Checkout</a>
                </div>

            </div>
        </div>
    </div>
</section>





@endsection


@section('scripts')
    {{-- <script type="text/javascript">
        // $(".update-cart").change(function() {
        //     alert("is it cart");
        //     // var ele = $(this);
        //     // console.log(ele);
        //     // $.ajax({
        //     //     url: '{{ route('update.cart') }}',
        //     //     method: "patch",
        //     //     data: {
        //     //         _token: '{{ csrf_token() }}',
        //     //         id: ele.parents("tr").attr("data-id"),
        //     //         quantity: ele.parents("tr").find(".quantity").val()
        //     //     },
        //     //     success: function(response) {
        //     //         window.location.reload();
        //     //     }
        //     // });
        // });

        $("#InputId").on('change', function() {
            alert('Handler for "change" called.');
        });
    </script> --}}



    <script>
        if ($('#checkout').val() == 0) {
            $('#work').hide();
        }
    </script>

    <script>
        var buttonAdd = document.querySelectorAll('.cart_input')
        var cartUpdateBtn = document.querySelectorAll('.update_button')
        cartUpdateBtn.forEach(element => {
            element.style.cssText = 'all:unset;display:block;cursor:pointer'
        });
    </script>


<script>
    //----- Quantity
        function increaseCount(a, b, c) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
            let form = $(this).closest('.myForm');
            // let rowId = form.find("input[name=rowID]").val();
            var rowId = c;
            //alert(b);
            $.ajax({
                type: 'GET',
                url: "/cart-increment/"+rowId,
                dataType: 'json',
                success: function(response) {
                    window.location.reload();
                }
        });


    }


 // ---------- END CART INCREMENT -----///



 // -------- CART Decrement  --------//


        function decreaseCount(a, b, c) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value;
            }

            var form = $(this).closest('.myForm');
            // var rowId = form.find("input[name=rowID]").val();
            var rowId = c;

            $.ajax({
            type:'GET',
            url: "/cart-decrement/"+rowId,
            dataType:'json',
            success:function(response){
                window.location.reload();
            }
        });
        }



// Cart Remove End



</script>





@endsection
