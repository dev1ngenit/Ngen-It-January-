
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Ngen It | Admin Panel</title>

	<!-- Global stylesheets -->
    @php
    $setting=App\Models\Admin\Setting::first();
    @endphp
    <link rel="icon" type="image/x-icon" href="{{ (!file_exists('upload/faviconimage/'.$setting->favicon)) ? $setting->favicon:url('upload/faviconimage/'.$setting->favicon) }}">

	<link href="{{ asset('/') }}backend/assets/fonts/inter/inter.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('/') }}backend/assets/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('/') }}backend/assets/css/ltr/all.min.css" id="stylesheet" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/icons/material/styles.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->


    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link href="{{ asset('backend/assets/input-tags/css/tagsinput.css') }}" rel="stylesheet" />

