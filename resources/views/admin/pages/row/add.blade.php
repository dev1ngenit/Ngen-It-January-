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
                        <span class="breadcrumb-item active">Row Management</span>
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
                <div class="col-lg-2">
                    <button id="imgRowBtn" class="btn btn-warning btn-sm w-100">Image with row</button>
                    <button id='rowListBtn' class="btn btn-warning btn-sm mt-2 w-100">Row with list</button>
                </div>
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">

                            <div class="row">
                                <div class="col-lg-8">
                                    <h4 class="mb-0 text-center">Add Row Form</h4>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('row.index') }}" type="button"
                                        class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        All Row
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body d-none">
                            <form id="myform1" class="d-none" method="post" action="{{ route('row.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-3"></div>
                                    <div class="col-sm-1">
                                        <h6 class="mb-0">Badge</h6>
                                    </div>
                                    <div class="form-group col-sm-4 text-secondary">
                                        <input type="text" name="badge" class="form-control maxlength"
                                            maxlength="100" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Row Image </h6>
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
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Button Name</h6>
                                            </div>
                                            <div class="form-group col-sm-9 text-secondary">
                                                <input type="text" name="btn_name" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">link</h6>
                                            </div>
                                            <div class="form-group col-sm-9 text-secondary">
                                                <input type="text" name="link" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Title</h6>
                                            </div>
                                            <div class="form-group col-sm-9 text-secondary">
                                                <input type="text" name="title" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">
                                                    Description</h6>
                                            </div>
                                            <div class="form-group col-sm-9 text-secondary">
                                                <textarea class="form-control" name="description" id="long_desc" style=" font-size: 12px; font-weight: 500;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5"></div>
                                    <div class="col-sm-7 text-secondary">
                                        <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                                class="ph-paper-plane-tilt ms-2"></i></button>
                                    </div>
                                </div>
                            </form>
                            <form id="myform2" class="d-none" method="post" action="{{ route('row.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-3"></div>
                                    <div class="col-sm-1">
                                        <h6 class="mb-0">Badge</h6>
                                    </div>
                                    <div class="form-group col-sm-4 text-secondary">
                                        <input type="text" name="badge" class="form-control maxlength"
                                            maxlength="100" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-12">
                                                <h6 class="mb-0">Title</h6>
                                            </div>
                                            <div class="form-group col-sm-12 text-secondary">
                                                <input type="text" name="title" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-12">
                                                <h6 class="mb-0">
                                                    Short Description</h6>
                                            </div>
                                            <div class="form-group col-sm-12 text-secondary">
                                                <textarea class="form-control" name="short_des" rows="30" id="common" style=" font-size: 12px; font-weight: 500;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-12">
                                                <h6 class="mb-0">List Title</h6>
                                            </div>
                                            <div class="form-group col-sm-12 text-secondary">
                                                <input type="text" name="list_title" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-12">
                                                <h6 class="mb-0">List One</h6>
                                            </div>
                                            <div class="form-group col-sm-12 text-secondary">
                                                <input type="text" name="list_one" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-12">
                                                <h6 class="mb-0">List Two</h6>
                                            </div>
                                            <div class="form-group col-sm-12 text-secondary">
                                                <input type="text" name="list_two" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-12">
                                                <h6 class="mb-0">List Three</h6>
                                            </div>
                                            <div class="form-group col-sm-12 text-secondary">
                                                <input type="text" name="list_three" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-12">
                                                <h6 class="mb-0">List Four</h6>
                                            </div>
                                            <div class="form-group col-sm-12 text-secondary">
                                                <input type="text" name="list_four" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    {{-- <div class="col-sm-5"></div> --}}
                                    <div class="col-sm-12 text-secondary d-flex justify-content-center">
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

@push('scripts')
<script>
    $(document).ready(function(){
        $('#imgRowBtn').click(e=>{
            $('#myform1')[0].parentNode.classList.remove('d-none');
            $('#myform1')[0].classList.remove('d-none');
            $('#myform2')[0].classList.add('d-none')
        });
        $('#rowListBtn').click(e=>{
            $('#myform1')[0].parentNode.classList.remove('d-none');
            $('#myform2')[0].classList.remove('d-none')
            $('#myform1')[0].classList.add('d-none');
        });
    });
</script>
@endpush
