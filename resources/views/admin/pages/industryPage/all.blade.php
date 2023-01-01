@extends('admin.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="text-center">All Industry Page</h4>
                                </div>


                                <div class="col-lg-3">
                                    <a href="{{ route('industryPage.create') }}" type="button"
                                        class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        Add New
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="js-tab1">
                                    <div id="table1" class="card cardT">

                                        <table class="datatable table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sl No:</th>
                                                    <th>Header</th>
                                                    <th>Button One Name</th>
                                                    <th>Button One Link</th>
                                                    <th>Row Four Title</th>
                                                    <th>Row Four Header</th>
                                                    <th>Row Four Col One Title</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($industryPages)
                                                    @foreach ($industryPages as $key => $industryPage)
                                                        <tr>
                                                            <td>{{ ++$key }}</td>
                                                            <td>{{ $industryPage->header }}
                                                            </td>
                                                            <td>{{ $industryPage->btn_one_name }}</td>
                                                            <td>{{ $industryPage->btn_one_link }}</td>
                                                            <td>{{ $industryPage->row_four_title }}</td>
                                                            <td>{{ $industryPage->row_four_header }}</td>
                                                            <td>{{ $industryPage->row_four_col_one_title }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('industryPage.edit', [$industryPage->id]) }}"
                                                                    class="text-primary">
                                                                    <i class="icon-pencil"></i>
                                                                </a>
                                                                <a href="{{ route('industryPage.destroy', [$industryPage->id]) }}"
                                                                    class="text-danger delete mx-2">
                                                                    <i class="delete icon-trash"></i>
                                                                </a>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
