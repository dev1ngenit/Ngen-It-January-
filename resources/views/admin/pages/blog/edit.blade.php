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
                        <span class="breadcrumb-item active">Blog Management</span>
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

                            <h5 class="mb-0 float-start">Blog Edit Form</h5>
                            <a href="{{ route('blog.index') }}" type="button"
                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Blogs
                            </a>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ route('blog.update', $blog->id) }}"
                                enctype="multipart/form-data" id="myform">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Author</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $blog->created_by }}" name="created_by"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Badge Name</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="badge" class="form-control maxlength"
                                            maxlength="100" value="{{ $blog->badge }}"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Title</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $blog->title }}" name="title"
                                            class="form-control maxlength" maxlength="180" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Header</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control maxlength" name="header" id="" maxlength="500" cols="30" rows="3">{{ $blog->header }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">
                                            Tags</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="tags" class="form-control visually-hidden" data-role="tagsinput" value="{{ $blog->tags }}">
                                        {{-- <select data-placeholder="Select Your tags" class="form-control select"
                                            id="tags" name="tags[]" multiple="multiple" data-tags="true"
                                            data-maximum-input-length="30">
                                            @php
                                                if (isset($blog->tags)) {
                                                    $tags = json_decode($blog->tags);
                                                } else {
                                                    $tags = [];
                                                }
                                            @endphp
                                            @if (isset($tags))
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag }}"
                                                        {{ in_array($tag, $tags) ? 'selected' : '' }}>
                                                        {{ $tag }}
                                                    </option>
                                                @endforeach
                                            @else
                                                <option value=""></option>
                                            @endif
                                        </select> --}}
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Banner Image </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" value="" name="image" class="form-control"
                                            id="image" accept="image/*" />
                                        <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                        <img id="showImage" height="100px" width="100px"
                                            src="{{ asset('storage/thumb/'.$blog->image) }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Featured Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="short_des" id="featured_desc" style=" font-size: 12px; font-weight: 500;">{!! $blog->short_des !!}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"> Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="long_des" id="long_desc" style=" font-size: 12px; font-weight: 500;">{!! $blog->long_des !!}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Footer </h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="footer" id="footer" style=" font-size: 12px; font-weight: 500;">{!! $blog->footer !!}</textarea>
                                    </div>
                                </div>


                                {{-- <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">
                                            Industries</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <select value="" name="industries[]"
                                            data-placeholder="Select a industries..." multiple="multiple"
                                            class="form-control select">

                                            @php
                                                if (isset($blog->industries)) {
                                                    $industries = json_decode($blog->industries);
                                                } else {
                                                    $industries = [];
                                                }
                                            @endphp
                                            @if (isset($industries))
                                                @foreach ($industries as $industrie)
                                                    @php
                                                        $industrieFirst = App\Models\Admin\Industry::where('id', $industrie)->first();
                                                    @endphp
                                                    <option value="{{ $industrieFirst }}"
                                                        {{ in_array($industrie, $industries) ? 'selected' : '' }}>
                                                        {{ $industrieFirst }}
                                                    </option>
                                                @endforeach
                                            @else
                                                <option value=""></option>
                                            @endif
                                        </select>
                                    </div>
                                </div> --}}
                                {{-- <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">
                                            Solutions</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <select value="" name="solutions[]"
                                            data-placeholder="Select a solutions..." multiple="multiple"
                                            class="form-control select">
                                            @php
                                                if (isset($blog->solutions)) {
                                                    $solutions = json_decode($blog->solutions);
                                                } else {
                                                    $solutions = [];
                                                }
                                            @endphp
                                            @if (isset($solutions))
                                                @foreach ($solutions as $solution)
                                                    @php
                                                        $solutionFirst = App\Models\Admin\Solution::where('id', $solution)->first();
                                                    @endphp
                                                    <option value="{{ $solutionFirst->id }}"
                                                        {{ in_array($solution, $solutions) ? 'selected' : '' }}>
                                                        {{ $solutionFirst->title }}
                                                    </option>
                                                @endforeach
                                            @else
                                                <option value=""></option>
                                            @endif
                                        </select>
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
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
