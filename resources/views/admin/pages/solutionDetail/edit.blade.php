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
                        <span class="breadcrumb-item active">Solution Detail Management</span>
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
                            <h5 class="text-center">Solution Detail edit</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('solutionDetails.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Solution Detail
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

                                    <h5 class="mb-0 text-center">Add Solution Detail Form</h5>

                                </div>
                                {{-- @if ($industrie->id == $industryPage->industry_id) selected @endif --}}
                                <div class="card-body">
                                    <form method="post"
                                        action="{{ route('solutionDetails.update', $solutionDetail->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_one_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="row_one_id" data-placeholder="Select row_one_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($rows as $row)
                                                        <option @if ($row->id == $solutionDetail->row_one_id) selected @endif
                                                            class="form-control" value="{{ $row->id }}">
                                                            {{ $row->title }}</option>
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
                                                        <option @if ($row->id == $solutionDetail->row_four_id) selected @endif
                                                            class="form-control" value="{{ $row->id }}">
                                                            {{ $row->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">solution_card_one_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="solution_card_one_id" data-placeholder="Select row_four_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($solution_cards as $solution_card)
                                                        <option @if ($solution_card->id == $solutionDetail->solution_card_one_id) selected @endif
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
                                                <select name="solution_card_two_id" data-placeholder="Select row_four_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($solution_cards as $solution_card)
                                                        <option @if ($solution_card->id == $solutionDetail->solution_card_two_id) selected @endif
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
                                                    data-placeholder="Select row_four_id.." class="form-control select">
                                                    <option></option>
                                                    @foreach ($solution_cards as $solution_card)
                                                        <option @if ($solution_card->id == $solutionDetail->solution_card_three_id) selected @endif
                                                            class="form-control" value="{{ $solution_card->id }}">
                                                            {{ $solution_card->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">solution_card_four_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="solution_card_four_id" data-placeholder="Select row_four_id.."
                                                    class="form-control select">
                                                    <option></option>
                                                    @foreach ($solution_cards as $solution_card)
                                                        <option @if ($solution_card->id == $solutionDetail->solution_card_four_id) selected @endif
                                                            class="form-control" value="{{ $solution_card->id }}">
                                                            {{ $solution_card->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">solution_card_five_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="solution_card_five_id"
                                                    data-placeholder="Select row_four_id.." class="form-control select">
                                                    <option></option>
                                                    @foreach ($solution_cards as $solution_card)
                                                        <option @if ($solution_card->id == $solutionDetail->solution_card_five_id) selected @endif
                                                            class="form-control" value="{{ $solution_card->id }}">
                                                            {{ $solution_card->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">solution_card_six_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="solution_card_six_id"
                                                    data-placeholder="Select row_four_id.." class="form-control select">
                                                    <option></option>
                                                    @foreach ($solution_cards as $solution_card)
                                                        <option @if ($solution_card->id == $solutionDetail->solution_card_six_id) selected @endif
                                                            class="form-control" value="{{ $solution_card->id }}">
                                                            {{ $solution_card->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">solution_card_seven_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="solution_card_seven_id"
                                                    data-placeholder="Select row_four_id.." class="form-control select">
                                                    <option></option>
                                                    @foreach ($solution_cards as $solution_card)
                                                        <option @if ($solution_card->id == $solutionDetail->solution_card_seven_id) selected @endif
                                                            class="form-control" value="{{ $solution_card->id }}">
                                                            {{ $solution_card->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">solution_card_eight_id </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="solution_card_eight_id"
                                                    data-placeholder="Select row_four_id.." class="form-control select">
                                                    <option></option>
                                                    @foreach ($solution_cards as $solution_card)
                                                        <option @if ($solution_card->id == $solutionDetail->solution_card_eight_id) selected @endif
                                                            class="form-control" value="{{ $solution_card->id }}">
                                                            {{ $solution_card->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Industry Title </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select data-placeholder="Select Your tags" class="form-control select"
                                                    id="industry_id" name="industry_id" multiple="multiple"
                                                    data-tags="false" data-maximum-input-length="30">
                                                    @foreach ($industries as $industrie)
                                                        <option @if ($industrie->id == $solutionDetail->industry_id) selected @endif
                                                            value="{{ $industrie->id }}">{{ $industrie->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Name </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $solutionDetail->name }}" name="name"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">header</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="header" id="" class="form-control" cols="30" rows="3">{{ $solutionDetail->header }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Banner Image </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="file" name="banner_image" class="form-control"
                                                    id="image" accept="image/*" />
                                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                <img id="showImage" height="87px" width="157px"
                                                    src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_two_title </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $solutionDetail->row_two_title }}"
                                                    name="row_two_title" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_two_header</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="row_two_header" id="" class="form-control" cols="30" rows="3">{{ $solutionDetail->row_two_header }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_three_title </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $solutionDetail->row_three_title }}"
                                                    name="row_three_title" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_three_header</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="row_three_header" id="" class="form-control" cols="30" rows="3">{{ $solutionDetail->row_three_header }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_five_title </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $solutionDetail->row_five_title }}"
                                                    name="row_five_title" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">row_five_header</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="row_five_header" id="" class="form-control" cols="30" rows="3">{{ $solutionDetail->row_five_header }}</textarea>
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
