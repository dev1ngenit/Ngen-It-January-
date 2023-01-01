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
                        <span class="breadcrumb-item active">Brand Management</span>
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

                            <h5 class="mb-0 float-start">Client Experience Edit Form</h5>
                            <a href="{{ route('learnMore.index') }}" type="button"
                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All
                            </a>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ route('learnMore.update', $learnMore->id) }}"
                                enctype="multipart/form-data" id="myform">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Badge</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="badge" value="{{ $learnMore->badge }}"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Title</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text"name="title" value="{{ $learnMore->title }}"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Banner Image </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" name="image_banner"
                                            class="form-control" id="image" accept="image/*" />
                                        <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                        <img id="showImage" height="100px" width="350px"
                                            src="{{ asset('storage/thumb/' . $learnMore->image_banner) }}"
                                            alt="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Background Image </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file"
                                            name="background_image" class="form-control" id="image1" accept="image/*" />
                                        <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                        <img id="showImage1" height="100px" width="350px"
                                            src="{{ asset('storage/thumb/' . $learnMore->background_image) }}"
                                            alt="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Header One</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $learnMore->header_one }}" name="header_one"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Header Two</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $learnMore->header_two }}" name="header_two"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Box One Title</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $learnMore->box_one_title }}"
                                            name="box_one_title" class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Box One Short Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea name="box_one_short_des" class="form-control maxlength" maxlength="100" rows="3"
                                            style=" font-size: 12px; font-weight: 500;">{{ $learnMore->box_one_short_des }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Box One link</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $learnMore->box_one_link }}" name="box_one_link"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Box Two Title</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $learnMore->box_two_title }}"
                                            name="box_two_title" class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Box Two Short Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea name="box_two_short_des" class="form-control maxlength" maxlength="100" rows="3"
                                            style=" font-size: 12px; font-weight: 500;">
                                            {{ $learnMore->box_two_short_des }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Box Two link</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $learnMore->box_two_link }}" name="box_two_link"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Box Three Title</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $learnMore->box_three_title }}"
                                            name="box_three_title" class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Box Three Short Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea name="box_three_short_des" class="form-control maxlength" maxlength="100" rows="3"
                                            style=" font-size: 12px; font-weight: 500;">
                                            {{ $learnMore->box_three_short_des }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Box Three link</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $learnMore->box_three_link }}"
                                            name="box_three_link" class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Success Story Title</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $learnMore->success_story_title }}"
                                            name="success_story_title" class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Client Story 1</h6>
                                    </div>
                                    <div class="form-group col-sm-6 text-secondary">
                                        <select
                                            name="success_story_one_id" class="form-select"
                                             id="select6">
                                            <option></option>
                                            @foreach ($storys as $item)
                                                <option value="{{ $item->id }}"  {{ ($item->id == $learnMore->success_story_one_id) ? 'selected' : '' }}>{{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Client Story 2</h6>
                                    </div>
                                    <div class="form-group col-sm-6 text-secondary">
                                        <select
                                            name="success_story_two_id" class="form-select"
                                             id="select7">
                                            <option></option>
                                            @foreach ($storys as $item)
                                                <option value="{{ $item->id }}" {{ ($item->id == $learnMore->success_story_two_id) ? 'selected' : '' }}>{{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Client Story 3</h6>
                                    </div>
                                    <div class="form-group col-sm-6 text-secondary">
                                        <select
                                            name="success_story_three_id" class="form-select"
                                             id="select8">
                                            <option></option>
                                            @foreach ($storys as $item)
                                                <option value="{{ $item->id }}" {{ ($item->id == $learnMore->success_story_three_id) ? 'selected' : '' }}>{{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Footer</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea name="footer" class="form-control maxlength" rows="3"
                                            style=" font-size: 12px; font-weight: 500;">{{ $learnMore->footer }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Consult Title</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $learnMore->consult_title }}"
                                            name="consult_title" class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Consult Short Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea name="consult_short_des" class="form-control maxlength" maxlength="100" rows="3"
                                            style=" font-size: 12px; font-weight: 500;">
                                            {{ $learnMore->consult_short_des }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Industry Header</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $learnMore->industry_header }}"
                                            name="industry_header" class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        {{-- <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" /> --}}

                                        <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                                class="ph-paper-plane-tilt ms-2"></i></button>
                                    </div>
                                </div>
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
