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
                        <span class="breadcrumb-item active">Solution Card Management</span>
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
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2 class="mb-0 text-center">All Solution Card</h2>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('solutionCard.create') }}" type="button"
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
                                    <th>Sl No:</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($solutionCards)
                                    @foreach ($solutionCards as $key => $solutionCard)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td class="text-center"><img
                                                    src="{{ asset('storage/requestImg/' . $solutionCard->image) }}"
                                                    height="30px" width="100px" alt=""></td>
                                            <td>{{ $solutionCard->title }}</td>
                                            <td>{{ $solutionCard->short_des }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('solutionCard.edit', $solutionCard->id) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('solutionCard.destroy', [$solutionCard->id]) }}"
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
