<!--============///* USE LINK *///=============-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="{{ asset('frontend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- slick slider -->
<script src="{{ asset('frontend/js/slick.min.js')}}"></script>
<script src="{{ asset('frontend/js/nasted.tab.js')}}"></script>
<script src="{{ asset('frontend/js/javascript.mr.js')}}"></script>
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
@yield('scripts')

<!--- Search for Software and Hardware -->
<script>
    $(document).ready(function(){
      $("#softwareInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#softwareTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>


<script>
    $(document).ready(function(){
      $("#categoryInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#categoryTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>

<script>
    $(document).ready(function(){
      $("#categoryInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#categoryTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>

<script>
    $(document).ready(function(){
      $("#brandInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#brandTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>

<script>
    $(document).ready(function(){
      $("#industryInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#industryTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>

<script>
    $(document).ready(function(){
      $("#hardwareInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#hardwareTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>

<!--- End Search for Software and Hardware -->

<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<script>
    $(document).ready(function () {
        //alert('4')
        var path = "{{route('autosearch')}}";
        $('#search_text').autocomplete({
            source:function (request, response) {
                $.ajax({
                url:path,
                //type:'POST',
                dataType:"JSON",
                data:{
                    term:request.term
                },

                success:function(data){
                    response(data);
                }
                });
            },
            minLength : 1,
        })
    })
</script>





<script>
    $(document).ready(function() {
        $("#close").click(function() {
            if ($("#profile_percentage").addClass( 'd-none')) {
                $("#profile_percentagey").slideUp(300);
                //$("#profile_percentage").text('+')
            }
        });
    });
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
            //alert(5);
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});


</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#image1').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage1').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});


</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#image2').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage2').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});


</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#image3').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage3').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});


</script>

<script>
    $(document).ready(function(){
    $('input[name=toggle]').change(function() {
    var mode= $(this).prop('checked');
    var id=$(this).val();
    $.ajax({
        url:"{{route('client.status')}}",
        type:"POST",
        data:{
            _token:'{{csrf_token()}}',
            mode:mode,
            id:id,
        },
        success:function (response) {

            if (response.status) {
                alert(response.msg);
            }
            else{
                alert('Please Try Again!');
            }
        }

    })

   })
})
  </script>


<!-- Filter scripts -->
<!-- Filter Sidebar scripts -->
<script>
    function myFunction() {


            if ($( "#filter_category" ).hasClass('d-none')) {
                $( "#filter_category" ).removeClass( 'd-none');
            } else {
            $( "#filter_category" ).addClass( 'd-none');
            }

    }
    function showhide()
    {
        if ($( "#newpost" ).hasClass('d-none')) {
                $( "#newpost" ).removeClass( 'd-none');
            } else {
            $( "#newpost" ).addClass( 'd-none');
            }

    }


</script>


<script type="text/javascript">

    $(document).ready(function (){
        if ($('#slider-range').length > 0) {
            const max_price = parseInt($('#slider-range').data('max'));
            const min_price = parseInt($('#slider-range').data('min'));
            let price_range = min_price+"-"+max_price;

            let price = price_range.split('-');

                $("#slider-range").slider({
                    range: true,
                    min: min_price,
                    max: max_price,
                    values: price,
                slide: function (event, ui) {

                $("#amount").val('$'+ui.values[0]+"-"+'$'+ui.values[1]);
                $("#price_range").val(ui.values[0]+"-"+ui.values[1]);
                }
                });
        }
    })


</script>

<!-- Filter scripts -->
<script>
    $( "#addToCart" ).click(function() {

     var product_name = $('#name').val();
     var id = $('#product_id').val();
     var quantity = $('#qty').val();

     $.ajax({
            url:"{{route('add.cart')}}",
            type:"POST",
            data:{
                _token:'{{csrf_token()}}',
                //mode:mode,
                id:id,qty:quantity,name:product_name
            },
            //alert(5),
            success:function (response) {

                if (response.status) {
                    alert(response.msg);
                }
                else{
                    alert('Please Try Again!');
                }
            }

        })
});
</script>


<script>

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })

    /// Start Add To Cart Prodcut

    function addToCart(){
        alert(5);
     var product_name = $('#name').val();
     var id = $('#product_id').val();


     var quantity = $('#qty').val();
     $.ajax({
        type: "POST",
        dataType : 'json',
        data:{
            // color:color, size:size, quantity:quantity,product_name:product_name,vendor:vendor
            quantity:quantity,product_name:product_name
        },
        url: "/cart/data/store/"+id,
        success:function(data){
            miniCart();
            //$('#closeModal').click();
             console.log(data)

            // Start Message

            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  icon: 'success',
                  showConfirmButton: false,
                  timer: 3000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    title: data.success,
                    })

            }else{

           Toast.fire({
                    type: 'error',
                    title: data.error,
                    })
                }

              // End Message
        }
     })

    }

    /// End Add To Cart Product


        /// Start Details Page Add To Cart Product

    function addToCartDetails(){

     var product_name = $('#dpname').text();
     var id = $('#dproduct_id').val();
     var vendor = $('#vproduct_id').val();
     var color = $('#dcolor option:selected').text();
     var size = $('#dsize option:selected').text();
     var quantity = $('#dqty').val();
     $.ajax({
        type: "POST",
        dataType : 'json',
        data:{
            color:color, size:size, quantity:quantity,product_name:product_name,vendor:vendor
        },
        url: "/dcart/data/store/"+id,
        success:function(data){
            miniCart();

            // console.log(data)

            // Start Message

            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  icon: 'success',
                  showConfirmButton: false,
                  timer: 3000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    title: data.success,
                    })

            }else{

           Toast.fire({
                    type: 'error',
                    title: data.error,
                    })
                }

              // End Message
        }
     })

    }

     /// Eend Details Page Add To Cart Product


 </script>


<script type="text/javascript">

 function miniCart(){
    $.ajax({
        type: 'GET',
        url: '/product/mini/cart',
        dataType: 'json',
        success:function(response){
            // console.log(response)

        $('span[id="cartSubTotal"]').text(response.cartTotal);
        $('#cartQty').text(response.cartQty);

        var miniCart = ""

        $.each(response.carts, function(key,value){
           miniCart += ` <ul>
            <li>
                <div class="shopping-cart-img">
                    <a href="shop-product-right.html"><img alt="Nest" src="/${value.options.image} " style="width:50px;height:50px;" /></a>
                </div>
                <div class="shopping-cart-title" style="margin: -73px 74px 14px; width" 146px;>
                    <h4><a href="shop-product-right.html"> ${value.name} </a></h4>
                    <h4><span>${value.qty} × </span>${value.price}</h4>
                </div>
                <div class="shopping-cart-delete" style="margin: -85px 1px 0px;">
                    <a type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"  ><i class="fi-rs-cross-small"></i></a>
                </div>
            </li>
        </ul>
        <hr><br>
               `
          });

            $('#miniCart').html(miniCart);

        }

    })
 }
  miniCart();


  /// Mini Cart Remove Start
   function miniCartRemove(rowId){
     $.ajax({
        type: 'GET',
        url: '/minicart/product/remove/'+rowId,
        dataType:'json',
        success:function(data){
        miniCart();
             // Start Message

            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  icon: 'success',
                  showConfirmButton: false,
                  timer: 3000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    title: data.success,
                    })

            }else{

           Toast.fire({
                    type: 'error',
                    title: data.error,
                    })
                }

              // End Message

        }



     })
   }



    /// Mini Cart Remove End


</script>








 <!--  // Start Load MY Cart // -->
<script type="text/javascript">
    function cart(){
    $.ajax({
        type: 'GET',
        url: '/get-cart-product',
        dataType: 'json',
        success:function(response){
            // console.log(response)


        var rows = ""

        $.each(response.carts, function(key,value){
           rows += `<tr class="pt-30">
            <td class="custome-checkbox pl-30">

            </td>
            <td class="image product-thumbnail pt-40"><img src="/${value.options.image} " alt="#"></td>
            <td class="product-des product-name">
                <h6 class="mb-5"><a class="product-name mb-10 text-heading" href="shop-product-right.html">${value.name} </a></h6>

            </td>
            <td class="price" data-title="Price">
                <h4 class="text-body">$${value.price} </h4>
            </td>

              <td class="price" data-title="Price">
              ${value.options.color == null
                ? `<span>.... </span>`
                : `<h6 class="text-body">${value.options.color} </h6>`
              }
            </td>

               <td class="price" data-title="Price">
              ${value.options.size == null
                ? `<span>.... </span>`
                : `<h6 class="text-body">${value.options.size} </h6>`
              }
            </td>


            <td class="text-center detail-info" data-title="Stock">
                <div class="detail-extralink mr-15">
                    <div class="detail-qty border radius">

     <a type="submit" class="qty-down" id="${value.rowId}" onclick="cartDecrement(this.id)"><i class="fi-rs-angle-small-down"></i></a>

      <input type="text" name="quantity" class="qty-val" value="${value.qty}" min="1">

     <a  type="submit" class="qty-up" id="${value.rowId}" onclick="cartIncrement(this.id)"><i class="fi-rs-angle-small-up"></i></a>

                    </div>
                </div>
            </td>
            <td class="price" data-title="Price">
                <h4 class="text-brand">$${value.subtotal} </h4>
            </td>
            <td class="action text-center" data-title="Remove">
            <a type="submit" class="text-body"  id="${value.rowId}" onclick="cartRemove(this.id)"><i class="fi-rs-trash"></i></a></td>
        </tr>`
          });

            $('#cartPage').html(rows);

        }

    })
 }
  cart();

  // Cart Remove Start
  function cartRemove(id){
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "/cart-remove/"+id,

                success:function(data){
                    cart();
                    miniCart();
                    couponCalculation();
                     // Start Message

            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',

                  showConfirmButton: false,
                  timer: 3000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    icon: 'success',
                    title: data.success,
                    })

            }else{

           Toast.fire({
                    type: 'error',
                    icon: 'error',
                    title: data.error,
                    })
                }

              // End Message


                }
            })
        }
// Cart Remove End

// Cart INCREMENT

 function cartIncrement(rowId){
    $.ajax({
        type: 'GET',
        url: "/cart-increment/"+rowId,
        dataType: 'json',
        success:function(data){
            couponCalculation();
            cart();
            miniCart();

        }
    });
 }


// Cart INCREMENT End

// Cart Decrement Start

 function cartDecrement(rowId){
    $.ajax({
        type: 'GET',
        url: "/cart-decrement/"+rowId,
        dataType: 'json',
        success:function(data){
            couponCalculation();
            cart();
            miniCart();

        }
    });
 }


// Cart Decrement End



</script>
 <!--  // End Load MY Cart // -->


 <script>
    $(document).ready(function(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
        $('.rmvBtn').click(function(e){
          var form=$(this).closest('form');
            //var dataID=$(this).data('id');
            // alert(dataID);
            e.preventDefault();
            swalInit.fire({
                  title: "Are you sure?",
                  text: "Once removed, you will not be able to recover this data!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })
              .then((willDelete) => {
                  if (willDelete) {
                     form.submit();
                      swal("Your Products has been removed from cart!", {
                        icon:"success",
                      });
                  } else {
                      swal("Your data is safe!");
                  }
              });
        })
    })
  </script>




