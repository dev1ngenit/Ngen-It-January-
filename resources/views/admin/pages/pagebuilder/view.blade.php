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
                        <span class="breadcrumb-item active">Page Management</span>
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
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Home Page <span>
                                <a href="{{route('homepage.create')}}" type="button" class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                                        <i class="icon-plus2"></i>
                                    </span>
                                    Add New
                                </a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Page Name</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($home)


                                        <td>{{ $home->id }}</td>
                                        <td>Template one</td>
                                        <td class="text-center">
                                            {{-- <a href="{{ route('homepage.show', $home->id) }}" class="text-info">
                                                <i class="icon-eye"></i>
                                            </a> --}}
                                            <a href="{{ route('homepage.edit',$home->id) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('homepage.destroy', [$home->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>

                                        </td>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- <div class="card-header text-center pt-3">
                            <h4>All Brand Page</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Brand</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="card-header text-center pt-3">
                            <h4>All Category Page</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>

        </div>
        <!-- /content area -->





    <!-- /inner content -->

</div>
@endsection




