@extends('admin.master')
@section('content')
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Contact Management</span>
                    </div>

                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            

            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div id="table1" class="card cardTd">
                                <div class="card-header">

                                    <h5 class="mb-0 text-center">Update Cliemt Form</h5>

                                </div>

                                <div class="card-body">
                                    <form method="post"
                                        action="{{ route('clientPermission.update', $clientPermissions->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Name </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $clientPermissions->name }}" name="name"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">email </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="email" value="{{ $clientPermissions->email }}" name="email"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Image </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="file" name="image" class="form-control" id="image"
                                                    accept="image/*" />
                                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                <img id="showImage" height="100px" width="100px"
                                                    src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Phone </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $clientPermissions->phone }}" name="phone"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">post_code </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $clientPermissions->post_code }}"
                                                    name="post_code" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Country </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $clientPermissions->country }}"
                                                    name="country" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Email </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="email" value="{{ $clientPermissions->email }}"
                                                    name="email" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">password </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="password" name="password" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Status</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select value="{{ $clientPermissions->status }}" name="status"
                                                    class="form-control select" data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose status ">
                                                    <option></option>
                                                    <option @if ($clientPermissions->status == 'active') selected @endif
                                                        value="active">Active
                                                    <option @if ($clientPermissions->status == 'inactive') selected @endif
                                                        value="inactive">In-Active
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Address</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea value="{{ $clientPermissions->address }}" name="address" id="" class="form-control"
                                                    cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection
