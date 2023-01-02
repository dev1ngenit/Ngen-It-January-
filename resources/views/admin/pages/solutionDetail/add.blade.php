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
                        <span class="breadcrumb-item active">Solution Details Management</span>
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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <h5 class="text-center">Add Solution Detail Form</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('solutionDetails.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Solution Detail
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div id="table1" class="card cardTd">

                                <div class="card-body">
                                    <form method="post" action="{{ route('solutionDetails.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <!--Banner Section-->
                                        <div class="row border">
                                            <div class="col-12 text-center">
                                                <h5 class="border-bottom p-2">Banner Section</h5>
                                            </div>
                                            <div class="row mb-3 mt-2">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-2">
                                                    <h6 class="mb-0">Industry Title </h6>
                                                </div>
                                                <div class="form-group col-sm-4 text-secondary">
                                                    <select data-placeholder="Select Your tags" class="form-control select"
                                                        id="industry_id" name="industry_id" multiple="multiple"
                                                        data-tags="false" data-maximum-input-length="30">
                                                        @foreach ($industries as $industrie)
                                                            <option value="{{ $industrie->id }}">{{ $industrie->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row mb-3">

                                                        <div class="col-sm-12">
                                                            <h6 class="mb-0">Banner Image </h6>
                                                        </div>
                                                        <div class="col-sm-12 text-secondary">
                                                            <input type="file" name="banner_image" class="form-control"
                                                                id="image" accept="image/*" />
                                                            <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                            <img id="showImage" height="50px" width="70px"
                                                                src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12">
                                                            <h6 class="mb-0">Solution Name</h6>
                                                        </div>
                                                        <div class="form-group col-sm-12 text-secondary">
                                                            <input type="text" name="name"
                                                                class="form-control maxlength" maxlength="100" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-1"></div>
                                                <div class="col-sm-2">
                                                    <h6 class="mb-0">Solution Header</h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <textarea name="header" id="" class="form-control" cols="40" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Banner Section-->

                                        <!--Row One With List-->
                                        <div class="row border my-2 p-3">
                                            <div class="col-12 text-center">
                                                <h5 class="border-bottom pb-2">Row One With List</h5>
                                            </div>
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Row with List ID </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="row_one_id" data-placeholder="Select row_one_id.."
                                                    class="form-control select p-1 ">
                                                    <option></option>
                                                    @foreach ($rows as $row)
                                                        <option class="form-control" value="{{ $row->id }}">
                                                            {{ $row->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!--End Row One With List-->


                                        <!--Row Two with Solution Card-->
                                        <div class="row border my-2 py-2">
                                            <div class="col-12 text-center">
                                                <h5 class="border-bottom pb-2">Row Two with Solution Card</h5>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Solution Card Section Title </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="row_two_title"
                                                        class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">

                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Solution Card Section Header</h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <textarea name="row_two_header" id="" class="form-control" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12">
                                                            <h6 class="mb-0">Solution Card-1 </h6>
                                                        </div>
                                                        <div class="form-group col-sm-12 text-secondary">
                                                            <select name="solution_card_one_id"
                                                                data-placeholder="Select Solution Card-1.."
                                                                class="form-control select">
                                                                <option></option>
                                                                @foreach ($solution_cards as $solution_card)
                                                                    <option class="form-control"
                                                                        value="{{ $solution_card->id }}">
                                                                        {{ $solution_card->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12">
                                                            <h6 class="mb-0">Solution Card-2 </h6>
                                                        </div>
                                                        <div class="form-group col-sm-12 text-secondary">
                                                            <select name="solution_card_two_id"
                                                                data-placeholder="Select Solution Card-2.."
                                                                class="form-control select">
                                                                <option></option>
                                                                @foreach ($solution_cards as $solution_card)
                                                                    <option class="form-control"
                                                                        value="{{ $solution_card->id }}">
                                                                        {{ $solution_card->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12">
                                                            <h6 class="mb-0">Solution Card-3 </h6>
                                                        </div>
                                                        <div class="form-group col-sm-12 text-secondary">
                                                            <select name="solution_card_three_id"
                                                                data-placeholder="Select Solution Card-3..."
                                                                class="form-control select">
                                                                <option></option>
                                                                @foreach ($solution_cards as $solution_card)
                                                                    <option class="form-control"
                                                                        value="{{ $solution_card->id }}">
                                                                        {{ $solution_card->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-3"></div>
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12">
                                                            <h6 class="mb-0">Solution Card-4 </h6>
                                                        </div>
                                                        <div class="form-group col-sm-12 text-secondary">
                                                            <select name="solution_card_four_id"
                                                                data-placeholder="Select Solution Card-4..."
                                                                class="form-control select">
                                                                <option></option>
                                                                @foreach ($solution_cards as $solution_card)
                                                                    <option class="form-control"
                                                                        value="{{ $solution_card->id }}">
                                                                        {{ $solution_card->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-12">
                                                            <h6 class="mb-0">Solution Card-5 </h6>
                                                        </div>
                                                        <div class="form-group col-sm-12 text-secondary">
                                                            <select name="solution_card_five_id"
                                                                data-placeholder="Select Solution Card-5..."
                                                                class="form-control select">
                                                                <option></option>
                                                                @foreach ($solution_cards as $solution_card)
                                                                    <option class="form-control"
                                                                        value="{{ $solution_card->id }}">
                                                                        {{ $solution_card->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Row Two with Solution Card-->



                                        <!--Row Three with Background Color-->

                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h5 class="border-bottom pb-2">Row Three with Background Color</h5>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Title </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="row_three_title"
                                                        class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Header</h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <textarea name="row_three_header" id="" class="form-control" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!--End Row Three with Background Color-->


                                        <!--Row Four with Right side Image-->
                                        <div class="row border my-2 p-3">
                                            <div class="col-12 text-center">
                                                <h5 class="border-bottom pb-2">Row Four with Right side Image</h5>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Row Four ID </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <select name="row_four_id" data-placeholder="Select .."
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
                                        <!--End Row Four with Right side Image-->

                                        <!--Row Five with Solution Card-->
                                        <div class="row border my-2 p-3">
                                            <div class="col-12 text-center">
                                                <h5 class="border-bottom pb-2">Row Five with Solution Card</h5>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0"> Title </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="row_five_title"
                                                        class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0"> Header</h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <textarea name="row_five_header" id="" class="form-control" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <h6 class="mb-0">Solution Card-6 </h6>
                                                    </div>
                                                    <div class="form-group col-sm-12 text-secondary">
                                                        <select name="solution_card_six_id"
                                                            data-placeholder="Select Solution Card-6.."
                                                            class="form-control select">
                                                            <option></option>
                                                            @foreach ($solution_cards as $solution_card)
                                                                <option class="form-control"
                                                                    value="{{ $solution_card->id }}">
                                                                    {{ $solution_card->title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <h6 class="mb-0">Solution Card-7 </h6>
                                                    </div>
                                                    <div class="form-group col-sm-12 text-secondary">
                                                        <select name="solution_card_seven_id"
                                                            data-placeholder="Select Solution Card-7.."
                                                            class="form-control select">
                                                            <option></option>
                                                            @foreach ($solution_cards as $solution_card)
                                                                <option class="form-control"
                                                                    value="{{ $solution_card->id }}">
                                                                    {{ $solution_card->title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <h6 class="mb-0">Solution Card-8 </h6>
                                                    </div>
                                                    <div class="form-group col-sm-12 text-secondary">
                                                        <select name="solution_card_eight_id"
                                                            data-placeholder="Select Solution Card-8.."
                                                            class="form-control select">
                                                            <option></option>
                                                            @foreach ($solution_cards as $solution_card)
                                                                <option class="form-control"
                                                                    value="{{ $solution_card->id }}">
                                                                    {{ $solution_card->title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Row Five with Solution Card-->

                                        <!--Row six with Left side Image-->
                                        <div class="row border my-2 p-3">
                                            <div class="col-12 text-center">
                                                <h5 class="border-bottom pb-2">Row Six with Left Side Image</h5>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Title </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="row_three_title"
                                                        class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Header</h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <textarea name="row_three_header" id="" class="form-control" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Row six with Left side Image-->


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
