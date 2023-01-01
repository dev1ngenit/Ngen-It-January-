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
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Client Story Management</span>
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

                            <h5 class="mb-0 float-start">Client Story Edit Form</h5>
                            <a href="{{route('clientstory.index')}}" type="button" class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Stories
                            </a>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ route('clientstory.update', $story->id) }}"
                                enctype="multipart/form-data" id="myform">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$story->id}}"/>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Author</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $story->created_by }}" name="created_by"
                                            class="form-control maxlength" maxlength="180" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Badge Name</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="badge" class="form-control maxlength"
                                            maxlength="100" value="{{ $story->badge }}"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Title</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $story->title }}" name="title"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Header</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control maxlength" name="header" id="" maxlength="500" cols="30" rows="3">{{ $story->header }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">
                                            Tags</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        {{-- <select data-placeholder="Select Your tags" class="form-control select"
                                            id="tags" name="tags[]" multiple="multiple" data-tags="true"
                                            data-maximum-input-length="30">
                                            @php
                                                if (isset($story->tags)) {
                                                    $tags = json_decode($story->tags);
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
                                        <input type="text" name="tags" class="form-control visually-hidden" data-role="tagsinput" value="{{ $story->tags }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Banner Image </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" name="image" class="form-control"
                                            id="image" accept="image/*" />
                                        <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                        <img id="showImage" height="100px" width="100px"
                                            src="{{ asset('storage/thumb/'.$story->image) }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Featured Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="short_des" id="featured_desc" style=" font-size: 12px; font-weight: 500;">{!! $story->short_des !!}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"> Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="long_des" id="long_desc" style=" font-size: 12px; font-weight: 500;">{!! $story->long_des !!}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Footer </h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="footer" id="footer" style=" font-size: 12px; font-weight: 500;">{!! $story->footer !!}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-4 text-secondary">
                                        <button type="submitbtn" class="btn btn-primary from-prevent-multiple-submits">Update<i
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

