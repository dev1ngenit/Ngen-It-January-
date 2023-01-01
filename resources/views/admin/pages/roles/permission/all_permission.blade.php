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
                        <span class="breadcrumb-item active">Role Management</span>
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



        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card p-0 py-1 mt-1">
                    <div class="card-body p-0 px-2">
                        <div class="row">
                            <div class="col-lg-8">
                                <h5 class="text-center  p-0 py-1">All Permissions</h5>
                            </div>

                            <div class="col-lg-4">
                                <a href="{{ route('add.permission') }}" type="button"
                                    class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                                        <i class="icon-plus2"></i>
                                    </span>
                                    Add Permission
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Permission Name </th>
                                        <th>Group Name </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $key => $item)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->group_name }}</td>

                                            <td>
                                                <a href="{{ route('edit.permission', $item->id) }}" class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('delete.permission', $item->id) }}"
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
@endsection
