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
                        <span class="breadcrumb-item active">Industry Page Management</span>
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
                            <h5 class="text-center">Add Industry Page Form</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('industryPage.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Industry Page
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
                                    <form method="post" action="{{ route('industryPage.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="row border mb-3">
                                            <div class="col-lg-4">
                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <h6 class="mb-0">Industry Id <span class="text-danger">*</span></h6>
                                                    </div>
                                                    <div class="form-group col-sm-12 text-secondary">
                                                        <select name="industry_id" data-placeholder="Select industry_id.."
                                                            class="form-control select">
                                                            <option></option>
                                                            @foreach ($industries as $industrie)
                                                                <option class="form-control" value="{{ $industrie->id }}">
                                                                    {{ $industrie->title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <h6 class="mb-0">Header</h6>
                                                    </div>
                                                    <div class="form-group col-sm-12 text-secondary">
                                                        <textarea name="header" id="" class="form-control" cols="30" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Row One ID <span class="text-danger">*</span></h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="row_one_id" data-placeholder="Select row_one_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($rows as $row)
                                                        <option class="form-control" value="{{ $row->id }}">
                                                            {{ $row->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Row Three ID <span class="text-danger">*</span></h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="row_three_id" data-placeholder="Select row_three_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($rows as $row)
                                                        <option class="form-control" value="{{ $row->id }}">
                                                            {{ $row->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Row Five Id <span class="text-danger">*</span></h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="row_five_id" data-placeholder="Select row_five_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($rows as $row)
                                                        <option class="form-control" value="{{ $row->id }}">
                                                            {{ $row->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Solution One </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="solution_one_id" data-placeholder="Select solution_one_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    <option class="form-control" value="">
                                                        solution_one_id</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Solution Two  </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="solution_two_id" data-placeholder="Select solution_two_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    <option class="form-control" value="">
                                                        solution_two_id</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Solution Three </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="solution_three_id"
                                                    data-placeholder="Select solution_three_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    <option class="form-control" value="">
                                                        solution_three_id</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Solution Four </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="solution_four_id"
                                                    data-placeholder="Select solution_four_id.."
                                                    class="form-control select">
                                                    <option></option>

                                                    <option class="form-control" value="">
                                                        solution_four_id</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Client Story <span class="text-danger">*</span></h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="client_story_id" data-placeholder="Select client_story_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($clients as $client)
                                                        <option class="form-control" value="{{ $client->id }}">
                                                            {{ $client->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Button One Name</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="btn_one_name" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Button One link </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="btn_one_link" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>



                                        <div class="row border my-3">
                                            <div class="row">
                                                <h6 class="text-center">Row Four</h6>
                                                <hr>
                                            </div>
                                            <div class="row">
                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <h6 class="mb-0">Row Four title </h6>
                                                    </div>
                                                    <div class="form-group col-sm-12 text-secondary">
                                                        <input type="text" name="row_four_title"
                                                            class="form-control maxlength" maxlength="100" />
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <h6 class="mb-0">Row Four Header</h6>
                                                    </div>
                                                    <div class="form-group col-sm-12 text-secondary">
                                                        <textarea name="row_four_header" id="" class="form-control" cols="30" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <h6 class="mb-0">Row Four Column One title </h6>
                                                    </div>
                                                    <div class="form-group col-sm-12 text-secondary">
                                                        <input type="text" name="row_four_col_one_title"
                                                            class="form-control maxlength" maxlength="100" />
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <h6 class="mb-0">Row Four Column One Header</h6>
                                                    </div>
                                                    <div class="form-group col-sm-12 text-secondary">
                                                        <textarea name="row_four_col_one_header" id="" class="form-control" cols="30" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <h6 class="mb-0">Row Four Column Two title </h6>
                                                    </div>
                                                    <div class="form-group col-sm-12 text-secondary">
                                                        <input type="text" name="row_four_col_two_title"
                                                            class="form-control maxlength" maxlength="100" />
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <h6 class="mb-0">Row Four Column Two Header</h6>
                                                    </div>
                                                    <div class="form-group col-sm-12 text-secondary">
                                                        <textarea name="row_four_col_two_header" id="" class="form-control" cols="30" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row border my-3">
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Footer Title </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="footer_title" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Footer Header</h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <textarea name="footer_header" id="" class="form-control" cols="30" rows="3"></textarea>
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
            </div>


        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection
