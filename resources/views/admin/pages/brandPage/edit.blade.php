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
                        <span class="breadcrumb-item active">brandPage Management</span>
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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <h5 class="text-center">brandPage edit</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('brandPage.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All brandPage
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div id="table1" class="card cardTd">
                                <div class="card-header">

                                    <h5 class="mb-0 text-center">Add brandPage Form</h5>

                                </div>
                                {{-- @if ($industrie->id == $industryPage->industry_id) selected @endif --}}
                                <div class="card-body">
                                    <form method="post" action="{{ route('brandPage.update', $brandPage->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">brand_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="brand_id" data-placeholder="Select brand_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($brands as $brand)
                                                        <option @if ($brand->id == $brandPage->brand_id) selected @endif
                                                            class="form-control" value="{{ $brand->id }}">
                                                            {{ $brand->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">solution_card_one_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="solution_card_one_id"
                                                    data-placeholder="Select solution_card_one_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($solution_cards as $solution_card)
                                                        <option @if ($solution_card->id == $brandPage->solution_card_one_id) selected @endif
                                                            class="form-control" value="{{ $solution_card->id }}">
                                                            {{ $solution_card->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">solution_card_two_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="solution_card_two_id"
                                                    data-placeholder="Select solution_card_two_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($solution_cards as $solution_card)
                                                        <option @if ($solution_card->id == $brandPage->solution_card_two_id) selected @endif
                                                            class="form-control" value="{{ $solution_card->id }}">
                                                            {{ $solution_card->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">solution_card_three_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="solution_card_three_id"
                                                    data-placeholder="Select solution_card_three_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($solution_cards as $solution_card)
                                                        <option @if ($solution_card->id == $brandPage->solution_card_three_id) selected @endif
                                                            class="form-control" value="{{ $solution_card->id }}">
                                                            {{ $solution_card->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_four_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="row_four_id" data-placeholder="Select row_four_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($rows as $row)
                                                        <option @if ($row->id == $brandPage->row_four_id) selected @endif
                                                            class="form-control" value="{{ $row->id }}">
                                                            {{ $row->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_five_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="row_five_id" data-placeholder="Select row_five_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($rows as $row)
                                                        <option @if ($row->id == $brandPage->row_five_id) selected @endif
                                                            class="form-control" value="{{ $row->id }}">
                                                            {{ $row->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_seven_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="row_seven_id" data-placeholder="Select row_seven_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($rows as $row)
                                                        <option @if ($row->id == $brandPage->row_seven_id) selected @endif
                                                            class="form-control" value="{{ $row->id }}">
                                                            {{ $row->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_eight_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="row_eight_id" data-placeholder="Select row_eight_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($row_with_cols as $row_with_col)
                                                        <option @if ($row_with_col->id == $brandPage->row_eight_id) selected @endif
                                                            class="form-control" value="{{ $row_with_col->id }}">
                                                            {{ $row_with_col->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">header</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="header" id="" class="form-control" cols="30" rows="3">{{ $brandPage->header }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_one_title </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="row_one_title"
                                                    value="{{ $brandPage->row_one_title }}"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_one_header</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="row_one_header" id="" class="form-control" cols="30" rows="3">{{ $brandPage->row_one_header }}</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">row_six Image </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="file" name="row_six_image" class="form-control"
                                                    id="image" accept="image/*" />
                                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                <img id="showImage" height="100px" width="350px"
                                                    src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">banner Image </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="file" name="banner_image" class="form-control"
                                                    id="image1" accept="image/*" />
                                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                <img id="showImage1" height="100px" width="350px"
                                                    src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_six_title </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="row_six_title"
                                                    value="{{ $brandPage->row_six_title }}"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_six_header</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="row_six_header" id="" class="form-control" cols="30" rows="3">{{ $brandPage->row_six_header }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_nine_title </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="row_nine_title"
                                                    value="{{ $brandPage->row_nine_title }}"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_nine_header</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="row_nine_header" id="" class="form-control" cols="30" rows="3">{{ $brandPage->row_nine_header }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                            </div>
                                        </div>
                                    </form>
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
@endsection
