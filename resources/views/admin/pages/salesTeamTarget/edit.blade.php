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
                            <h5 class="text-center">Sales Year Target message edit</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('salesTeamTarget.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Sales Team Target
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

                                    <h5 class="mb-0 text-center">Add Sales Team Target Form</h5>

                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{ route('salesTeamTarget.update', $salesTeamTarget->id) }}">
                                        @csrf
                                        @method('PUT')

                                        <div class="row mb-3 p-2 border">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-6">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Sales Manager Name<span class="text-danger">*</span></h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-8">
                                                    <select name="sales_man_id" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose  ">
                                                        <option></option>
                                                        @foreach ($users as $user)
                                                            <option @selected($user->id == $salesTeamTarget->sales_man_id) value="{{ $user->id }}">{{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3 p-2 border">
                                            <div class="col-lg-4">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Fiscal Year<span class="text-danger">*</span></h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    {{-- <input class="form-control yearselect" type="text" name="fiscal_year"/> --}}
                                                    <select class="yearselect form-select" value="{{ $salesTeamTarget->fiscal_year }}" name="fiscal_year"></select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Year Started</h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="year_started" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Chose year started ">
                                                        <option></option>
                                                        <option @selected( $salesTeamTarget->year_started =='january')  value="january">January</option>
                                                        <option @selected( $salesTeamTarget->year_started =='june') value="june">June</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Total Target </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" value="{{ $salesTeamTarget->year_target }}" name="year_target" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3 p-2 border">
                                            <div class="col-lg-6">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Quarter One </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" value="{{ $salesTeamTarget->quarter_one_target }}" name="quarter_one_target" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Quarter Two </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" value="{{ $salesTeamTarget->quarter_two_target }}" name="quarter_two_target" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Quarter Three </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" value="{{ $salesTeamTarget->quarter_three_target }}" name="quarter_three_target" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Quarter Four </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" value="{{ $salesTeamTarget->quarter_four_target }}" name="quarter_four_target" class="form-control maxlength"
                                                        maxlength="100" />
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
