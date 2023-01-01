    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NgenIt Corporate</title>

    <!--Fav-Icon-->
    @php
        $setting=App\Models\Admin\Setting::first();
    @endphp
    {{-- <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=63b14113592bb2001af01a1d&product=inline-share-buttons&source=platform" async="async"></script> --}}
    <link rel="icon" type="image/x-icon" href="{{ (!file_exists('upload/faviconimage/'.$setting->favicon)) ? $setting->favicon:url('upload/faviconimage/'.$setting->favicon) }}">

    <link href="{{ asset('/') }}backend/assets/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('/')}}frontend/css/slick.css">
    <link rel="stylesheet" href="{{ asset('/')}}frontend/css/slick-theme.css">

    <!-- Plugin link -->
    <link rel="stylesheet" href="{{ asset('/')}}frontend/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/')}}frontend/lib/font-awesome/css/font-awesome.css">

    <!-- Css link -->
    <link rel="stylesheet" href="{{ asset('/')}}frontend/css/main.css">
    <link rel="stylesheet" href="{{ asset('/')}}frontend/css/style.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">



    @yield('styles')
 <style>
    .ui-menu{
        margin-top: 1.5rem !important;
        top: 5rem !important;
    }
    .ui-slider-horizontal .ui-slider-range {

    background-color: green;
    }
    .ui-slider-handle{
        background-color: rgb(121, 11, 11) !important;
    }
 </style>

 <style>
    .product_item_content_name{
        height: 2.8rem;
    }
 </style>

 <style>
    /*left right modal*/
.modal.left_modal, .modal.right_modal{
  position: fixed;
  z-index: 99999;
}
.modal.left_modal .modal-dialog,
.modal.right_modal .modal-dialog {
  position: fixed;
  margin: auto;
  width: 42%;
  height: 100%;
  -webkit-transform: translate3d(0%, 0, 0);
      -ms-transform: translate3d(0%, 0, 0);
       -o-transform: translate3d(0%, 0, 0);
          transform: translate3d(0%, 0, 0);
}

.modal-dialog {
    /* max-width: 100%; */
    margin: 1.75rem auto;
}
@media (min-width: 576px)
{
.left_modal .modal-dialog {
    max-width: 100%;
}

.right_modal .modal-dialog {
    max-width: 100%;
}
}
.modal.left_modal .modal-content,
.modal.right_modal .modal-content {
  /*overflow-y: auto;
    overflow-x: hidden;*/
    height: 100vh !important;
}

.modal.left_modal .modal-body,
.modal.right_modal .modal-body {
  padding: 15px 15px 30px;
}

/*.modal.left_modal  {
    pointer-events: none;
    background: transparent;
}*/

.modal-backdrop {
    display: none;
}

/*Left*/
.modal.left_modal.fade .modal-dialog{
  left: -50%;
  -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
  -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
  -o-transition: opacity 0.3s linear, left 0.3s ease-out;
  transition: opacity 0.3s linear, left 0.3s ease-out;
}

.modal.left_modal.fade.show .modal-dialog{
  left: 0;
  box-shadow: 0px 0px 19px rgba(0,0,0,.5);
}

/*Right*/
.modal.right_modal.fade .modal-dialog {
  right: -50%;
  -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
     -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
       -o-transition: opacity 0.3s linear, right 0.3s ease-out;
          transition: opacity 0.3s linear, right 0.3s ease-out;
}



.modal.right_modal.fade.show .modal-dialog {
  right: 0;
  box-shadow: 0px 0px 19px rgba(0,0,0,.5);
}

/* ----- MODAL STYLE ----- */
.modal-content {
  border-radius: 0;
  border: none;
}



.modal-header.left_modal, .modal-header.right_modal {

  padding: 10px 15px;
  border-bottom-color: #EEEEEE;
  background-color: #ae0a46;

}

.modal_outer .modal-body {
    /*height:90%;*/
    overflow-y: auto;
    overflow-x: hidden;
    height: 91vh;
}
 </style>


