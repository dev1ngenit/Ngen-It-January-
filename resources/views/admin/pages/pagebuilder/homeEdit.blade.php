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
                        <span class="breadcrumb-item active">Home Management</span>
                    </div>
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

                            <h5 class="mb-0 float-start">Home Page Edit Form</h5>
                            <a href="{{ route('allpage') }}" type="button"
                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All
                            </a>
                        </div>

                        <div class="card-body">
                            <form id="myform" method="post" action="{{ route('homepage.update', $homePage->id) }}"
                                enctype="multipart/form-data" id="myform">
                                @csrf
                                @method('PUT')
                                <div class="col-12" style="border-bottom: 1px solid black; padding: 10px">
                                </div>
                                <div class="col-12" style="border-bottom: 1px solid black;margin-top:10px;padding:10px">
                                    <h6 class="text-center" style="background:white;">Banner Section</h6>
                                    <div class="row">
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Banner 1</label>
                                            <input type="file" name="branner1" class="form-control"
                                                placeholder="Upload your banner" id="image" >
                                            <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                            <img id="showImage" height="100px" width="100px"
                                                src="{{ asset('storage/requestImg/' . $homePage->branner1) }}"
                                                alt="">
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Banner 2</label>
                                            <input type="file" name="branner2" class="form-control"
                                                placeholder="Upload your banner" id="image1" >
                                            <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                            <img id="showImage1" height="100px" width="100px"
                                                src="{{ asset('storage/requestImg/' . $homePage->branner2) }}"
                                                alt="">
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Banner 3</label>
                                            <input type="file" name="branner3" class="form-control"
                                                placeholder="Upload your banner" id="image2">
                                            <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                            <img id="showImage2" height="100px" width="100px"
                                                src="{{ asset('storage/requestImg/' . $homePage->branner3) }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12" style="border-bottom: 1px solid black;margin-top:10px;padding:10px">
                                    <h6 class="text-center" style="background:white;">Double Button Section</h6>
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Button 1 Title</label>
                                            <input type="text" value="{{ $homePage->btn1_title }}" name="btn1_title"
                                                class="form-control" placeholder="Write Something..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Button 2 Title</label>
                                            <input type="text" name="btn2_title" class="form-control"
                                               value="{{ $homePage->btn2_title }}" placeholder="Write Something..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Button 1 Name</label>
                                            <input type="text" value="{{ $homePage->btn1_name }}" name="btn1_name"
                                                class="form-control" placeholder="Write Something..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Button 2 Name</label>
                                            <input type="text" name="btn2_name" class="form-control"
                                               value="{{ $homePage->btn2_name }}" placeholder="Write Something..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Button 1 Link</label>
                                            <input type="text" value="{{ $homePage->btn1_link }}" name="btn1_link"
                                                class="form-control" placeholder="Write Something..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Button 2 Link</label>
                                            <input type="text" name="btn2_link" class="form-control"
                                               value="{{ $homePage->btn2_link }}" placeholder="Write Something..." required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12" style="border-bottom: 1px solid black;margin-top:10px; padding:10px">
                                    <h6 class="text-center" style="background:white;">Features Section</h6>
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Header 1</label>
                                            <input type="text" value="{{ $homePage->header1 }}" name="header1"
                                                class="form-control" placeholder="Write Something..." required>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Header 2</label>
                                            <input type="text" value="{{ $homePage->header2 }}" name="header2"
                                                class="form-control" placeholder="Write Something..." required>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12" style="border-bottom: 1px solid black; margin-top:10px">
                                    <h6 class="text-center" style="background:white;">Features Row</h6>
                                    <div class="row">
                                        <!-- /# row -->
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="card-body col-4">
                                                    <div class="basic-form">
                                                        <label>Features 1</label>
                                                        <div class="form-group row">

                                                            <select name="story1_id" class="form-control select"
                                                                id="select1">
                                                                <option></option>
                                                                @foreach ($client_experiences as $item)
                                                                    <option value="{{ $item->id }}" {{ ( $item->id == $homePage->story1_id ) ? 'selected' : '' }}>
                                                                        {{ $item->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body col-4">
                                                    <div class="basic-form">
                                                        <label>Features 2</label>
                                                        <div class="form-group row">

                                                            <select name="story2_id" class="form-control select">
                                                                <option></option>
                                                                @foreach ($client_experiences as $item)
                                                                    <option value="{{ $item->id }}" {{ ( $item->id == $homePage->story2_id ) ? 'selected' : '' }}>
                                                                        {{ $item->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body col-4">
                                                    <div class="basic-form">
                                                        <label>Features 3</label>
                                                        <div class="form-group row">

                                                            <select name="story3_id" class="form-control select"
                                                                id="select3">
                                                                <option></option>
                                                                @foreach ($client_experiences as $item)
                                                                    <option value="{{ $item->id }}" {{ ( $item->id == $homePage->story3_id ) ? 'selected' : '' }}>
                                                                        {{ $item->title }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="card-body col-4">
                                                    <div class="basic-form">
                                                        <label>Features 4</label>
                                                        <div class="form-group row">

                                                            <select name="story4_id" class="form-control select"
                                                                id="select4">
                                                                <option></option>
                                                                @foreach ($client_experiences as $item)
                                                                    <option value="{{ $item->id }}" {{ ( $item->id == $homePage->story4_id ) ? 'selected' : '' }}>
                                                                        {{ $item->title }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body col-4">
                                                    <div class="basic-form">
                                                        <div class="form-group">

                                                            <label>Features 5</label>
                                                            <select name="story5_id" class="form-control select"
                                                                id="select5">
                                                                <option></option>
                                                                @foreach ($client_experiences as $item)
                                                                    <option value="{{ $item->id }}" {{ ( $item->id == $homePage->story5_id ) ? 'selected' : '' }}>
                                                                        {{ $item->title }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12" style="border-bottom: 1px solid black;margin-top:10px">
                                    <h6 class="text-center" style="background:white;">Client Stories Row</h6>
                                    <div class="row pt-3 pb-3">

                                        <div class="form-group col-3">

                                            <label>Client Story 1</label>
                                            <select name="solution1_id" class="form-control select"
                                                id="select6">
                                                <option></option>
                                                @foreach ($storys as $item)
                                                    <option value="{{ $item->id }}" {{ ( $item->id == $homePage->solution1_id ) ? 'selected' : '' }}>{{ $item->badge }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-3">

                                            <label>Client Story 2</label>
                                            <select name="solution2_id" class="form-control select"
                                                id="select7">
                                                <option></option>
                                                @foreach ($storys as $item)
                                                    <option value="{{ $item->id }}" {{ ( $item->id == $homePage->solution2_id ) ? 'selected' : '' }}>{{ $item->badge }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-3">

                                            <label>Client Story 3</label>
                                            <select name="solution3_id" class="form-control select"
                                                id="select8">
                                                <option></option>
                                                @foreach ($storys as $item)
                                                    <option value="{{ $item->id }}" {{ ( $item->id == $homePage->solution3_id ) ? 'selected' : '' }}>{{ $item->badge }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-3">

                                            <label>Client Story 4</label>
                                            <select name="solution4_id" class="form-control select"
                                                id="select9">
                                                <option></option>
                                                @foreach ($storys as $item)
                                                    <option value="{{ $item->id }}" {{ ( $item->id == $homePage->solution4_id ) ? 'selected' : '' }}>{{ $item->badge }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-12" style="border-bottom: 1px solid black;margin-top:10px">
                                    <h6 class="text-center" style="background:white;">Single Tech Glosy Row</h6>
                                    <div class="row pt-3 pb-3">

                                        <div class="form-group col-10">

                                            <label>Sigle Tech Glossy</label>
                                            <select name="techglossy_id" class="form-control select"
                                                id="select6">
                                                <option></option>
                                                @foreach ($techglossys as $item)
                                                    <option value="{{ $item->id }}" {{ ( $item->id == $homePage->techglossy_id ) ? 'selected' : '' }}>{{ $item->badge }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12" style="border-bottom: 1px solid black;margin-top:10px">
                                    <h6 class="text-center" style="background:white;">Client Success Row</h6>
                                    <div class="row pt-3 pb-3">
                                        <div class="form-group col-4">

                                            <label>Client Success 1</label>
                                            <select name="success1_id" class="form-control select"
                                                id="select10">
                                                <option></option>
                                                @foreach ($successes as $item)
                                                    <option value="{{ $item->id }}" {{ ( $item->id == $homePage->success1_id ) ? 'selected' : '' }}>{{ $item->title }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-4">

                                            <label>Client Success 2</label>
                                            <select name="success2_id" class="form-control select"
                                                id="select11">
                                                <option></option>
                                                @foreach ($successes as $item)
                                                    <option value="{{ $item->id }}" {{ ( $item->id == $homePage->success2_id ) ? 'selected' : '' }}>{{ $item->title }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-4">

                                            <label>Client Success 3</label>
                                            <select name="success3_id" class="form-control select"
                                                id="select12">
                                                <option></option>
                                                @foreach ($successes as $item)
                                                    <option value="{{ $item->id }}" {{ ( $item->id == $homePage->success3_id ) ? 'selected' : '' }}>{{ $item->title }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div><br>
                                <button type="submit" id="submitbtn" class="btn btn-sm btn-primary pull-right">Update<i
                                    class="ph-paper-plane-tilt ms-2"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection
