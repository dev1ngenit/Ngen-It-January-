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
                        <span class="breadcrumb-item active">Brand Page Management</span>
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
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="text-center">Add Brand Page Form</h5>
                                </div>

                                <div class="col-lg-2"></div>
                                <div class="col-lg-3">
                                    <a href="{{ route('brandPage.index') }}" type="button"
                                        class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-eye"></i>
                                        </span>
                                        All Brand Page
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="card">

                        <div class="card-body">
                            <form method="post" action="{{ route('brandPage.store') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row border mb-1">
                                    <div class="row my-2">
                                        <div class="col-lg-9">
                                            <h3 class="text-center text-primary">Banner Row</h3>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="{{ route('brand.create') }}" type="button"
                                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                                    <i class="icon-eye"></i>
                                                </span>
                                                Add Brand
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="p-0 m-0">

                                    <div class="row mb-3">
                                        <div class="col-sm-3"></div>
                                        <div class="form-group col-sm-6 text-secondary">
                                            <label for="brand_id"><h5 class="text-center mb-1">Slect Brand <span class="text-danger">*</span></h5></label>
                                            <select name="brand_id" data-placeholder="Select brand_id.."
                                                class="form-control select" id="brand_id">
                                                <option></option>
                                                @foreach ($brands as $brand)
                                                    <option class="form-control" value="{{ $brand->id }}">
                                                        {{ $brand->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <div class="col-sm-12">
                                                <h6 class="mb-0">Banner Image <span class="text-danger">*</span></h6>
                                            </div>
                                            <div class="col-sm-10 text-secondary">
                                                <input type="file" name="banner_image" class="form-control"
                                                    id="image1" accept="image/*" />
                                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                <img id="showImage1" height="70px" width="70px"
                                                    src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Header <span class="text-danger">*</span></h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <textarea name="header" id="" class="form-control" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                                <div class="row border mb-1">
                                    <div class="row my-2">
                                        <div class="col-lg-9">
                                            <h3 class="text-center text-primary">Right Image with Button Row</h3>
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
                                            <h6 class="mb-0">Right Image with Button Row </h6>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <select name="row_four_id" data-placeholder="Select row_four.."
                                                class="form-control select">
                                                <option></option>
                                                @foreach ($rows as $row)
                                                    <option class="form-control" value="{{ $row->id }}">
                                                        {{ $row->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row border mb-1">
                                    <div class="row my-2">
                                        <div class="col-lg-9">
                                            <h3 class="text-center text-primary">Card Row</h3>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="{{ route('solutionCard.create') }}" type="button"
                                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                                    <i class="icon-eye"></i>
                                                </span>
                                                Add Card
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="p-0 m-0">

                                    <div class="row mb-3 mt-2">
                                        <div class="col-sm-2">

                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                             <label for="title"><h6 class="text-center mb-1">Row One Title</h6></label>
                                            <input type="text" name="row_one_title" class="form-control maxlength"
                                                maxlength="255" id="title"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-2">
                                            <h6 class="mb-0"></h6>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                             <label for="header"><h6 class="text-center mb-1">Row One Header</h6></label>
                                            <textarea name="row_one_header" id="header" class="form-control" cols="30" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Card One </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <select name="solution_card_one_id"
                                                        data-placeholder="Select card_one.."
                                                        class="form-control select">
                                                        <option></option>
                                                        @foreach ($solution_cards as $solution_card)
                                                            <option class="form-control" value="{{ $solution_card->id }}">
                                                                {{ $solution_card->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Card Two</h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <select name="solution_card_two_id"
                                                        data-placeholder="Select Card two"
                                                        class="form-control select">
                                                        <option></option>
                                                        @foreach ($solution_cards as $solution_card)
                                                            <option class="form-control" value="{{ $solution_card->id }}">
                                                                {{ $solution_card->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row mb-3">
                                                <div class="col-sm-112">
                                                    <h6 class="mb-0">Card Three</h6>
                                                </div>
                                                <div class="form-group col-sm-112 text-secondary">
                                                    <select name="solution_card_three_id"
                                                        data-placeholder="Select Card Three.."
                                                        class="form-control select">
                                                        <option></option>
                                                        @foreach ($solution_cards as $solution_card)
                                                            <option class="form-control" value="{{ $solution_card->id }}">
                                                                {{ $solution_card->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row border mb-1">
                                    <div class="row my-2">
                                        <div class="col-lg-9">
                                            <h3 class="text-center text-primary">Left Image with Button Row</h3>
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
                                    <div class="row mb-3 mt-3">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Row Five </h6>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <select name="row_five_id" data-placeholder="Select Row Five.."
                                                class="form-control select">
                                                <option></option>
                                                @foreach ($rows as $row)
                                                    <option class="form-control" value="{{ $row->id }}">
                                                        {{ $row->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row border mb-1">
                                    <div class="row my-2">
                                        <div class="col-lg-9">
                                            <h3 class="text-center text-primary">Row six with Background Image</h3>
                                        </div>
                                        <div class="col-lg-3">
                                            {{-- <a href="{{ route('row.create') }}" type="button"
                                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                                    <i class="icon-eye"></i>
                                                </span>
                                                Add Row
                                            </a> --}}
                                        </div>
                                    </div>
                                    <hr class="p-0 m-0">
                                    <div class="row mb-3 mt-2">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-4">
                                            <div class="col-sm-12">
                                                <h6 class="mb-0">Row Six Image (More than 1800*1200) <span class="text-danger">*</span></h6>
                                            </div>
                                            <div class="col-sm-12 text-secondary">
                                                <input type="file" name="row_six_image" class="form-control"
                                                    id="image" accept="image/*" />
                                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                <img id="showImage" height="80px" width="80px"
                                                    src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png" alt="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">

                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <label for="title"><h6 class="mb-0">Row Six title </h6></label>
                                            <input type="text" name="row_six_title" class="form-control maxlength"
                                                maxlength="255" id="title"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">

                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <label for="title"><h6 class="mb-0">Row Six header </h6></label>
                                            <textarea name="row_six_header" id="" class="form-control" cols="30" rows="3"></textarea>
                                        </div>
                                    </div>

                                </div>


                                <div class="row border mb-1">
                                    <div class="row my-2">
                                        <div class="col-lg-9">
                                            <h3 class="text-center text-primary">Right Image with Button Row</h3>
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

                                    <div class="row mb-3 mt-3">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Row Seven </h6>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <select name="row_seven_id" data-placeholder="Select Row Seven.."
                                                class="form-control select">
                                                <option></option>
                                                @foreach ($rows as $row)
                                                    <option class="form-control" value="{{ $row->id }}">
                                                        {{ $row->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row border mb-1">
                                    <div class="row my-2">
                                        <div class="col-lg-9">
                                            <h3 class="text-center text-primary">Row with Image</h3>
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
                                    <div class="row mb-3 mt-3">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">Row Eight </h6>
                                        </div>
                                        <div class="form-group col-sm-8 text-secondary">
                                            <select name="row_eight_id" data-placeholder="Select Row Eight.."
                                                class="form-control select">
                                                <option></option>
                                                @foreach ($row_with_cols as $row_with_col)
                                                    <option class="form-control" value="{{ $row_with_col->id }}">
                                                        {{ $row_with_col->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>



<div class="row border mb-1">
    <div class="row my-2">
        <div class="col-lg-9">
            <h3 class="text-center text-primary">Top Product Row</h3>
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
    <div class="row mb-3">
        <div class="col-sm-3">

        </div>
        <div class="form-group col-sm-6 text-secondary">
            <label for="title"><h6 class="mb-0">Row Nine title </h6></label>
            <input type="text" name="row_nine_title"
                class="form-control maxlength" maxlength="255" id="title"/>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3">

        </div>
        <div class="form-group col-sm-6 text-secondary">
            <label for="header"><h6 class="mb-0">Row Nine header</h6></label>
            <textarea name="row_nine_header" id="header" class="form-control" cols="30" rows="3"></textarea>
        </div>
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
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection
