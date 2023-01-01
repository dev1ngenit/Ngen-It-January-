<style>
    .popup_input {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .update_pop {
        display: flex;
        width: 100%;
        justify-content: end;
        padding-right: 38px;
        margin-top: -10px;
    }
</style>

{{-- modal --}}
<div class="popup_modal">
    {{-- content --}}
    <div class="popup_modal_content">
        <div class="popup_modal_content_wrapper">
            {{-- item --}}
            <div class="modal_product_item">
                <div class="modal_product_item_left">
                    <div class="modal_product_item_image">
                        <img src="{{ url('storage/Product/' . $data->image) }}" alt="">
                    </div>
                    <div class="modal_product_item_content">
                        <p style="font-size: 15px" class="modal_product_name"
                            style="
                            display: -webkit-box;
                            -webkit-box-orient: vertical;
                            -webkit-line-clamp:2;
                            overflow: hidden;
                        ">
                            {{ $data->title }}</p>
                        <p class="added_cart"><span><img
                                    src="{{ asset('assets/frontend/image/Logo/checkmark-blue.png') }}"
                                    alt=""></span>Added to Your Basket</p>
                    </div>
                </div>
                <div class="modal_product_item_right">
                    <div class="modal_product_details" style="padding: 0px 15px;">
                        <ul>
                            <li><span>NgenIt</span> <span> 00885</span></li>
                            <li><span>Mfr #:</span> <span>8PM-00001</span></li>
                            <li><span>Unit Price</span> <span>USD ${{ $data->price }}</span></li>
                            <li>
                                <div class="card_product_counter">
                                    <form class="myForm"
                                        style="display:flex;flex-direction: column;text-align:center;color:#ae0a46;font-size:14px;gap:10px;align-items: baseline;justify-content: flex-end;">
                                        @csrf
                                        <input type="hidden" value="{{ $data->price }}" name="price">
                                        <div class="popup_input">
                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                            Quantity:<input type="number" min="1"
                                                style="width: 75px !important;
                                        height: 35px !important;"
                                                name="quantity" value="1" class="cart_input_popup"
                                                id="quantity" />
                                        </div>
                                        <div class="update_pop">
                                            <button class="d-none popup_update_bnt" value="{{ $data->id }}"
                                                id="up" onclick="alert()" style="all:unset;cursor:pointer;"
                                                type="submit">update</button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li><span>Total Price</span>$<span id="totalPrice">{{ number_format($data->price * 1) }}
                                </span></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- item end --}}
            {{-- modal buttton --}}
            <p class="added_cart added_cart_mobile"><span><img
                        src="{{ asset('assets/frontend/image/Logo/checkmark-blue.png') }}" alt=""></span>Added
                to Your Basket</p>
            <div class="modal_button_wrapper d-flux justify-content-between">
                <button type="button" class="common_button" tabindex="0" class="close" id="mediumButton2"
                    data-dismiss="modal" aria-label="Close">Continue Shopping</button>
                <a style="color:#ae0a46" href="{{ route('cart.list') }}"><button type="button"
                        class="common_button2 pr-5 pl-5" tabindex="0">View Cart</button></a>
                <a href="{{ url('checkout') }}"><button class="common_button2">Continue To Checkout</button></a>
            </div>
        </div>
    </div>
</div>

{{-- modal end --}}

<script>
    $(document).on('change', '#quantity', function(event) {
        event.preventDefault();

        let form = $(this).closest('.myForm');
        let id = form.find("input[name=id]").val();
        let quantity = form.find("input[name=quantity]").val();
        let price = form.find("input[name=price]").val();
        let href = $(this).attr('data-attr');
        $.ajax({
            type: "POST",
            data: {
                id: id,
                quantity: quantity,
                "_token": "{{ csrf_token() }}"
            },
            url: "{{ route('cart.update') }}",
            success: function(data) {
                console.log("Success");
                $("#cart_table").load(window.location.href + " #cart_table");
                $("#cart_summary").load(window.location.href + " #cart_summary");
                $("#header_right").load(window.location.href + " #header_right");
            }
        })
        var total = quantity * price;
        $("#totalPrice").html(total.toLocaleString())
    });
    $("#mediumButton2").on("click", function(e) {
        e.preventDefault();
        $("#mediumModal").modal("hide");
        $('#mediumModal').data("modal", null);
    });
</script>
