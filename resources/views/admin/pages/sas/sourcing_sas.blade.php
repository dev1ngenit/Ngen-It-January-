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
            <form action="" method="post">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table
                                        class="text-center sasDT datatable table table-bordered table-hover">

                                        <thead>
                                            <tr>
                                                <th width="60%" colspan="2">SAS Ref: </th>
                                                <th width="40%">SAS Create Date</th>
                                            </tr>
                                            <tr>

                                                <td colspan="2">{{$product->ref_code}} <input type="hidden" name="ref_code" value="{{$product->ref_code}}"></td>
                                                <td>{{ \Carbon\Carbon::now() }}</td>
                                            </tr>
                                            <tr>
                                                <th width="60%">Item Name</th>
                                                <th width="20%">Cost (Cog Price)</th>
                                                <th width="20%">Sales</th>
                                            </tr>
                                            <tr>
                                                <td width="60%">{{$product->name}}</td>
                                                @if ($product->source_one_approval == 1)
                                                <input type="hidden" id="source_price" value="{{$product->source_one_approval}}">
                                                <td width="20%"><input type="text" name="cog_price" readonly value="{{$product->source_one_price}}" id="price1">
                                                </td>
                                                @else
                                                <td width="20%"><input type="text" name="cog_price" readonly value="{{$product->source_two_price}}" id="price2">
                                                </td>
                                                @endif

                                                <td width="20%"><input class="sales_price" type="text" name="sales_price" readonly value="">
                                                </td>
                                            </tr>
                                        </thead>

                                        <tbody class="tb">


                                            <tr class="bg-dark text-white">
                                                <td class="text-white" colspan="3">Expenses</td>
                                            </tr>
                                            <tr>
                                                <td style="width:10rem;">Bank & Remittance Charge - (1.5%)</td>
                                                <td width="20%"><input class="multiplyValue" type="number"
                                                        name="bank_charge"></td>
                                                <td width="20%"><input type="number" class="result" readonly value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Customs & Duty - (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="number" name="customs">
                                                </td>
                                                <td width="20%"><input type="number" class="result" readonly value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Tax / AIT / VAT - (10.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="number" name="tax">
                                                </td>
                                                <td width="20%"><input class="result" type="number" readonly value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">HR , Office & Utility Cost- (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="number"
                                                        name="utility_cost">
                                                </td>
                                                <td width="20%"><input class="result" type="number" readonly value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Shipping & Handling Cost- (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="number"
                                                        name="shiping_cost">
                                                </td>
                                                <td width="20%"><input class="result" type="number" readonly value="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="60%">Sales / Consultancy Comission - (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="number"
                                                        name="sales_comission">
                                                </td>
                                                <td width="20%"><input class="result" type="number" readonly value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Bank Loan / Liability / Debt - (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="number" name="liability">
                                                </td>
                                                <td width="20%"><input class="result" type="number" readonly value="">
                                                </td>
                                            </tr>
                                            <tr class="bg-dark">
                                                <td class="text-white" colspan="3">Offering Value Adding</td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Promo / Deal / Regular Discounts</td>
                                                <td width="20%"><input class="multiplyValue" type="number"
                                                        name="regular_discounts"></td>
                                                <td width="20%"><input class="result" type="number" readonly value=""></td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Deal Closing / Rebates</td>
                                                <td width="20%"><input class="multiplyValue" type="number"
                                                        name="rebates"></td>
                                                <td width="20%"><input class="result" type="number" readonly value=""></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="bg-dark text-white">Other Income</td>

                                            </tr>
                                            <tr>
                                                <td width="60%">Loan / Capital / Partner Share - (5%)</td>
                                                <td width="20%"><input class="multiplyValue" type="number"
                                                        name="capital_share"></td>
                                                <td width="20%"><input class="result" type="number" readonly value=""></td>
                                            </tr>
                                            <tr>
                                                <td style="width:60%;">Management Cost - (5%)</td>
                                                <td style="width:20%;"><input class="multiplyValue" type="number"
                                                        name="management_cost"></td>
                                                <td style="width:20%;"><input class="result" type="number" readonly value=""></td>
                                            </tr>
                                            <tr>
                                                <td style="width:60%;">Net Profit - (5%)</td>
                                                <td style="width:20%;"><input class="multiplyValue" type="number"
                                                        name="net_profit"></td>
                                                <td style="width:20%;"><input class="result" type="number" readonly value=""></td>
                                            </tr>
                                            <tr>
                                                <td style="width:60%;">Gross Profit (%) between Sales and Cost</td>
                                                <td style="width:20%;">TK. <input class="gross_profit_subtot" type="number"
                                                        name="gross_profit" readonly value=""></td>
                                                <td style="width: 20%;">TK. <input type="number" class="additional_subtot"
                                                        readonly value="">
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="text-center">Compare with Competetors</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-center datatable table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Competetor Name</th>
                                                <th>Price</th>
                                                <th>Our Price</th>
                                                <th>Difference</th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <td>{{$product->competetor_one_name}}</td>
                                                    <td>{{$product->competetor_one_price}} <input type="hidden" id="competetor_price1" value="{{$product->competetor_one_price}}"></td>
                                                    <td><h6 id="ourprice1"></h6></td>
                                                    <td><h6 id="difference1"></h6></td>
                                                </tr>
                                                <tr>
                                                    <td>{{$product->competetor_two_name}}</td>
                                                    <td>{{$product->competetor_two_price}}<input type="hidden" id="competetor_price2" value="{{$product->competetor_two_price}}"></td>
                                                    <td><h6 id="ourprice2"></h6></td>
                                                    <td><h6 id="difference2"></h6></td>
                                                </tr>

                                            </tbody>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-primary mx-3" name="action" id="submitbtn">Send For Approval<i
                            class="ph-paper-plane-tilt mx-2"></i></button>
                    </div>

                </div>
            </form>
        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.multiplyValue').on('keyup change', function() {

                if ($('#source_price').val() == 1 ) {
                var $price = $('#price1').val();
               } else {
                var $price = $('#price2').val();
               }
                var profit = 0;
                var additional = 0;
                var $sales_price = 0;
           // for each row:
           $("tbody.tb tr").each(function () {
               // get the values from this row:
               var $value = $('.multiplyValue', this).val();

               var $result = ($price * $value) / 100;
               // set total for the row
               $('.result', this).val($result);


               var $mlval = parseFloat($('.multiplyValue', this).val());
                profit += isNaN($mlval) ? 0 : $mlval;
                var $stval = parseFloat($result);
                additional += isNaN($stval) ? 0 : $stval;

               //mult += $total;


           });
           var $additional = additional;
           var $sales_price = parseFloat($price) + parseFloat($additional);
           var difference1 = parseFloat($('#competetor_price1').val()) - parseFloat($sales_price);
           var difference2 = parseFloat($('#competetor_price2').val()) - parseFloat($sales_price);

           //alert($sales_price);
                $('.gross_profit_subtot').val(profit);
                $('.additional_subtot').val(additional);
                $('.sales_price').val($sales_price);
                $('#ourprice1').html($sales_price);
                $('#ourprice2').html($sales_price);
                $('#difference1').html(difference1);
                $('#difference2').html(difference2);

            });
            //*
        </script>
    @endpush
@endonce
