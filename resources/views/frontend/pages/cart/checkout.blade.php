@extends('frontend.master')
@section('content')

    <style>
        .btn-design {
            color: #fff;
            background-color: #ae0a46;
            border-color: #ae0a46;
        }

        .check_form_inner a input {
            color: #0d6efd !important;
            text-decoration: underline !important;
            cursor: pointer;
            text-align: right;
        }

        .border-secondary {
            border-color: #bfc7cf !important;
        }
    </style>
    <!-- header section -->

    <!-- header section End -->



    <div class="cart_page px-3" style="margin-top: 100px;">
        <!-- cart page content -->
        <div class="cart_page_content">
            <!-- cart header -->
            <div class="cart_header">
                <div class="cart_header_content text-center">
                    <!-- wrapper -->
                    <div class="cart_header_wrapper" style="display: inline-flex;">
                        <!-- title -->
                        <div class="cart_header_title"><h2 class="text-center" style="color: #ae0a46">Checkout Page</h2></div>
                        <!-- right -->
                        <div class="cart_header_right">
                            <div class="cart_header_right_inner">
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart header end-->
            <!-- card body -->
            <div class="cart_body_wrapper">
                <!-- left -->
                <div class="cart_body_left">
                    <div class="your_cart">
                        <!-- header -->
                        <div class="your_cart_header">
                            <div class="your_cart_title">Your information</div>
                        </div>

            <form action="{{ route('checkout.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- check out form -->
                            <div class="checkout_form">
                                <div class="checkout_form_wrapper">
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="name">Name <sup>*</sup> </label>
                                        <input type="text" name="name" value="{{$user->name}}" class="check_form"
                                            id="name" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="Phone">Phone <sup>*</sup> </label>
                                        <input type="tel" name="phone" value="{{$user->phone}}"
                                            class="check_form" id="Phone" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="Email">Email <sup>*</sup> </label>
                                        <input type="email" name="email" class="check_form" value="{{$user->email}}"
                                            id="Email" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="address">Address <sup>*</sup> </label>
                                        <input type="text" name="address" class="check_form"
                                            value="{{$user->address}}" id="address" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="city">City <sup>*</sup> </label>
                                        <input type="text" name="city" class="check_form"
                                            value="{{$user->city}}" id="city" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="state">State <sup>*</sup> </label>
                                        <input type="text" name="state" class="check_form"
                                            value="{{$user->state}}" id="state" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="zip">Zip Code <sup>*</sup> </label>
                                        <input type="text" name="postal" class="check_form"
                                            value="{{$user->postal}}" id="zip" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="country">Country <sup>*</sup> </label>
                                        <input type="text" name="country" class="check_form"
                                            value="{{$user->country}}" id="country" required>
                                    </div>

                                </div>
                                <div class="check_form_inner pt-1">
                                    <div class="check_form_inner">
                                        <label for="notes">Additional Notes  </label>
                                        <textarea class="check_form" id="notes" name="notes" cols="60" rows="5" placeholder="Write Additional Notes Here...." style="height: 6rem"></textarea>

                                    </div>
                                </div>

                                <!-- form item -->
                                <div class="check_form_inner pt-1">
                                    <label for="message">Select Your Payment Method:</label>
                                    <a href="javascript:void(0);" >
                                        <img src="{{ asset('frontend/images/bank-removebg-preview.png') }}"
                                            width="120px" style="cursor: pointer; padding-right:20px" alt=""
                                            id="bankPay">
                                    </a>

                                    <input type="radio" name="payment_method" value="paypal">
                                    <img src="{{ asset('frontend/images/paypal-removebg-preview.png') }}"
                                    width="120px" style="cursor: pointer; padding-right:20px" alt="">

                                    <input type="radio" name="payment_method" value="card">
                                    <img src="{{ asset('frontend/images/stripe.png') }}" width="60px"
                                    style="cursor: pointer; background:transparent" alt="">

                                    <input type="radio" id="bkash" name="payment_method" value="cash" style="margin-left: 10px">
                                    <img src="{{ asset('frontend/images/dollar.png') }}" width="80px" style="cursor: pointer;" alt="">


                                </div>
                            </div>
                    </div>

                    <div id="bankPayment" class="d-none">

                        <div class="card mt-2 border border-secondary">
                            <div class="card-title pt-1 pl-2 border border-bottom border-secondary">
                                Payment Information (Bank Account ( <span class="text-warning" data-toggle="modal" data-target="#bankModal"><i class="fa fa-info-circle"></i></span> ))
                            </div>
                            <div class="card-body col-12">
                                <div class="row">
                                    <!-- form item -->
                                    <div class="check_form_inner col-6">
                                        <label for="Email">Work Order <sup>*</sup> </label>
                                        <input type="file" name="work_order" class="check_form" id="workorder">
                                    </div>
                                    <br>
                                    <!-- form item -->
                                    <div class="check_form_inner col-6">
                                        <label for="Email">Payment Slip <sup>*</sup> </label>
                                        <input type="file" name="payment_slip" class="check_form" id="payment">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- <div id="bkashExpand" class="d-none">

                        <div class="card mt-2 border border-secondary">
                            <div class="card-title pt-1 pl-2 border border-bottom border-secondary">
                                Payment Information (Bank Account ( <span class="text-warning" data-toggle="modal" data-target="#bankModal"><i class="fa fa-info-circle"></i></span> ))
                            </div>
                            <div class="card-body col-12">
                                <div class="row">
                                    <!-- form item -->
                                    <div class="check_form_inner col-6">
                                        <label for="Email">Work Order <sup>*</sup> </label>
                                        <input type="file" name="work_order" class="check_form" id="workorder">
                                    </div>
                                    <br>
                                    <!-- form item -->
                                    <div class="check_form_inner col-6">
                                        <label for="Email">Payment Slip <sup>*</sup> </label>
                                        <input type="file" name="payment_slip" class="check_form" id="payment">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="nagadExpand" class="d-none">

                        <div class="card mt-2 border border-secondary">
                            <div class="card-title pt-1 pl-2 border border-bottom border-secondary">
                                Payment Information (Bank Account ( <span class="text-warning" data-toggle="modal" data-target="#bankModal"><i class="fa fa-info-circle"></i></span> ))
                            </div>
                            <div class="card-body col-12">
                                <div class="row">
                                    <!-- form item -->
                                    <div class="check_form_inner col-6">
                                        <label for="Email">Work Order <sup>*</sup> </label>
                                        <input type="file" name="work_order" class="check_form" id="workorder">
                                    </div>
                                    <br>
                                    <!-- form item -->
                                    <div class="check_form_inner col-6">
                                        <label for="Email">Payment Slip <sup>*</sup> </label>
                                        <input type="file" name="payment_slip" class="check_form" id="payment">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="rocketExpand" class="d-none">

                        <div class="card mt-2 border border-secondary">
                            <div class="card-title pt-1 pl-2 border border-bottom border-secondary">
                                Payment Information (Bank Account ( <span class="text-warning" data-toggle="modal" data-target="#bankModal"><i class="fa fa-info-circle"></i></span> ))
                            </div>
                            <div class="card-body col-12">
                                <div class="row">
                                    <!-- form item -->
                                    <div class="check_form_inner col-6">
                                        <label for="Email">Work Order <sup>*</sup> </label>
                                        <input type="file" name="work_order" class="check_form" id="workorder">
                                    </div>
                                    <br>
                                    <!-- form item -->
                                    <div class="check_form_inner col-6">
                                        <label for="Email">Payment Slip <sup>*</sup> </label>
                                        <input type="file" name="payment_slip" class="check_form" id="payment">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> --}}

                </div>
                <!-- summury -->
                <div class="cart_sidebar_sumury">
                    <div class="cart_summury_title">Summary</div>
                    <div class="table-responsive order_table checkout">
                        <table class="table no-border">
                            <tbody>
                            @foreach($carts as $item)
                                    <tr>
                                        <td class="image product-thumbnail"><img src="{{$item->options->has('image') ? $item->options->image : ''}} " alt="#" style="width:50px; height: 50px;" ></td>
                                        <td>
                                            @php
                                            $slug = App\Models\Admin\Product::where('id', $item->id)->value('slug');
                                        @endphp
                                            <p class="w-160 mb-5"><a href="{{ route('product.details',$slug) }}" class="text-heading">{{ $item->name }}</a></p></span>
                                            <div class="product-rate-cover">

                                            {{-- <strong>Color :{{ $item->options->color }} </strong>
                                            <strong>Size : {{ $item->options->size }}</strong> --}}

                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="text-muted pl-20 pr-20">x {{ $item->qty }}</h6>
                                        </td>
                                        <td>
                                            <h4 class="text-brand">${{ $item->price }}</h4>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="summury_count">
                        <ul>
                            <li class=""><span>Subtotal</span>
                                <span><small>USD</small>$ {{number_format($cartsubTotal , 2)}}</span>
                            </li>
                            {{-- <li class=""><span>*Estimated Shipping</span>
                                <span><small>USD</small>${{ number_format(0, 2) }}</span>
                            </li> --}}
                            <li class=""><span>*Tax estimate</span>
                                <span><small>USD</small>${{ number_format(0, 2) }}</span>
                            </li>
                        </ul>

                        <p class="summury_count_total">
                            <span>Total :</span>
                            <span><small>USD</small>
                                $ {{number_format((int)$cartTotal , 2)}}</span>
                        </p>
                        <!-- Button trigger modal -->
                        <div class="submit_button text-center">
                            <input class="common_button2" type="submit" value="Place Your order">
                        </div>
            </form>

                        <!-- Modal -->
                        <div class="modal fade" id="bankModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Payment Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                    </div>
                                    <div class="modal-body">
                                        <strong>Bank Name:</strong>
                                        <p> Dutch Bangla Bank</p><br>
                                        <strong>Account Title:</strong>
                                        <p> NGen IT</p><br>
                                        <strong>Account Number:</strong>
                                        <p> 234***********</p><br>
                                        <strong>Branch Title:</strong>
                                        <p>West Panthapath</p><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card body end-->
        </div>
        <!-- cart page content -->
    </div>




@endsection

@section('scripts')
<script>
    $(document).ready(function () {

    $("#bankPay").click(function(){
        if ($( "#bankPayment" ).hasClass('d-none')) {
	        $( "#bankPayment" ).removeClass( 'd-none');
        } else {
            $( "#bankPayment" ).addClass( 'd-none');
        }


    });


    });

</script>
<script>
    $(document).ready(function(){
        $('#bkash').onchange(function() {
            $("#bkashExpand").toggle(this.checked);
        });
});


    $('#nagad').click(function() {
        $("#nagadExpand").toggle(this.checked);
    });
    $('#rocket').click(function() {
        $("#rocketExpand").toggle(this.checked);
    });
</script>
@endsection
