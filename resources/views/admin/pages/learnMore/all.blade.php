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
                        <span class="breadcrumb-item active">Learn More Management</span>
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
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2 class="mb-0 text-center">All Learn More</h2>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('learnMore.create') }}" type="button"
                                        class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        Add New
                                    </a>
                                </div>
                            </div>
                        </div>

                        <table class="datatable table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="10%">Sl No:</th>
                                    <th width="15%">Logo</th>
                                    <th width="20%">header_one</th>
                                    <th width="40%">box_one_short_des</th>
                                    <th width="15%" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($learnMores)
                                    @foreach ($learnMores as $key => $learnMore)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td class="text-center"><img
                                                    src="{{ asset('storage/thumb/' . $learnMore->image_banner) }}"
                                                    height="40" width="50" alt=""></td>
                                            <td>{{ $learnMore->header_one }}</td>
                                            <td>{!! $learnMore->box_one_short_des !!}</td>
                                            <td class="text-center">
                                                <a href="{{ route('learnMore.edit', [$learnMore->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('learnMore.destroy', [$learnMore->id]) }}"
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
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection

@push('script')
@endpush
