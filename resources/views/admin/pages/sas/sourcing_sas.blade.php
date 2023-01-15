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
                        <span class="breadcrumb-item active">SAS</span>
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
                            <div class="table-responsive">
                                <table class="text-center productDT datatable table table-bordered table-hover">

                                    <tbody>
                                        <tr>
                                            <th width="60%" colspan="2">SAS Ref: </th>
                                            <th width="40%">SAS Create Date</th>
                                        </tr>
                                        <tr>

                                            <td colspan="2"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th width="60%">Item Name</th>
                                            <th width="20%">Cost (Cog Price)</th>
                                            <th width="20%">Sales</th>
                                        </tr>
                                        <tr>
                                            <td width="60%"></td>
                                            <td width="20%"><input type="text" name="cog_price" readonly value="500">
                                            </td>
                                            <td width="20%"><input type="text" name="sales_price" readonly value="">
                                            </td>
                                        </tr>

                                        <tr class="bg-dark text-white">
                                            <td class="text-white" colspan="3">Expenses</td>
                                        </tr>
                                        <tr>
                                            <td style="width:10rem;">Bank & Remittance Charge - (1.5%)</td>
                                            <td width="20%"><input type="text" name="bank_charge"></td>
                                            <td width="20%"><input type="text" name="" readonly value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="60%">Customs & Duty - (5.0%)</td>
                                            <td width="20%"><input type="text" name="customs"></td>
                                            <td width="20%"><input type="text" name="" readonly value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="60%">Tax / AIT / VAT - (10.0%)</td>
                                            <td width="20%"><input type="text" name="tax"></td>
                                            <td width="20%"><input type="text" name="" readonly value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="60%">HR , Office & Utility Cost- (5.0%)</td>
                                            <td width="20%"><input type="text" name="utility_cost"></td>
                                            <td width="20%"><input type="text" name="" readonly value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="60%">Shipping & Handling Cost- (5.0%)</td>
                                            <td width="20%"><input type="text" name="shiping_cost"></td>
                                            <td width="20%"><input type="text" name="" readonly value="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="60%">Sales / Consultancy Comission - (5.0%)</td>
                                            <td width="20%"><input type="text" name="sales_comission"></td>
                                            <td width="20%"><input type="text" name="" readonly value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="60%">Bank Loan / Liability / Debt - (5.0%)</td>
                                            <td width="20%"><input type="text" name="liability"></td>
                                            <td width="20%"><input type="text" name="" readonly value="">
                                            </td>
                                        </tr>
                                        <tr class="bg-dark">
                                            <td class="text-white" colspan="3">Offering Value Adding</td>
                                        </tr>
                                        <tr>
                                            <td width="60%">Promo / Deal / Regular Discounts</td>
                                            <td width="20%"><input type="text" name="regular_discounts"></td>
                                            <td width="20%"><input type="text" name="" readonly
                                                    value=""></td>
                                        </tr>
                                        <tr>
                                            <td width="60%">Deal Closing / Rebates</td>
                                            <td width="20%"><input type="text" name="rebates"></td>
                                            <td width="20%"><input type="text" name="" readonly
                                                    value=""></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="bg-dark text-white">Other Income</td>

                                        </tr>
                                        <tr>
                                            <td width="60%">Loan / Capital / Partner Share - (5%)</td>
                                            <td width="20%"><input type="text" name="capital_share"></td>
                                            <td width="20%"><input type="text" name="" readonly
                                                    value=""></td>
                                        </tr>
                                        <tr>
                                            <td style="width:60%;">Management Cost - (5%)</td>
                                            <td style="width:20%;"><input type="text" name="management_cost"></td>
                                            <td style="width:20%;"><input type="text" name="" readonly
                                                    value=""></td>
                                        </tr>
                                        <tr>
                                            <td style="width:60%;">Net Profit - (5%)</td>
                                            <td style="width:20%;"><input type="text" name="net_profit"></td>
                                            <td style="width:20%;"><input type="text" name="" readonly
                                                    value=""></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 60%;">Gross Profit (%) between Sales and Cost</td>
                                            <td style="width: 20%;"><input type="text" name="gross_profit" readonly
                                                value=""></td>
                                            <td style="width: 20%;">TK. <input type="text" name="" readonly
                                                value=""></td>
                                        </tr>

                                    </tbody>
                                </table>
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
        <script type="text/javascript">
            $(document).ready(function() {
                $("#myTable").on('input', '.txtCal', function() {
                    var calculated_total_sum = 0;
                    $("#myTable .txtCal").each(function() {
                        var get_textbox_value = $(this).val();
                        if ($.isNumeric(get_textbox_value)) {
                            calculated_total_sum += parseFloat(get_textbox_value);
                        }
                    });
                    $("#total_sum_value").html(calculated_total_sum);
                });
            });

            //*
        </script>
    @endpush
@endonce
