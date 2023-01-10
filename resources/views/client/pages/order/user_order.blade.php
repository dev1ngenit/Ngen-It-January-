@extends('client.master')
@section('content')

<div class="content-wrapper">

    <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{route('client.dashboard')}}" class="breadcrumb-item">Home</a>
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
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center">All Orders</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="brandDT table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="10%">Sl No:</th>
                                    <th width="40%">Title</th>
                                    <th width="10%%">Quantity</th>
                                    <th width="10%">Price</th>
                                    <th width="15%">Status</th>
                                    <th width="15%" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @if ()

                                @endif --}}
                            </tbody>
                        </table>
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
            $('.brandDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [4 , 5 ],
                }, ],
            });
        </script>
    @endpush
@endonce
