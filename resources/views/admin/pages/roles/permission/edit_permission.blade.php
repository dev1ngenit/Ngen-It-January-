@extends('admin.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Permission Management</span>
                    </div>

                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card p-0 py-1 mt-1">
                    <div class="card-body p-0 px-2">
                        <div class="row">
                            <div class="col-lg-8">
                                <h5 class="text-center  p-0 py-1">Edit Permissions</h5>
                            </div>

                            <div class="col-lg-4">
                                <a href="{{ route('all.permission') }}" type="button"
                                    class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                                        <i class="icon-eye"></i>
                                    </span>
                                    All Permission
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form id="myForm" method="post" action="{{ route('update.permission') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $permission->id }}">

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Permission Name</h6>
                                </div>
                                <div class="form-group col-sm-9 text-secondary">
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $permission->name }}" />
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Group Name</h6>
                                </div>
                                <div class="form-group col-sm-9 text-secondary">
                                    <select name="group_name" class="form-select mb-3"
                                        aria-label="Default select example">
                                        <option selected="">Open this select Group</option>
                                        <option value="brand"
                                            {{ $permission->group_name == 'brand' ? 'selected' : '' }}>Brand</option>
                                        <option
                                            value="category"{{ $permission->group_name == 'category' ? 'selected' : '' }}>
                                            Category</option>
                                        <option
                                            value="subcategory"{{ $permission->group_name == 'subcategory' ? 'selected' : '' }}>
                                            Subcategory</option>
                                        <option
                                            value="product"{{ $permission->group_name == 'product' ? 'selected' : '' }}>
                                            Product</option>
                                        <option
                                            value="slider"{{ $permission->group_name == 'slider' ? 'selected' : '' }}>
                                            Slider</option>
                                        <option
                                            value="ads"{{ $permission->group_name == 'ads' ? 'selected' : '' }}>
                                            Ads</option>
                                        <option
                                            value="coupon"{{ $permission->group_name == 'coupon' ? 'selected' : '' }}>
                                            Coupon</option>
                                        <option
                                            value="area"{{ $permission->group_name == 'area' ? 'selected' : '' }}>
                                            Area</option>
                                        <option
                                            value="vendor"{{ $permission->group_name == 'vendor' ? 'selected' : '' }}>
                                            Vendor</option>
                                        <option
                                            value="order"{{ $permission->group_name == 'order' ? 'selected' : '' }}>
                                            Order</option>
                                        <option
                                            value="return"{{ $permission->group_name == 'return' ? 'selected' : '' }}>
                                            Return</option>
                                        <option
                                            value="report"{{ $permission->group_name == 'report' ? 'selected' : '' }}>
                                            Report</option>
                                        <option
                                            value="user"{{ $permission->group_name == 'user' ? 'selected' : '' }}>
                                            User Management</option>
                                        <option
                                            value="review"{{ $permission->group_name == 'review' ? 'selected' : '' }}>
                                            Review</option>
                                        <option
                                            value="setting"{{ $permission->group_name == 'setting' ? 'selected' : '' }}>
                                            Setting</option>
                                        <option
                                            value="blog"{{ $permission->group_name == 'blog' ? 'selected' : '' }}>
                                            Blog</option>
                                        <option
                                            value="role"{{ $permission->group_name == 'role' ? 'selected' : '' }}>
                                            Role</option>
                                        <option
                                            value="admin"{{ $permission->group_name == 'admin' ? 'selected' : '' }}>
                                            Admin</option>
                                        <option
                                            value="stock"{{ $permission->group_name == 'stock' ? 'selected' : '' }}>
                                            Stock</option>
                                    </select>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-4 text-secondary">
                                    <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                        class="ph-paper-plane-tilt ms-2"></i></button>

                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'Please Enter Permission Name',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
