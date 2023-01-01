@extends('partner.master')
@section('content')

<div class="content-wrapper">

    <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Dashboard</span>
                    </div>

                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>

                <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                    <div class="d-lg-flex mb-2 mb-lg-0">
                        <a href="#" class="d-flex align-items-center text-body py-2">
                            <i class="ph-lifebuoy me-2"></i>
                            Support
                        </a>

                        <div class="dropdown ms-lg-3">
                            <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                <i class="ph-gear me-2"></i>
                                <span class="flex-1">Settings</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-shield-warning me-2"></i>
                                    Account security
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-chart-bar me-2"></i>
                                    Analytics
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-lock-key me-2"></i>
                                    Privacy
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-gear me-2"></i>
                                    All settings
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            @if (Auth::guard('partner')->user()->status == 'active')
                <!--Business Operation -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center mb-0">Business Operation</h5>
                    </div>
                    <div class="card-body">
                            <!-- /row - 1 -->
                        <div class="row">
                            <div class="col-lg-3">

                                <!-- Members online -->
                                <div class="card bg-warning">
                                    <div class="card-body">
                                        <div class="row mb-1 border border-3 br-7">
                                            <a href="" class="text-black">
                                                <h4 class="text-center mb-0 text-black">Total Order  :  80 </h4>
                                            </a>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-lg-5 border br-7">
                                                <h6 class="p-1 pt-3">Current Order</h6>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="mb-1 border col-12 br-7">
                                                    <a href="" class="text-white">
                                                        <p class="text-center mb-0 text-black">Pending  :  80000 </p>
                                                    </a>
                                                </div>
                                                <div class="mb-1 border col-12 br-7">
                                                    <a href="" class="text-white">
                                                        <p class="text-center mb-0 text-black">On Process  :  80 </p>
                                                    </a>
                                                </div>
                                                <div class="mb-0 border col-12 br-7">
                                                    <a href="" class="text-white">
                                                        <p class="text-center mb-0 text-black">On Delivery  :  80 </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- /members online -->

                            </div>

                            <div class="col-lg-3">

                                <!-- Current server load -->
                                 {{-- <div class="card text-white">

                                    <div class="card-body">


                                    </div>


                                </div> --}}
                                <div class="row mb-0 border border-3 bg-dark">
                                    <a href="" class="text-white">
                                        <h5 class="text-center mb-0 text-white">Total Payemnt <span class="small">({{ date('Y') }})</span>  :  80 </h5>
                                    </a>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-lg-12 p-1 border border-3">
                                        <a href="" class="text-white">
                                            <p class="text-center mb-0 text-black">Payment Done (Verified)  :  80 </p>
                                        </a>
                                    </div>
                                    <div class="col-lg-12 p-1 border border-3 p-0">
                                        <a href="" class="text-white">
                                            <p class="text-center mb-0 text-black">Payment Dues (Verified)  :  80</p>
                                        </a>
                                    </div>

                                </div>
                                <!-- /current server load -->

                            </div>

                            <div class="col-lg-3">

                                <!-- Today's revenue -->
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <div class="row mb-0">
                                            <div class="col-lg-12 mb-1 p-1 border border-3 br-7">
                                                <a href="" class="text-black">
                                                    <h5 class="text-center mb-0 text-black">Purchase <span class="small">({{ date('M') }})</span>  :  80 </h5>
                                                </a>
                                            </div>
                                            <div class="col-lg-12 mb-1 p-1 border border-3 br-7">
                                                <a href="" class="text-white text-center">
                                                    <p class="text-center mb-0 text-black">Purchase Needed :  80 </p>
                                                    <span class="small text-white text-center">(Needed to be checked)</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /today's revenue -->

                            </div>

                            <div class="col-lg-3">

                                <!-- Today's revenue -->
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <div class="row mb-0">
                                            <div class="col-lg-5 border br-7">
                                                <h5 class="p-1 pt-3 text-black">Delivery</h5>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="mb-1 border col-12 br-7">
                                                    <a href="" class="text-white">
                                                        <p class="text-center mb-0 text-black">Pending  :  80000 </p>
                                                    </a>
                                                </div>
                                                <div class="mb-1 border col-12 br-7">
                                                    <a href="" class="text-white">
                                                        <p class="text-center mb-0 text-black">On Process  :  80 </p>
                                                    </a>
                                                </div>
                                                <div class="mb-0 border col-12 br-7">
                                                    <a href="" class="text-white">
                                                        <p class="text-center mb-0 text-black">Done  :  80 </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /today's revenue -->

                            </div>
                        </div>
                            <!-- /row - 1 -->
                            <!-- /row - 2 -->
                        <div class="row">
                            <div class="col-lg-4">

                                <!-- Members online -->
                                <div class="card bg-warning">
                                    <div class="card-body">
                                        <div class="row mb-0 border border-3 br-7">
                                            <a href="" class="text-black">
                                                <h4 class="text-center mb-0 text-black">Sales <span class="small">({{ date('M') }} )</span>  :  80 </h4>
                                            </a>
                                        </div>

                                        <div class="row mb-0 mt-1">
                                            <div class="col-lg-5 mr-2 p-1 border border-3 br-7">
                                                <a href="" class="text-white">
                                                    <p class="text-center mb-0 text-black">Today's Sale   :  80 </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 p-1 border border-3 p-0 br-7">
                                                    <a href="" class="text-white">
                                                        <p class="text-center mb-0 text-black">Weekly Sale  :  80 </p>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /members online -->

                            </div>

                            <div class="col-lg-4">

                                <!-- Current server load -->
                                <div class="card bg-pink text-white">
                                    <div class="card-body">
                                        <div class="row mb-0 border border-3 br-7">
                                            <a href="" class="text-black">
                                                <h4 class="text-center mb-0 text-black">Total RFQ   :  80 </h4>
                                            </a>
                                        </div>

                                        <div class="row mb-0 mt-1">
                                            <div class="col-lg-5 mr-1 p-1 border border-3 br-7">
                                                <a href="" class="text-white">
                                                    <p class="text-center mb-0 text-black">Pending   :  80 </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 p-1 border border-3 p-0 br-7">
                                                    <a href="" class="text-white">
                                                        <p class="text-center mb-0 text-black">Follow Up  :  80 </p>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /current server load -->

                            </div>

                            <div class="col-lg-4">

                                <!-- Today's revenue -->
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <div class="row mb-0 border border-3 br-7">
                                            <a href="" class="text-black">
                                                <h4 class="text-center mb-0 text-black">Marketing <span class="small">({{ date('M') }})</span>  :  80 </h4>
                                            </a>
                                        </div>

                                        <div class="row mb-0 mt-1">
                                            <div class="col-lg-5 mr-1 p-1 border border-3 br-7">
                                                <a href="" class="text-white">
                                                    <p class="text-center mb-0 text-black">Today   :  80 </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 p-1 border border-3 p-0 br-7">
                                                    <a href="" class="text-white">
                                                        <p class="text-center mb-0 text-black">Weekly  :  80 </p>
                                                    </a>
                                            </div>
                                        </div>

                                        <div class="row mb-0 mt-1">
                                            <div class="col-lg-5 mr-1 p-1 border border-3 br-7">
                                                <a href="" class="text-white">
                                                    <p class="text-center mb-0 text-black">Email   :  80 </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 p-1 border border-3 p-0 br-7">
                                                    <a href="" class="text-white">
                                                        <p class="text-center mb-0 text-black">Blog  :  80 </p>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /today's revenue -->

                            </div>


                        </div>
                            <!-- /row - 2 -->
                            <!-- /row - 3 -->
                            <div class="row">


                                <div class="col-lg-3">

                                    <!-- Today's revenue -->
                                    <div class="card bg-info text-white">
                                        <div class="card-body">
                                            <div class="row mb-0">
                                                <div class="col-lg-12 mb-1 p-1 border border-3 br-7">
                                                    <a href="" class="text-black">
                                                        <h5 class="text-center mb-0 text-black">Total Partners  :  80 </h5>
                                                    </a>
                                                </div>
                                                <div class="col-lg-12 mb-1 p-1 border border-3 br-7">
                                                    <a href="" class="text-white text-center">
                                                        <p class="text-center mb-0 text-black">Approval Pending :  80 </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /today's revenue -->

                                </div>

                                <div class="col-lg-3">

                                    <!-- Today's revenue -->
                                    <div class="card bg-success text-white">
                                        <div class="card-body">
                                            <div class="row mb-0">
                                                <div class="col-lg-12 mb-1 p-1 border border-3 br-7">
                                                    <a href="" class="text-black">
                                                        <h5 class="text-center mb-0 text-black">Total Clients  :  80 </h5>
                                                    </a>
                                                </div>
                                                <div class="col-lg-12 mb-1 p-1 border border-3 br-7">
                                                    <a href="" class="text-white text-center">
                                                        <p class="text-center mb-0 text-black">Approval Pending :  80 </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /today's revenue -->

                                </div>


                            </div>
                            <!-- /row - 3 -->
                    </div>
                </div>
                <!--Business Operation -->


                <!--Site Details -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center mb-0">Site Details</h5>
                    </div>
                    <div class="card-body">
                            <!-- /row - 1 -->
                        <div class="row">
                            <div class="col-lg-3">

                                <!-- Members online -->
                                <div class="card bg-warning">
                                    <div class="card-body">
                                        <div class="row mb-0">
                                            <div class="col-lg-12 mb-1 border br-7">
                                                <a href="" class="text-black">
                                                    <h5 class="text-center mb-0 text-black">Total Products  :  80 </h5>
                                                </a>
                                            </div>
                                            <div class="col-lg-12 mb-1 border br-7">
                                                <a href="" class="text-black">
                                                    <p class="text-center mb-0 text-black">Pending  :  80 </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-12 mb-1 border br-7">
                                                <a href="" class="text-black">
                                                    <p class="text-center mb-0 text-black">Newly Added  :  80 </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-12 border br-7">
                                                <a href="" class="text-black">
                                                    <p class="text-center mb-0 text-black">Update Required  :  80 </p>
                                                </a>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <!-- /members online -->

                            </div>

                            <div class="col-lg-3">

                                <!-- Current server load -->
                                <div class="card bg-pink text-white">
                                    <div class="card-body">
                                        <div class="row mb-0">
                                            <div class="col-lg-12 mb-1 border br-7">
                                                <a href="" class="text-black">
                                                    <h5 class="text-center mb-0 text-black">Total Brands  :  80 </h5>
                                                </a>
                                            </div>
                                            <div class="col-lg-12 mb-1 border br-7">
                                                <a href="" class="text-black">
                                                    <p class="text-center mb-0 text-black">Newly Added  :  80 </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-12 border br-7">
                                                <a href="" class="text-black">
                                                    <p class="text-center mb-0 text-black">Update Required  :  80 </p>
                                                </a>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <!-- /current server load -->

                            </div>

                            <div class="col-lg-6">

                                <!-- Today's revenue -->
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <div class="row mb-0">
                                            <div class="col-lg-6 mb-1 border br-7">
                                                <a href="" class="text-black">
                                                    <p class="text-center mb-0 text-black">Total Categories  :  80 </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-6 mb-1 border br-7">
                                                <a href="" class="text-black">
                                                    <p class="text-center mb-0 text-black">Newly Added  :  80 </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row mb-0">
                                            <div class="col-lg-6 mb-1 border br-7">
                                                <a href="" class="text-black">
                                                    <p class="text-center mb-0 text-black">Total Sub Categories  :  80 </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-6 mb-1 border br-7">
                                                <a href="" class="text-black">
                                                    <p class="text-center mb-0 text-black">Newly Added  :  80 </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row mb-0">
                                            <div class="col-lg-6 mb-1 border br-7">
                                                <a href="" class="text-black">
                                                    <p class="text-center mb-0 text-black">Total Sub Sub Categories  :  80 </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-6 mb-1 border br-7">
                                                <a href="" class="text-black">
                                                    <p class="text-center mb-0 text-black">Newly Added  :  80 </p>
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- /today's revenue -->

                            </div>


                        </div>
                            <!-- /row - 1 -->
                            <!-- /row - 2 -->
                        <div class="row">
                            <div class="col-lg-4">

                                <!-- Members online -->
                                <div class="card bg-warning">
                                    <div class="card-body">
                                        <div class="row mb-0 border border-3 br-7">
                                            <a href="" class="text-black">
                                                <h4 class="text-center mb-0 text-black">Solutions   :  80 </h4>
                                            </a>
                                        </div>

                                        <div class="row mb-0 mt-1">
                                            <div class="col-lg-5 mr-2 p-1 border border-3 br-7">
                                                <a href="" class="text-white">
                                                    <p class="text-center mb-0 text-black"> </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 p-1 border border-3 p-0 br-7">
                                                    <a href="" class="text-white">
                                                        <p class="text-center mb-0 text-black"> </p>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /members online -->

                            </div>

                            <div class="col-lg-4">

                                <!-- Current server load -->
                                <div class="card bg-pink text-white">
                                    <div class="card-body">
                                        <div class="row mb-0 border border-3 br-7">
                                            <a href="" class="text-black">
                                                <h4 class="text-center mb-0 text-black">Industries </h4>
                                            </a>
                                        </div>

                                        <div class="row mb-0 mt-1">
                                            <div class="col-lg-5 mr-1 p-1 border border-3 br-7">
                                                <a href="" class="text-white">
                                                    <p class="text-center mb-0 text-black"> </p>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 p-1 border border-3 p-0 br-7">
                                                    <a href="" class="text-white">
                                                        <p class="text-center mb-0 text-black"> </p>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /current server load -->

                            </div>

                            <div class="col-lg-4">

                                <!-- Today's revenue -->
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <div class="row mb-0 border border-3 br-7">
                                            <a href="" class="text-black">
                                                <h4 class="text-center mb-0 text-black">Services</h4>
                                            </a>
                                        </div>

                                        <div class="row mb-0 mt-1">
                                            <div class="col-lg-5 mr-1 p-1 border border-3 br-7">
                                                <a href="" class="text-white">
                                                    <p class="text-center mb-0 text-black"></p>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 p-1 border border-3 p-0 br-7">
                                                    <a href="" class="text-white">
                                                        <p class="text-center mb-0 text-black"></p>
                                                    </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- /today's revenue -->

                            </div>


                        </div>
                            <!-- /row - 2 -->
                            <!-- /row - 3 -->
                            <div class="row">


                                <div class="col-lg-3">

                                    <!-- Today's revenue -->
                                    <div class="card bg-info text-white">
                                        <div class="card-body">
                                            <div class="row mb-0">
                                                <div class="col-lg-12 mb-1 p-1 border border-3 br-7">
                                                    <a href="" class="text-black">
                                                        <h5 class="text-center mb-0 text-black">Total Front Pages  :  80 </h5>
                                                    </a>
                                                </div>
                                                <div class="col-lg-12 mb-1 p-1 border border-3 br-7">
                                                    <a href="" class="text-white text-center">
                                                        <p class="text-center mb-0 text-black">Updated  : </p>
                                                    </a>
                                                </div>

                                                <div class="col-lg-12 mb-1 p-1 border border-3 br-7">
                                                    <a href="javascript:void(0);" class="text-white text-center" data-bs-toggle="modal" data-bs-target="#update_page">
                                                        <p class="text-center mb-0 text-black">Update Required : </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /today's revenue -->

                                </div>

                                <div class="col-lg-3">

                                    <!-- Today's revenue -->
                                    <div class="card bg-success text-white">
                                        <div class="card-body">
                                            <div class="row mb-0">
                                                <div class="col-lg-12 mb-1 p-1 border border-3 br-7">
                                                    <a href="" class="text-black">
                                                        <h5 class="text-center mb-0 text-black">All Pages  :  80 </h5>
                                                    </a>
                                                </div>
                                                <div class="col-lg-12 mb-1 p-1 border border-3 br-7">
                                                    <a id="accordion" href="javascript:void(0);" class="text-white text-center">
                                                        <p class="text-center mb-0 text-black">Update Info :  80 </p>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /today's revenue -->

                                </div>


                            </div>
                            <!-- /row - 3 -->
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <div class="expandable table-responsive" style="display: none;">
                                        <table class="table table-bordered table-hover datatable-highlight text-center">
                                            <thead>
                                                <tr class="bg-dark text-white">
                                                    <th>Pages</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>HomePage</td>
                                                    <td>Update Required</td>
                                                    <td>
                                                        <a href="#" class="text-primary">
                                                            <i class="icon-pencil"></i>
                                                        </a>
                                                        <a href=""
                                                            class="text-danger delete mx-2">
                                                            <i class="delete icon-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                <!--Site Details -->

            @else
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header m-0 p-0 py-2">
                            <h1 class="text-center text-primary p-0" style="font-size: 40px;"><strong class="text-danger">N</strong>Gen <strong class="text-danger">I</strong>t</h1>
                        </div>
                        <div class="card-body">
                            <h5 class="text-center"> Thank You for opening an account in Ngen It <br>
                                Please wait for the Approval. <br>
                                Your Patience will be highly appreciated.</h5>
                        </div>
                    </div>
                </div>
            </div>

            @endif
        </div>
        <!-- /content area -->


        @include('admin.partials.modals')


    <!-- /inner content -->

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    //  $('#accordion').click(function(){
    //     //var element = document.querySelector(".expandable");

    //     var expandable = document.getElementsByClassName('d-none');
    //     if (expandable.length > 0) {

    //         $('.expandable').removeClass('d-none').next().slideUp();
    //     }
    //     else {
    //         // At least some are closed, open all
    //         $('.expandable').addClass('d-none').next().slideDown();
    //     }


    // });

    $(document).ready(function(){
        $("#accordion").click(function(){
            $('.expandable').toggle("slide");
        });
    });
</script>

@endsection
