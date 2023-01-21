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
                        <span class="breadcrumb-item active">Sales Team Target</span>
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
                            <h5 class="text-center">Set Target For Team</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('rfq.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Targets
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
                                    <form method="post" action="{{ route('rfq.store') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row mb-3 p-2 border">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-4">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Sales Manager Name<span class="text-danger">*</span></h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-8">
                                                    <select name="sales_man_id" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose  ">
                                                        <option></option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
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
                                                    <input class="form-control" type="text" id="datepicker" name="fiscal_year"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-4">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Total Target </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="validity" class="form-control maxlength"
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

@once
@push('scripts')
<script>
    $('.client_select').on('change', function() {

            var client_value = $(this).find(":selected").val() ;

            if (client_value == 'client') {
                $(".client_display").removeClass("d-none");
                $(".partner_display").addClass("d-none");
            }
            else if (client_value == 'partner'){
                $(".partner_display").removeClass("d-none");
                $(".client_display").addClass("d-none");
            }
            else {
                $(".partner_display").addClass("d-none");
                $(".client_display").addClass("d-none");
            }

        });
</script>
<script>


        $("#datepicker").on('change', function(){
        alert(10);
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'yy',
        onClose: function(dateText, inst) {
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, 1));
        }
    });
 $(".date-picker-year").focus(function () {
        $(".ui-datepicker-month").hide();
    });

</script>
@endpush
@push('styles')
<style>
 .ui-datepicker-calendar {
    display: none;
 }
 .ui-datepicker-month {
    display: none;
 }
 .ui-datepicker-next,.ui-datepicker-prev {
   display:none;
 }
</style>
@endpush
@endonce
