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
                        <span class="breadcrumb-item active">Website Settings Management</span>
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
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header py-1 bg-light">
                            <h5 class="card-title text-white-50 text-center m-0 ">Website Name</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="inputEstimatedBudget"> Name First Line</label>
                                <input type="text" readonly id="inputEstimatedBudget" class="form-control"
                                    value="{{ $setting->name }}">
                            </div>
                            <div class="mb-4">
                                <label for="inputEstimatedBudget"> Tag Line</label>
                                <input type="text" readonly id="inputEstimatedBudget" class="form-control"
                                    value="{{ $setting->short_name }}">
                            </div>
                            <div class="timeline-footer text-right">
                                <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal-name">Update</a>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header py-1 bg-success">
                            <h5 class="card-title text-black text-center m-0 ">Social Links</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="inputEstimatedBudget">Facebook Url</label>
                                <input disabled type="text" readonly id="inputEstimatedBudget" class="form-control"
                                    value="{{ $setting->facebook }}">
                            </div>
                            <div class="mb-4">
                                <label for="inputEstimatedBudget">Twitter Url</label>
                                <input disabled type="text" readonly id="inputEstimatedBudget" class="form-control"
                                    value="{{ $setting->twitter }}">
                            </div>
                            <div class="mb-4">
                                <label for="inputEstimatedBudget">Linked In Url</label>
                                <input disabled type="text" readonly id="inputEstimatedBudget" class="form-control"
                                    value="{{ $setting->linked_in }}">
                            </div>
                            <div class="timeline-footer text-right">
                                <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal-social">Click</a>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header py-1 bg-warning">
                            <h5 class="card-title text-black text-center m-0 ">Website Logo</h5>
                        </div>
                        <div class="card-body">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid"
                                        src="{{ (!file_exists($setting->logo)) ? url('upload/logoimage/'.$setting->logo):url('upload/no_image.jpg') }}"
                                        alt="Ngen It" width="150" />


                                </div>

                                <h5 class="profile-username text-center">Logo</h5>
                            </div>
                            <div class="timeline-footer float-end">
                                <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal-logo">Update</a>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card">
                        <div class="card-header py-1 bg-primary">
                            <h5 class="card-title text-black text-center m-0 ">Website Favicon</h5>
                        </div>
                        <div class="card-body">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid"
                                        src="{{ (!file_exists($setting->favicon)) ? url('upload/faviconimage/'.$setting->favicon):url('upload/no_image.jpg') }}"
                                        alt="Ngen It" width="100" />

                                </div>

                                <h5 class="profile-username text-center">Favicon Icon</h5>
                            </div>
                            <div class="timeline-footer float-end">
                                <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal-favicon">Update</a>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header py-1 bg-info">
                            <h5 class="card-title text-black text-center m-0">Website Address</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." readonly>{{ $setting->address }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="inputEstimatedBudget">Email - 1</label>
                                <input type="text" readonly id="inputEstimatedBudget" class="form-control"
                                    value="{{ $setting->email1 }}">
                            </div>

                            <div class="mb-4">
                                <label for="inputEstimatedBudget">Email - 2</label>
                                <input type="text" readonly id="inputEstimatedBudget" class="form-control"
                                    value="{{ $setting->email2 }}">
                            </div>

                            <div class="mb-4">
                                <label for="inputEstimatedBudget">Mobile No:</label>
                                <input type="text" readonly id="inputEstimatedBudget" class="form-control"
                                    value="{{ $setting->mobile }}">
                            </div>

                            <div class="mb-4">
                                <label for="inputEstimatedBudget">Phone No:</label>
                                <input type="text" readonly id="inputEstimatedBudget" class="form-control"
                                    value="{{ $setting->phone }}">
                            </div>
                            <div class="mb-4">
                                <label for="inputEstimatedBudget">Contact Hour</label>
                                <input type="text" readonly id="inputEstimatedBudget" class="form-control"
                                    value="{{ $setting->hour }}">
                            </div>
                            <div class="timeline-footer text-right">
                                <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modal-address">Update</a>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 70%">Settings</th>
                                    <th class="text-center">Click this Button</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Link Storage</td>
                                    <td><a href="{{ url('/admin/link') }}" class="btn btn-primary btn-sm float-left mr-1 mb-2" style="height:30px; width:30px;border-radius:50%"  title="click" ><i class="ph-link"></i></a></td>
                                </tr>
                                <tr>
                                    <td> CACHE Clear</td>
                                    <td><a href="{{ url('/admin/clear-cache') }}" class="btn btn-primary btn-sm float-left mr-1 mb-2" style="height:30px; width:30px;border-radius:50%"  title="click" ><i class="icon-database-refresh"></i></a></td>
                                </tr>
                                <tr>
                                    <td> Route Clear</td>
                                    <td><a href="{{ url('/admin/clear-route') }}" class="btn btn-primary btn-sm float-left mr-1 mb-2" style="height:30px; width:30px;border-radius:50%"  title="click" ><i class="icon-database-refresh"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Optimize</td>
                                    <td><a href="{{ url('/admin/optimize') }}" class="btn btn-primary btn-sm float-left mr-1 mb-2" style="height:30px; width:30px;border-radius:50%"  title="click" ><i class="icon-database-refresh"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Route Cache</td>
                                    <td><a href="{{ url('/admin/route-cache') }}" class="btn btn-primary btn-sm float-left mr-1 mb-2" style="height:30px; width:30px;border-radius:50%"  title="click" ><i class="icon-database-refresh"></i></a></td>
                                </tr>
                                <tr>
                                    <td>View Clear</td>
                                    <td><a href="{{ url('/admin/clear-view') }}" class="btn btn-primary btn-sm float-left mr-1 mb-2" style="height:30px; width:30px;border-radius:50%"  title="click" ><i class="icon-database-refresh"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Config Clear</td>
                                    <td><a href="{{ url('/admin/clear-config') }}" class="btn btn-primary btn-sm float-left mr-1 mb-2" style="height:30px; width:30px;border-radius:50%"  title="click" ><i class="icon-database-refresh"></i></a></td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <!-- /content area -->



        @include('admin.partials.modals')

        <!-- /inner content -->

    </div>
@endsection

@push('script')
@endpush
