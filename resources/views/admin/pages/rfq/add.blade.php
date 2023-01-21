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
                            <h5 class="text-center">Register a Deal</h5>
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
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div id="table1" class="card cardTd">

                                <div class="card-body">
                                    <form method="post" action="{{ route('rfq.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3 p-2 border">
                                            <div class="col-lg-4 mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Pq Code </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="pq_code" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Pqr Code One </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="pqr_code_one" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Pqr Code Two </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="pqr_code_two" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row mb-3 p-2 border">
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Create Date </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="date" name="create_date" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Closed date </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="date" name="close_date" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3 p-2 border">
                                            <div class="col-lg-12 mb-3">
                                                <h5 class="text-center">Assigned Sales Manager</h5>
                                            </div>

                                            <div class="col-lg-4 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Sales Manager Name (Leader - L1) <span class="text-danger">*</span></h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="sales_man_id_L1" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose  ">
                                                        <option></option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Sales Manager Name (Team - T1)</h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="sales_man_id_T1" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose  ">
                                                        <option></option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Sales Manager Name (Team - T2)</h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="sales_man_id_T2" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose ">
                                                        <option></option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row mb-3 p-2 border">
                                            <div class="col-lg-4 mb-3">
                                                <div class="col-sm-8">
                                                    <h6 class="mb-0">Client Type <span class="text-danger">*</span></h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="client_type" class="form-control select client_select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Chose client Type">
                                                        <option></option>
                                                        <option class="form-select" value="client">
                                                            Client
                                                        </option>
                                                        <option class="form-select" value="partner">
                                                            Partner</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3 client_display d-none">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Select Client <span class="text-danger">*</span></h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-8">
                                                    <select name="client_id" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Chose client_id ">
                                                        <option></option>
                                                        @foreach ($products as $product)
                                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3 partner_display d-none">
                                                <div class="col-sm-6">
                                                    <h6 class="mb-0">Select Partner <span class="text-danger">*</span></h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-8">
                                                    <select name="solution_id" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose solution_id ">
                                                        <option></option>
                                                        @foreach ($partners as $partner)
                                                            <option value="{{ $partner->id }}">{{ $partner->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row mb-3 p-2 border">
                                            <div class="col-lg-12">
                                                <h5 class="text-center">Client Details</h5>
                                            </div>
                                            <div class="col-lg-3 mb-3">

                                                <div class="col-sm-12">
                                                    <h6 class="mb-0"> Name<span class="text-danger">*</span> </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="name" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Email<span class="text-danger">*</span> </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="email" name="email" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Phone<span class="text-danger">*</span> </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="phone" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Company Name </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="company_name" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Designation </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="designation" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-5 mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Address </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="address" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3 p-2 border">
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Product Name</h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-8">
                                                    <select name="product_id" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Chose product_id ">
                                                        <option></option>
                                                        @foreach ($clients as $client)
                                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Solution Name</h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-8">
                                                    <select name="partner_id" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Chose partner_id ">
                                                        <option></option>
                                                        @foreach ($solution_details as $solution_detail)
                                                            <option value="{{ $solution_detail->id }}">
                                                                {{ $solution_detail->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3 p-2 border"></div>

                                        <div class="row mb-3 p-2 border">
                                            <h5 class="text-center">Price Section</h5>
                                            <div class="col-lg-3 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Tax </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="tax" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Vat </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="vat" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Total Price </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="total_price" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Price Text</h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="price_text" class="form-control maxlength"
                                                        maxlength="200" />
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row mb-3 p-2 border">
                                            <div class="col-lg-12">
                                                <h5 class="text-center">Terms & Conditions</h5>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Validity </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="validity" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Payment </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="payment" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Payment Mode </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="payment_mode" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Delivery </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="delivery" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Delivery Location </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="delivery_location" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Product Order </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="product_order" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Installation Support </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="installation_support" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Pmt Condition </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="pmt_condition" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Terms Nine </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="terms_nine" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Terms Ten </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="terms_ten" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Terms Eleven </h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="text" name="terms_eleven" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>

                                        </div>


                                        {{-- <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Call</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="call"
                                                        value="1" id="call">
                                                    <label class="form-check-label" for="call">
                                                        Call Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="row mb-3 p-2 border">
                                            <div class="col-lg-3 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Quantity</h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <input type="number" name="qty" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Image </h6>
                                                </div>
                                                <div class="col-sm-12 text-secondary">
                                                    <input type="file" name="image" class="form-control" id="image"
                                                        accept="image/*" />
                                                    <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                    {{-- <img class="img-thumbnail" id="showImage" height="80px" width="80px"  src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png" alt=""> --}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0">Message</h6>
                                                </div>
                                                <div class="form-group col-sm-12 text-secondary">
                                                    <textarea name="message" id="" class="form-control" rows="3"></textarea>
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
@endpush
@endonce
