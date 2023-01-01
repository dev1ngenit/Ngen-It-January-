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
                        <span class="breadcrumb-item active">Client Management</span>
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
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="js-tab1">
                            <div id="table1" class="card cardT">
                                <div class="card-header">
                                    <h4 class="mb-0 text-center">All Client Permission</h4>
                                </div>

                                <table class="datatable table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>image</th>
                                            <th>phone</th>
                                            <th>country</th>
                                            <th>post_code</th>
                                            <th>email</th>
                                            <th>status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($clientPermissions)
                                            @foreach ($clientPermissions as $key => $clientPermission)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $clientPermission->name }}</td>
                                                    <td class="text-center"><img
                                                            src="{{ asset('upload/Profile/user/' . $clientPermission->photo) }}"
                                                            height="50" width="50" alt=""></td>
                                                    <td>{{ $clientPermission->phone }}</td>
                                                    <td>{{ $clientPermission->country }}</td>
                                                    <td>{{ $clientPermission->postal }}</td>
                                                    <td>{{ $clientPermission->email }}</td>
                                                    <td>
                                                        @if ($clientPermission->status == 'active')
                                                            <span class="badge bg-success">Approved</span>
                                                        @else
                                                            <span class="badge bg-danger">Pending</span>
                                                        @endif
                                                        <div class="form-check form-switch mb-2">

                                                            <input name="toggle" type="checkbox" class="form-check-input form-check-input-danger" value="{{$clientPermission->id}}" id="sc_r_danger" {{(($clientPermission->status=='inactive') ? 'checked' : '')}}>

                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('clientPermission.edit', [$clientPermission->id]) }}"
                                                            class="text-primary">
                                                            <i class="icon-pencil"></i>
                                                        </a>
                                                        <a href="{{ route('clientPermission.destroy', [$clientPermission->id]) }}"
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
    <!-- /content area -->
    <!-- /inner content -->

    </div>

    <script>
        $(document).ready(function(){
        $('input[name=toggle]').change(function() {
        var mode= $(this).prop('checked');
        var id=$(this).val();
        $.ajax({
            url:"{{route('client.status')}}",
            type:"POST",
            data:{
                _token:'{{csrf_token()}}',
                mode:mode,
                id:id,
            },
            success:function (response) {

                if (response.status) {
                    alert(response.msg);
                }
                else{
                    alert('Please Try Again!');
                }
                window.location.reload();
            }

        })

       })
    })
      </script>
@endsection
