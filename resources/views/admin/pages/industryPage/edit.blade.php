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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <h5 class="text-center">Industry Page message edit</h5>
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
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div id="table1" class="card cardTd">
                                <div class="card-header">

                                    <h5 class="mb-0 text-center">Add Industry Page Form</h5>

                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{ route('industryPage.update', $industryPage->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">industry_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="industry_id" data-placeholder="Select industry_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($industries as $industrie)
                                                        <option @if ($industrie->id == $industryPage->industry_id) selected @endif
                                                            class="form-control" value="{{ $industrie->id }}">
                                                            {{ $industrie->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_one_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="row_one_id" data-placeholder="Select row_one_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($rows as $row)
                                                        <option @if ($row->id == $industryPage->row_one_id) selected @endif
                                                            class="form-control" value="{{ $row->id }}">
                                                            {{ $row->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_three_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="row_three_id" data-placeholder="Select row_three_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($rows as $row)
                                                        <option @if ($row->id == $industryPage->row_three_id) selected @endif
                                                            class="form-control" value="{{ $row->id }}">
                                                            {{ $row->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_five_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="row_five_id" data-placeholder="Select row_five_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($rows as $row)
                                                        <option @if ($row->id == $industryPage->row_five_id) selected @endif
                                                            class="form-control" value="{{ $row->id }}">
                                                            {{ $row->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">solution_one_id </h6>
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
                                                <h6 class="mb-0">solution_two_id </h6>
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
                                                <h6 class="mb-0">solution_three_id </h6>
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
                                                <h6 class="mb-0">solution_four_id </h6>
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
                                                <h6 class="mb-0">client_story_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="client_story_id" data-placeholder="Select client_story_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($clients as $client)
                                                        <option @if ($client->id == $industryPage->client_story_id) selected @endif
                                                            class="form-control" value="{{ $client->id }}">
                                                            {{ $client->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">btn_one_name </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $industryPage->btn_one_name }}"
                                                    name="btn_one_name" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">btn_one_link </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $industryPage->btn_one_link }}"
                                                    name="btn_one_link" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_four_title </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $industryPage->row_four_title }}"
                                                    name="row_four_title" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_four_col_one_title </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $industryPage->row_four_col_one_title }}"
                                                    name="row_four_col_one_title" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_four_col_two_title </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $industryPage->row_four_col_two_title }}"
                                                    name="row_four_col_two_title" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">footer_title </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $industryPage->footer_title }}"
                                                    name="footer_title" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">header</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="header" id="" class="form-control" cols="30" rows="3">{{ $industryPage->header }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_four_header</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="row_four_header" id="" class="form-control" cols="30" rows="3">{{ $industryPage->row_four_header }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_four_col_one_header</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="row_four_col_one_header" id="" class="form-control" cols="30" rows="3">{{ $industryPage->row_four_col_one_header }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_four_col_two_header</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="row_four_col_two_header" id="" class="form-control" cols="30" rows="3">{{ $industryPage->row_four_col_two_header }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">footer_header</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="footer_header" id="" class="form-control" cols="30" rows="3">{{ $industryPage->footer_header }}</textarea>
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
