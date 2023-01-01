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
                        <span class="breadcrumb-item active">Category Management</span>
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
                <div class="col-lg-10">
                    <div class="card mt-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item col-3">
                                            <a href="#js-tab1" class="py-1 nav-link active cat-tab1" data-bs-toggle="tab">
                                                <p style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;">
                                                    Category</p>
                                            </a>
                                        </li>

                                        <li class="nav-item col-3">
                                            <a href="#js-tab2" class="py-1 nav-link cat-tab2" data-bs-toggle="tab">
                                                <p style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;">
                                                    Sub Category</p>
                                            </a>
                                        </li>

                                        <li class="nav-item col-3">
                                            <a href="#js-tab3" class="py-1 nav-link cat-tab3" data-bs-toggle="tab">
                                                <p style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;">
                                                    Sub Sub Category</p>
                                            </a>
                                        </li>

                                        <li class="nav-item col-3">
                                            <a href="#js-tab4" class="py-1 nav-link cat-tab4" data-bs-toggle="tab">
                                                <p style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;">
                                                    Sub Sub Sub Category</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                {{-- <div class="col-lg-3">
                                <label class="text-center" for="category">Chose from the dropdown</label>
                                <select onchange="dropdownCategory(value)" id="dropdownCategory" name="category"
                                    class="form-control select col-lg-2 category" data-width="250"
                                     data-minimum-results-for-search="Infinity">
                                    <option value="table1">Category</option>
                                    <option value="table2">Sub Category</option>
                                    <option value="table3">Sub Sub Category</option>
                                    <option value="table4">Sub Sub Sub Category</option>
                                </select>
                            </div> --}}

                                <div class="col-lg-3">
                                    <a href="{{ route('category.create') }}" type="button"
                                        class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        Add New
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="js-tab1">
                            <div id="table1" class="card cardT">
                                <div class="card-header">
                                    <h4 class="mb-0 text-center">All Category</h4>
                                </div>

                                <table class="categoryDT table table-bordered table-hover datatable-highlight">
                                    <thead>
                                        <tr>
                                            <th width="5%">Sl No:</th>
                                            <th width="10%">Category Image</th>
                                            <th width="50%">Category Name</th>
                                            <th width="15%">Status</th>
                                            <th width="20%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($categorys)
                                            @foreach ($categorys as $key => $category)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td class="text-center"><img
                                                            src="{{ asset('storage/requestImg/' . $category->image) }}"
                                                            height="40" alt=""></td>
                                                    <td>{{ $category->title }}</td>
                                                    <td>
                                                        @if ($category->status == 'active')
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="text-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#update_category_{{ $category->slug }}">
                                                            <i class="icon-pencil"></i>
                                                        </a>
                                                        <!---Category Update modal--->
                                                        <div id="update_category_{{ $category->slug }}" class="modal fade"
                                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Category Update Form</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <div class="modal-body border br-7">
                                                                        @php
                                                                            $category = App\Models\Admin\Category::where('slug', $category->slug)->first();
                                                                        @endphp
                                                                        <form method="post"
                                                                            action="{{ route('category.update', $category->id) }}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-3">
                                                                                    <h6 class="mb-0">Category Name</h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-8 text-secondary">
                                                                                    <input type="text" name="title"
                                                                                        class="form-control maxlength"
                                                                                        maxlength="100"
                                                                                        value="{{ $category->title }}" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-3">
                                                                                    <h6 class="mb-0">Category Image </h6>
                                                                                </div>
                                                                                <div class="col-sm-8 text-secondary">
                                                                                    <input type="file" name="image"
                                                                                        class="form-control"
                                                                                        id="image" accept="image/*" />
                                                                                    <div class="form-text">Accepts only
                                                                                        png, jpg, jpeg images</div>
                                                                                    <img src="{{ asset('storage/requestImg/' . $category->image) }}"
                                                                                        height="80" alt=""
                                                                                        id="showImage">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-3">
                                                                                    <h6 class="mb-0">Category Status</h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-4 text-secondary">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="active"
                                                                                            id="flexRadioDefault1"
                                                                                            {{ $category->status == 'active' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault1">
                                                                                            Active
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="inactive"
                                                                                            id="flexRadioDefault2"
                                                                                            {{ $category->status == 'inactive' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault2">
                                                                                            Inactive
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="row">
                                                                                <div class="col-sm-3"></div>
                                                                                <div class="col-sm-9 text-secondary">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Update</button>
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---Category Update modal--->

                                                        <a href="{{ route('category.destroy', [$category->id]) }}"
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

                    <div class="tab-content">
                        <div class="tab-pane fade show" id="js-tab2">

                            <div id="table2" class="card cardT">
                                <div class="card-header">
                                    <h4 class="mb-0 text-center">All Sub Category</h4>
                                </div>
                                <table class="subCategoryDT table table-bordered table-hover datatable-highlight">
                                    <thead>
                                        <tr>
                                            <th>Sl No:</th>
                                            <th>Sub Category Image</th>
                                            <th>Sub Category Name</th>
                                            <th>Category Name</th>
                                            <th>Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($sub_cats)
                                            @foreach ($sub_cats as $key => $sub_cat)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td class="text-center">
                                                        <img src="{{ asset('storage/requestImg/' . $sub_cat->image) }}"
                                                            height="40" alt="">
                                                    </td>
                                                    <td>{{ $sub_cat->title }}</td>
                                                    <td> {{ App\Models\Admin\Category::where('id', $sub_cat->cat_id)->value('title') }}
                                                    </td>
                                                    <td>
                                                        @if ($sub_cat->status == 'active')
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="text-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#update_sub_cat_{{ $sub_cat->slug }}">
                                                            <i class="icon-pencil"></i>
                                                        </a>
                                                        <!---Sub Category Update modal--->
                                                        <div id="update_sub_cat_{{ $sub_cat->slug }}" class="modal fade"
                                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Sub Category Update Form
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <div class="modal-body border br-7">
                                                                        @php
                                                                            $sub_cat = App\Models\Admin\SubCategory::where('slug', $sub_cat->slug)->first();
                                                                        @endphp
                                                                        <form method="post"
                                                                            action="{{ route('update.subcategory', $sub_cat->id) }}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-3">
                                                                                    <h6 class="mb-0">Category Name</h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-8 text-secondary">
                                                                                    <select name="cat_id"
                                                                                        class="form-control select"
                                                                                        data-width="250"
                                                                                        data-minimum-results-for-search="Infinity">
                                                                                        <option value=""> -- Select
                                                                                            Category -- </option>
                                                                                        @foreach ($categorys as $cat)
                                                                                            <option
                                                                                                value="{{ $cat->id }}"
                                                                                                {{ $cat->id == $sub_cat->cat_id ? 'selected' : '' }}>
                                                                                                {{ $cat->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-3">
                                                                                    <h6 class="mb-0">Sub Category Name
                                                                                    </h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-8 text-secondary">
                                                                                    <input type="text" name="title"
                                                                                        class="form-control maxlength"
                                                                                        maxlength="100"
                                                                                        value="{{ $sub_cat->title }}" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-3">
                                                                                    <h6 class="mb-0">Sub Category Image
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="col-sm-8 text-secondary">
                                                                                    <input type="file" name="image"
                                                                                        class="form-control"
                                                                                        id="image1" accept="image/*" />
                                                                                    <div class="form-text">Accepts only
                                                                                        png, jpg, jpeg images</div>
                                                                                    <img id="showImage1"
                                                                                        src="{{ asset('storage/requestImg/' . $sub_cat->image) }}"
                                                                                        height="80" alt="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-3">
                                                                                    <h6 class="mb-0">Sub Category Status
                                                                                    </h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-4 text-secondary">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="active"
                                                                                            id="flexRadioDefault1"
                                                                                            {{ $sub_cat->status == 'active' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault1">
                                                                                            Active
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="inactive"
                                                                                            id="flexRadioDefault2"
                                                                                            {{ $sub_cat->status == 'inactive' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault2">
                                                                                            Inactive
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="row">
                                                                                <div class="col-sm-3"></div>
                                                                                <div class="col-sm-9 text-secondary">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Update</button>
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---Sub Category Update modal--->
                                                        <a href="{{ route('subcategory.destroy', [$sub_cat->id]) }}"
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

                    <div class="tab-content">
                        <div class="tab-pane fade show" id="js-tab3">

                            <div id="table2" class="card cardT">
                                <div class="card-header">
                                    <h4 class="mb-0 text-center">All Sub Sub Category</h4>
                                </div>
                                <table class="subSubCategoryDT table table-bordered table-hover datatable-highlight">
                                    <thead>
                                        <tr>
                                            <th width="10%">Sl No:</th>
                                            <th width="20%">Sub Sub Category Name</th>
                                            <th width="20%">Sub Category Name</th>
                                            <th width="20%">Category Name</th>
                                            <th width="20%">Status</th>
                                            <th width="10%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($sub_sub_cats)
                                            @foreach ($sub_sub_cats as $key => $sub_sub_cat)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $sub_sub_cat->title }}</td>
                                                    <td> {{ App\Models\Admin\SubCategory::where('id', $sub_sub_cat->sub_cat_id)->value('title') }}
                                                    </td>
                                                    <td> {{ App\Models\Admin\Category::where('id', $sub_sub_cat->cat_id)->value('title') }}
                                                    </td>
                                                    <td>
                                                        @if ($sub_sub_cat->status == 'active')
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="text-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#update_sub_sub_cat_{{ $sub_sub_cat->slug }}">
                                                            <i class="icon-pencil"></i>
                                                        </a>
                                                        <!---Sub Sub Category Update modal--->
                                                        <div id="update_sub_sub_cat_{{ $sub_sub_cat->slug }}"
                                                            class="modal fade" tabindex="-1" style="display: none;"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Sub Sub Category Update
                                                                            Form</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <div class="modal-body border br-7">
                                                                        @php
                                                                            $sub_sub_cat = App\Models\Admin\SubSubCategory::where('slug', $sub_sub_cat->slug)->first();
                                                                        @endphp
                                                                        <form method="post"
                                                                            action="{{ route('update.subsubcategory', $sub_sub_cat->id) }}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-4">
                                                                                    <h6 class="mb-0">Category Name</h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-8 text-secondary">
                                                                                    <select name="cat_id"
                                                                                        class="form-control select"
                                                                                        data-width="250"
                                                                                        data-minimum-results-for-search="Infinity">
                                                                                        <option value=""> -- Select
                                                                                            Category -- </option>
                                                                                        @foreach ($categorys as $cat)
                                                                                            <option
                                                                                                value="{{ $cat->id }}"
                                                                                                {{ $cat->id == $sub_sub_cat->cat_id ? 'selected' : '' }}>
                                                                                                {{ $cat->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-4">
                                                                                    <h6 class="mb-0">Sub Category Name
                                                                                    </h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-8 text-secondary">
                                                                                    <select name="sub_cat_id"
                                                                                        class="form-control select"
                                                                                        data-width="250"
                                                                                        data-minimum-results-for-search="Infinity">
                                                                                        <option value=""> -- Select
                                                                                            Category -- </option>
                                                                                        @foreach ($sub_cats as $sub_cat)
                                                                                            <option
                                                                                                value="{{ $sub_cat->id }}"
                                                                                                {{ $sub_cat->id == $sub_sub_cat->sub_cat_id ? 'selected' : '' }}>
                                                                                                {{ $sub_cat->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-4">
                                                                                    <h6 class="mb-0">Sub Sub Category
                                                                                        Name</h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-8 text-secondary">
                                                                                    <input type="text" name="title"
                                                                                        class="form-control maxlength"
                                                                                        maxlength="100"
                                                                                        value="{{ $sub_sub_cat->title }}" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-4">
                                                                                    <h6 class="mb-0">Sub Sub Category
                                                                                        Image </h6>
                                                                                </div>
                                                                                <div class="col-sm-8 text-secondary">
                                                                                    <input type="file" name="image"
                                                                                        class="form-control"
                                                                                        id="image2" accept="image/*" />
                                                                                    <div class="form-text">Accepts only
                                                                                        png, jpg, jpeg images</div>
                                                                                    <img id="showImage2"
                                                                                        src="{{ asset('storage/requestImg/' . $sub_sub_cat->image) }}"
                                                                                        height="80" alt="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-4">
                                                                                    <h6 class="mb-0">Sub Sub Category
                                                                                        Status</h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-4 text-secondary">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="active"
                                                                                            id="flexRadioDefault1"
                                                                                            {{ $sub_sub_cat->status == 'active' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault1">
                                                                                            Active
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="inactive"
                                                                                            id="flexRadioDefault2"
                                                                                            {{ $sub_sub_cat->status == 'inactive' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault2">
                                                                                            Inactive
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="row">
                                                                                <div class="col-sm-3"></div>
                                                                                <div class="col-sm-9 text-secondary">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Update</button>
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---Sub Sub Category Update modal--->
                                                        <a href="{{ route('subsubcategory.destroy', [$sub_sub_cat->id]) }}"
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

                    <div class="tab-content">
                        <div class="tab-pane fade show" id="js-tab4">

                            <div id="table2" class="card cardT">
                                <div class="card-header">
                                    <h4 class="mb-0 text-center">All Sub Sub Sub Category</h4>
                                </div>
                                <table class="subSubSubCategoryDT table table-bordered table-hover datatable-highlight">
                                    <thead>
                                        <tr>
                                            <th width="5%">Sl No:</th>
                                            <th width="20%">Sub Sub Sub Category Name</th>
                                            <th width="20%">Sub Sub Category Name</th>
                                            <th width="20%">Sub Category Name</th>
                                            <th width="20%">Category Name</th>
                                            <th width="10%">Status</th>
                                            <th width="5%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($sub_sub_sub_cats)
                                            @foreach ($sub_sub_sub_cats as $key => $sub_sub_sub_cat)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $sub_sub_sub_cat->title }}</td>
                                                    <td> {{ App\Models\Admin\SubSubCategory::where('id', $sub_sub_sub_cat->sub_sub_cat_id)->value('title') }}
                                                    </td>
                                                    <td> {{ App\Models\Admin\SubCategory::where('id', $sub_sub_sub_cat->sub_cat_id)->value('title') }}
                                                    </td>
                                                    <td> {{ App\Models\Admin\Category::where('id', $sub_sub_sub_cat->cat_id)->value('title') }}
                                                    </td>
                                                    <td>
                                                        @if ($sub_sub_sub_cat->status == 'active')
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="text-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#update_sub_sub_cat_{{ $sub_sub_sub_cat->slug }}">
                                                            <i class="icon-pencil"></i>
                                                        </a>
                                                        <!---Sub Sub Category Update modal--->
                                                        <div id="update_sub_sub_cat_{{ $sub_sub_sub_cat->slug }}"
                                                            class="modal fade" tabindex="-1" style="display: none;"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Sub Sub Category Update
                                                                            Form</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <div class="modal-body border br-7">
                                                                        @php
                                                                            $sub_sub_sub_cat = App\Models\Admin\SubSubSubCategory::where('slug', $sub_sub_sub_cat->slug)->first();
                                                                        @endphp
                                                                        <form method="post"
                                                                            action="{{ route('update.subsubsubcategory', $sub_sub_sub_cat->id) }}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-4">
                                                                                    <h6 class="mb-0">Category Name</h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-8 text-secondary">
                                                                                    <select name="cat_id"
                                                                                        class="form-control select"
                                                                                        data-width="250"
                                                                                        data-minimum-results-for-search="Infinity">
                                                                                        <option value=""> -- Select
                                                                                            Category -- </option>
                                                                                        @foreach ($categorys as $cat)
                                                                                            <option
                                                                                                value="{{ $cat->id }}"
                                                                                                {{ $cat->id == $sub_sub_sub_cat->cat_id ? 'selected' : '' }}>
                                                                                                {{ $cat->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-4">
                                                                                    <h6 class="mb-0">Sub Category Name
                                                                                    </h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-8 text-secondary">
                                                                                    <select name="sub_cat_id"
                                                                                        class="form-control select"
                                                                                        data-width="250"
                                                                                        data-minimum-results-for-search="Infinity">
                                                                                        <option value=""> -- Select
                                                                                            Category -- </option>
                                                                                        @foreach ($sub_cats as $sub_cat)
                                                                                            <option
                                                                                                value="{{ $sub_cat->id }}"
                                                                                                {{ $sub_cat->id == $sub_sub_sub_cat->sub_cat_id ? 'selected' : '' }}>
                                                                                                {{ $sub_cat->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-4">
                                                                                    <h6 class="mb-0">Sub Sub Category
                                                                                        Name</h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-8 text-secondary">
                                                                                    <select name="sub_sub_cat_id"
                                                                                        class="form-control select"
                                                                                        data-width="250"
                                                                                        data-minimum-results-for-search="Infinity">
                                                                                        <option value=""> -- Select
                                                                                            Category -- </option>
                                                                                        @foreach ($sub_sub_cats as $sub_sub_cat)
                                                                                            <option
                                                                                                value="{{ $sub_sub_cat->id }}"
                                                                                                {{ $sub_sub_cat->id == $sub_sub_sub_cat->sub_sub_cat_id ? 'selected' : '' }}>
                                                                                                {{ $sub_sub_cat->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-4">
                                                                                    <h6 class="mb-0">Sub Sub Sub Category
                                                                                        Name</h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-8 text-secondary">
                                                                                    <input type="text" name="title"
                                                                                        class="form-control maxlength"
                                                                                        maxlength="100"
                                                                                        value="{{ $sub_sub_sub_cat->title }}" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-4">
                                                                                    <h6 class="mb-0">Sub Sub Category
                                                                                        Image </h6>
                                                                                </div>
                                                                                <div class="col-sm-8 text-secondary">
                                                                                    <input type="file" name="image"
                                                                                        class="form-control"
                                                                                        id="image3" accept="image/*" />
                                                                                    <div class="form-text">Accepts only
                                                                                        png, jpg, jpeg images</div>
                                                                                    <img src="{{ asset('storage/requestImg/' . $sub_sub_sub_cat->image) }}"
                                                                                        height="80" alt="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <div class="col-sm-4">
                                                                                    <h6 class="mb-0">Sub Sub Category
                                                                                        Status</h6>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-4 text-secondary">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="active"
                                                                                            id="flexRadioDefault1"
                                                                                            {{ $sub_sub_sub_cat->status == 'active' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault1">
                                                                                            Active
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="inactive"
                                                                                            id="flexRadioDefault2"
                                                                                            {{ $sub_sub_sub_cat->status == 'inactive' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault2">
                                                                                            Inactive
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="row">
                                                                                <div class="col-sm-3"></div>
                                                                                <div class="col-sm-9 text-secondary">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Update</button>
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---Sub Sub Category Update modal--->
                                                        <a href="{{ route('subsubsubcategory.destroy', [$sub_sub_sub_cat->id]) }}"
                                                            class="text-danger delete mx-2">
                                                            <i class="delete icon-trash"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                {{ $sub_sub_sub_cats->links() }}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="card col-lg-5 mt-1 pt-2">
                    <div class="tab-content">
                        <div class="" id="cat-tab1">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <p class="text-center">Sub Category</p>
                                        <table class="table table-bordered table-hover text-center">
                                            <thead>
                                                <tr class="bg-dark text-white">
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td><a href="">HomePage</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <p class="text-center">Sub Sub Category</p>
                                        <table class="table table-bordered table-hover text-center">
                                            <thead>
                                                <tr class="bg-dark text-white">
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="">HomePage</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <p class="text-center">Sub Sub Sub Category</p>
                                        <table class="table table-bordered table-hover text-center">
                                            <thead>
                                                <tr class="bg-dark text-white">
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="">HomePage</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="d-none" id="cat-tab2">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <p class="strong card-title">Category</p>
                                        <table class="table table-bordered table-hover text-center">
                                            <thead>
                                                <tr class="bg-dark text-white">
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($categorys)
                                                @foreach ($categorys as $key => $category)
                                                <tr>
                                                    <td><a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#categoryshow">{{$category->title}}</a></td>
                                                </tr>
                                                @endforeach
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <p class="strong card-title">Sub Sub Category</p>
                                        <table class="table table-bordered table-hover text-center">
                                            <thead>
                                                <tr class="bg-dark text-white">
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="">HomePage</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <p class="strong card-title">Sub Sub Sub Category</p>
                                        <table class="table table-bordered table-hover text-center">
                                            <thead>
                                                <tr class="bg-dark text-white">
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="">HomePage</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="d-none" id="cat-tab3">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <p class="strong card-title">Category</p>
                                        <table class="table table-bordered table-hover text-center">
                                                <thead>
                                                    <tr class="bg-dark text-white">
                                                        <th>Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="">HomePage</a></td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <p class="strong card-title">Sub Category</p>
                                        <table class="table table-bordered table-hover text-center">
                                                <thead>
                                                    <tr class="bg-dark text-white">
                                                        <th>Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="">HomePage</a></td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <p class="strong card-title">Sub Sub Sub Category</p>
                                        <table class=" table table-bordered table-hover text-center">
                                                <thead>
                                                    <tr class="bg-dark text-white">
                                                        <th>Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="">HomePage</a></td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="d-none" id="cat-tab4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <p class="strong card-title">Category</p>
                                        <table class="table table-bordered table-hover text-center">
                                                <thead>
                                                    <tr class="bg-dark text-white">
                                                        <th>Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="">HomePage</a></td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <p class="strong card-title">Sub Category</p>
                                        <table class="table table-bordered table-hover text-center">
                                                <thead>
                                                    <tr class="bg-dark text-white">
                                                        <th>Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="">HomePage</a></td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <p class="strong card-title">Sub Sub Category</p>
                                    <table class="table table-bordered table-hover text-center">
                                            <thead>
                                                <tr class="bg-dark text-white">
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="">HomePage</a></td>
                                                </tr>
                                            </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> --}}
            </div>
        </div>

    </div>
    <!-- /content area -->
    <!-- /inner content -->

    </div>
    <script>
        $(document).ready(function() {
            $(".cat-tab1").click(function() {
                $("#cat-tab3").addClass('d-none');
                $("#cat-tab2").addClass('d-none');
                $("#cat-tab4").addClass('d-none');
                $("#cat-tab1").removeClass('d-none');
            });
            $(".cat-tab2").click(function() {
                $("#cat-tab1").addClass('d-none');
                $("#cat-tab3").addClass('d-none');
                $("#cat-tab4").addClass('d-none');
                $("#cat-tab2").removeClass('d-none');
            });
            $(".cat-tab3").click(function() {
                $("#cat-tab1").addClass('d-none');
                $("#cat-tab2").addClass('d-none');
                $("#cat-tab4").addClass('d-none');
                $("#cat-tab3").removeClass('d-none');
            });
            $(".cat-tab4").click(function() {
                $("#cat-tab1").addClass('d-none');
                $("#cat-tab2").addClass('d-none');
                $("#cat-tab3").addClass('d-none');
                $("#cat-tab4").removeClass('d-none');
            });
        });
    </script>

@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            function dropdownCategory() {
                var selectedTable = document.getElementById("dropdownCategory").value;
                var elements = document.getElementsByClassName('cardT')
                for (var i = 0; i < elements.length; i++) {
                    if (elements[i].id == selectedTable)
                        elements[i].style.display = '';
                    else
                        elements[i].style.display = 'none';
                }
            }
        </script>

        <script type="text/javascript">
            $('.categoryDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [1, 3, 4],
                }, ],
            });

            $('.subCategoryDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [1, 4, 5],
                }, ],
            });

            $('.subSubCategoryDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [4, 5],
                }, ],
            });

            $('.subSubSubCategoryDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [5, 6],
                }, ],
            });
        </script>
    @endpush
@endonce
