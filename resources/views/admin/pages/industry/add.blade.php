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
                        <span class="breadcrumb-item active">Industry Management</span>
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
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card mt-1" >
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item col-3">
                                            <a href="#js-tab1" class="py-1 nav-link active cat-tab1" data-bs-toggle="tab">
                                                <p style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;">Industry</p>
                                            </a>
                                        </li>

                                        {{-- <li class="nav-item col-3">
                                            <a href="#js-tab2" class="py-1 nav-link cat-tab2" data-bs-toggle="tab">
                                                <p style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;">Sub Industry</p>
                                            </a>
                                        </li> --}}
                                    </ul>
                                </div>

                                <div class="col-lg-3">
                                    <a href="{{ route('industry.index') }}" type="button"
                                        class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="ph-eye"></i>
                                        </span>
                                        All Industries
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="js-tab1">
                            <div class="card">
                                <div class="card-header">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="mb-0 text-center">Add Industry</h4>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-body">
                                    <form id="myform" method="post" action="{{ route('industry.store') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row mb-3">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-2">
                                                <h6 class="mb-0">Industry Name</h6>
                                            </div>
                                            <div class="form-group col-sm-6 text-secondary">
                                                <input type="text" name="title" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Industry Logo </h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="file" name="logo" class="form-control" id="image" accept="image/*" />
                                                        <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                        <img id="showImage" height="100px" width="100px"  src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Banner Image </h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="file" name="image" class="form-control" id="image1" accept="image/*" />
                                                        <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                        <img id="showImage1" height="100px" width="100px"  src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Industry Header</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <textarea name="short_desc" cols="70" rows="8"></textarea>
                                            </div>
                                        </div>


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

                    {{-- <div class="tab-content">
                        <div class="tab-pane fade show active" id="js-tab2">
                            <div class="card">
                                <div class="card-header">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="mb-0 text-center">Add Sub Industry</h4>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-body">
                                    <form id="myform" method="post" action="{{ route('industry.store') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Industry Name</h6>
                                            </div>
                                            <div class="form-group col-sm-6 text-secondary">
                                                <select data-placeholder="Type 'Industry name to search'" class="form-control select" name="industry_id" >
                                                    <option></option>

                                                    @foreach ($industrys as $item )
                                                     <option value="{{$item->id}}">{{$item->title}}</option>
                                                     @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Sub Industry Name</h6>
                                            </div>
                                            <div class="form-group col-sm-9 text-secondary">
                                                <input type="text" name="title" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Sub Industry Logo </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="file" name="logo" class="form-control" id="image" accept="image/*" />
                                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                <img id="showImage" height="100px" width="100px"  src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png" alt="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Sub Industry Description</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <textarea name="short_des" cols="70" rows="8">Short Description</textarea>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />

                                                <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                                        class="ph-paper-plane-tilt ms-2"></i></button>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>

@endsection





