@extends('backend.master')
@section('content')
    <!-- /# Sidebar -->
    @include('backend.sidebar');
    <!-- /# Header -->
    @include('backend.header');
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Create Your Template <span style="float: right;font-size:15px">
                                        <p><a href="{{ url('allpage') }}"><i class="fa fa-chevron-left"
                                                    aria-hidden="true"></i> view all page</a></p>
                                    </span></h4>
                            </div>
                            <div class="card-body">
                                <select name="select" id="select" onchange="myform(this)">
                                    <option value="">Select Your Template</option>
                                    <option value="home">Home Page</option>
                                    <option value="brand">Brand</option>
                                    <option value="category">Category</option>
                                </select>

                                @yield('content')

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script>
            function myform(sel) {
                $var = sel.value;
                if ($var === 'brand') {
                    var url = "http://localhost/ngenit/public/pagebuilder/brand";
                    $(location).attr('href', url);
                }
                if ($var === 'category') {
                    var url = "http://localhost/ngenit/public/pagebuilder/category";
                    $(location).attr('href', url);
                }
                if ($var === 'home') {
                    var url = "http://localhost/ngenit/public/pagebuilder/home";
                    $(location).attr('href', url);
                }
            }
        </script>
    @endsection
