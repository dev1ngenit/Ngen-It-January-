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
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">SAS of Sourcing Products</span>
                    </div>

                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0 float-start">Sourcing SAS List</h2>

                </div>

                <table class="table table-bordered table-hover datatable-highlight sourcingDT">
                    <thead>
                        <tr>
                            <th width="15%">Sl</th>
                            <th width="15%">Image </th>
                            <th width="25%">Product Name </th>
                            <th width="15%">Sales Price</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($products)

                        @foreach ($products as $key => $item)
                            <tr>
                                <td> {{ $key + 1 }} </td>
                                <td> <img src="{{ asset($item->thumbnail) }}" style="width: 70px; height:40px;">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{App\Models\Admin\Sas::where('product_id',$item->id)->value('sales_price')}}</td>
                                <td>
                                    
                                    <a href="{{ route('sas.edit', [$item->ref_code]) }}" class="text-info mx-2">
                                        <i class="icon-pencil"></i>
                                    </a>
                                    <a href="{{ route('sas.show', [$item->ref_code]) }}" class="text-info mx-2">
                                        <i class="icon-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /content area -->





    <!-- /inner content -->

</div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.sourcingDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [1, 5],
                }, ],
            });
        </script>
    @endpush
@endonce
