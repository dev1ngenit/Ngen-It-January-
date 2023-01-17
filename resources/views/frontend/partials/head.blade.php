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

    <link href="{{ asset('backend/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick-theme.css')}}">

    <!-- Plugin link -->
    <link rel="stylesheet" href="{{ asset('frontend/lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/lib/font-awesome/css/font-awesome.css')}}">

    <!-- Css link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
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
    .modal_outer .modal-body {
    /*height:90%;*/
    overflow-y: auto;
    overflow-x: hidden;
    height: 70vh;
}
 </style>
