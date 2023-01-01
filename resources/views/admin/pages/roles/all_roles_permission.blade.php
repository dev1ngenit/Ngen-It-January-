@extends('admin.master')
@section('content')

<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Role & Permission Management</span>
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
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card p-0 py-1 mt-2">
                <div class="card-body p-0 px-2">
                    <div class="row">
                        <div class="col-lg-7">
                            <h5 class="text-center p-0 py-1">All Roles with Premissions</h5>
                        </div>

                        <div class="col-lg-5">
                            <a href="{{ route('add.roles.permission') }}" type="button"
                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-plus2"></i>
                                </span>
                                Permission to roles
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable table table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th width="15%">Sl</th>
                                    <th width="25%">Roles Name </th>
                                    <th width="45%">Permissions </th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $key => $item)
                                <tr>
                                    <td> {{ $key+1 }} </td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        @foreach($item->permissions as $perm)
                                        <span class="badge rounded-pill bg-danger"> {{ $perm->name }}</span>
                                        @endforeach
                                    </td>

                                    <td>
                                        <a href="{{ route('admin.edit.roles',$item->id) }}" class="text-primary">
                                            <i class="icon-pencil"></i>
                                        </a>
                                        <a href="{{ route('admin.delete.roles',$item->id) }}"
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
