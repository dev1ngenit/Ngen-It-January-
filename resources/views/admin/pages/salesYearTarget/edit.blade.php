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
                            <a href="{{ route('salesYearTarget.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Sales Year Target
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

                                    <h5 class="mb-0 text-center">Add Sales Year Target Form</h5>

                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{ route('salesYearTarget.update', $salesYearTarget->id) }}">
                                        @csrf
                                        @method('PUT')

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Country Name</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="country_id" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose country name ">
                                                    <option></option>
                                                    @foreach ($country as $item)
                                                        <option @selected($item->id == $salesYearTarget->country_id)  value="{{ $item->id }}">{{ $item->country_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Fiscal Year</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $salesYearTarget->fiscal_year }}" name="fiscal_year" id="datepicker"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Year Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->year_target }}" name="year_target" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Quarter One Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->quarter_one_target }}" name="quarter_one_target"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Quarter Two Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->quarter_two_target }}" name="quarter_two_target"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Quarter Three Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->quarter_three_target }}" name="quarter_three_target"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Quarter Four Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->quarter_four_target }}" name="quarter_four_target"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Year Started</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="year_started" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose year started ">
                                                    <option></option>
                                                    <option @selected( $salesYearTarget->year_started == 'january') value="january">January</option>
                                                    <option @selected( $salesYearTarget->year_started == 'june') value="june">June</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">January Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->january_target }}" name="january_target"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">February Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->february_target }}" name="february_target"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">March Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->march_target }}" name="march_target" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">April Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->april_target }}" name="april_target" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">May Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->may_target }}" name="may_target" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">june Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->june_target }}" name="june_target" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">July Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->july_target }}" name="july_target" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">August Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->august_target }}" name="august_target" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">September Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->september_target }}" name="september_target"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">October Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->october_target }}" name="october_target"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">November Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->november_target }}" name="november_target"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">December Target</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="number" value="{{ $salesYearTarget->december_target }}" name="december_target"
                                                    class="form-control maxlength" maxlength="100" />
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
