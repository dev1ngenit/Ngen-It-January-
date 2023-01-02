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
                        <span class="breadcrumb-item active">Industry Management</span>
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
                <div class="col-lg-1"></div>
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="js-tab1">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h4 class="mb-0 text-center">All Industries</h4>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="{{ route('industry.create') }}" type="button"
                                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                                    <i class="icon-plus2"></i>
                                                </span>
                                                Add New
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="industryDT table table-bordered table-hover datatable-highlight">
                                        <thead class="text-center">
                                            <tr>
                                                <th width="5%">#</th>
                                                <th width="15%">Logo</th>
                                                <th width="20%">Name</th>
                                                <th width="45%">Header</th>
                                                <th width="15%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                            @foreach ($industrys as $item)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>
                                                        <img src="{{ asset('storage/requestImg/' . $item->logo) }}"
                                                            width="70px" alt="">
                                                    </td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{!! Str::limit($item->short_desc, 50, '...') !!}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('industry.edit', $item->id) }}"
                                                            class="text-primary">
                                                            <i class="icon-pencil"></i>
                                                        </a>
                                                        <a href="{{ route('industry.destroy', [$item->id]) }}"
                                                            class="text-danger delete mx-2">
                                                            <i class="delete icon-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
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
        <script type="text/javascript">
            $('.industryDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [1, 4],
                }, ],
            });
        </script>
    @endpush
@endonce
