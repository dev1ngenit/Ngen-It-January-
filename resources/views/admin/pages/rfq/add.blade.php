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
                        <span class="breadcrumb-item active">RFQ Management</span>
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
                            <h5 class="text-center">Add RFQ Form</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('rfq.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All RFQ
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

                                <div class="card-body">
                                    <form method="post" action="{{ route('rfq.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sales Man Id</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="sales_man_id" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose sales_man_id ">
                                                    <option></option>
                                                    @foreach ($sales_mans as $sales_man)
                                                        <option value="{{ $sales_man->id }}">{{ $sales_man->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0"> Name </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="name" required class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Email </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="email" name="email" required class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Phone </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="phone" required class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">company_name </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="company_name" required
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">license </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="license" required class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">registration_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="registration_id" required
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">pcn_number </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="pcn_number" required
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">authorization </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="authorization" required
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Message Type</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="message_type" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose message_type ">
                                                    <option></option>
                                                    <option value="rfq">RFQ
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Message</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="message" id="" class="form-control" cols="30" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Status</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        value="pending" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Pending
                                                    </label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        value="replied" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Replied
                                                    </label>
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
