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
                        <span class="breadcrumb-item active">Features Management</span>
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
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">

                            <div class="row">
                                <div class="col-lg-8">
                                    <h4 class="mb-0 text-center">Add Features</h4>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('feature.index') }}" type="button"
                                        class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        All Features
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form id="myform" method="post" action="{{ route('feature.store') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <!--Banner Section-->
                                <div class="row border">
                                    <div class="col-12 text-center">
                                        <h5 class="border-bottom p-2">Banner Section</h5>
                                    </div>
                                    <div class="row mb-3 mt-2">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12 mb-4">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Badge </h6>
                                                </div>
                                                <div class="form-group col-sm-9 text-secondary">
                                                    <input type="text" id="badge" name="badge" class="form-control maxlength"
                                                    maxlength="255" placeholder="Badge"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Title </h6>
                                                </div>
                                                <div class="form-group col-sm-9 text-secondary">
                                                    <input type="text" name="title" class="form-control maxlength"
                                                        maxlength="255" placeholder="Feature Title"/>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <h6 class="mb-0">Logo </h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="file" name="logo" class="form-control" id="image"
                                                            accept="image/*" />
                                                        <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                        <img id="showImage" height="50px" width="50px"
                                                            src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <h6 class="mb-0">Image </h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="file" name="image" class="form-control" id="image1"
                                                            accept="image/*" />
                                                        <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                        <img id="showImage1" height="50px" width="50px"
                                                            src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!--End Banner Section-->

                                <!--- Short Description -->
                                <div class="row border my-3 p-4">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Short Description For Homepage</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea name="header" class="form-control" rows="3"
                                        style=" font-size: 12px; font-weight: 500;"></textarea>
                                    </div>
                                </div>
                                <!--- Short Description -->

                                <!---ROw with List--->
                                <div class="row border mb-1">
                                    <div class="row my-2">
                                        <div class="col-lg-9">
                                            <h5 class="text-center text-primary">Row with List</h5>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="{{ route('row.create') }}" type="button"
                                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                                    <i class="icon-eye"></i>
                                                </span>
                                                Add Row
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="p-0 m-0">

                                    <div class="row mb-3 mt-2">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Row With List </h6>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <select name="row_one_id" data-placeholder="Select Row One.."
                                                class="form-select">
                                                <option></option>
                                                @foreach ($rows as $row)
                                                    <option class="form-control" value="{{ $row->id }}">
                                                        {{ $row->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!---ROw with List--->

                                <!---ROw with Right Image--->
                                <div class="row border mb-1">
                                    <div class="row my-2">
                                        <div class="col-lg-9">
                                            <h5 class="text-center text-primary">Row with Right Image</h5>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="{{ route('row.create') }}" type="button"
                                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                                    <i class="icon-eye"></i>
                                                </span>
                                                Add Row
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="p-0 m-0">

                                    <div class="row mb-3 mt-2">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Row With Right Image </h6>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <select name="row_two_id" data-placeholder="Select Row Two.."
                                                class="form-select">
                                                <option></option>
                                                @foreach ($rows as $row)
                                                    <option class="form-control" value="{{ $row->id }}">
                                                        {{ $row->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!---ROw with Right Image--->





                                <!--Row Three with Background Color-->

                                <div class="row border mb-1">
                                    <div class="col-12 text-center">
                                        <h5 class="border-bottom pb-2">Row Three with Background Color</h5>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Title </h6>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="row_three_title"
                                                class="form-control maxlength" maxlength="255" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Short Description</h6>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <textarea name="row_three_header" id="" class="form-control" cols="30" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!--End Row Three with Background Color-->


                                <!--Related Features Row-->

                                {{-- <div class="row border mb-1">
                                    <div class="col-12 text-center">
                                        <h5 class="border-bottom pb-2">Contact Row</h5>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Title </h6>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="row_five_title"
                                                class="form-control maxlength" maxlength="255" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Short Description</h6>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <textarea name="row_five_header" id="" class="form-control" cols="30" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div> --}}

                                <!--Related Features Row-->


                                <!---Footer--->
                                <div class="row border p-1 mb-2">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Footer </h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <textarea class="form-control" name="footer" id="footer" style=" font-size: 12px; font-weight: 500;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!---Footer--->

                                 <!--Contact Row-->

                                 <div class="row border mb-1">
                                    <div class="col-12 text-center">
                                        <h5 class="border-bottom pb-2">Contact Row</h5>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Title </h6>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <input type="text" name="row_four_title"
                                                class="form-control maxlength" maxlength="255" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Short Description</h6>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <textarea name="row_four_header" id="" class="form-control" cols="30" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!--Contact Row-->



                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        {{-- <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" /> --}}

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
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection
