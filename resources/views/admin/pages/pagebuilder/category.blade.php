@extends('backend.master')

@section('content')
    {{-- @dd($displayCables); --}}
    @include('backend.sidebar')

    @include('backend.header');

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="card">

                    <div class="card-body">

                        <form action="{{ route('addPageCategory') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div class="col-12" style="border-bottom: 1px solid black">
                                        <div class="row">
                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>For Which Category</label>
                                                <select name="category" class="form-control">
                                                    <option>Select Catgeory</option>
                                                    @foreach ($categories as $item)
                                                    <option value="{{ $item->sub_category }}">{{ $item->sub_category }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                        <div class="col-12" style="border-bottom: 1px solid black;margin-top:-10px">
                            <h6 style="background:white; width:68px; margin:auto">Banner</h6>
                            <div class="row">
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Banner</label>
                                    <input type="file" name="banner" class="form-control"
                                        placeholder="Upload your banner">
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>H1</label>
                                    <input type="text" name="h1" class="form-control"
                                        placeholder="Enter your H1 Text">
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>H2</label>
                                    <input type="text" name="h2" class="form-control"
                                        placeholder="Enter your H2 Text">
                                </div>
                            </div>
                        </div>

                        <div class="col-12" style="border-bottom: 1px solid black;margin-top:-10px">
                            <h6 style="background:white; width:114px; margin:auto">Display Cables</h6>
                            <div class="row">
                                <!-- /# row -->
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 1</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category1" class="form-control" id="select1">
                                                            <option></option>
                                                            @foreach ($displayCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 2</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category2" class="form-control" id="select2">
                                                            <option></option>
                                                            @foreach ($displayCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 3</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category3" class="form-control" id="select3">
                                                            <option></option>
                                                            @foreach ($displayCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="basic-form">
                                                <label>Category 4</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category4" class="form-control" id="select4">
                                                            <option></option>
                                                            @foreach ($displayCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-12" style="border-bottom: 1px solid black;margin-top:-10px">
                            <h6 style="background:white; width:114px; margin:auto">Network Cables</h6>
                            <div class="row">
                                <!-- /# row -->
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 1</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category5" class="form-control" id="select5">
                                                            <option></option>
                                                            @foreach ($networkCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 2</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category6" class="form-control" id="select6">
                                                            <option></option>
                                                            @foreach ($networkCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 3</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category7" class="form-control" id="select7">
                                                            <option></option>
                                                            @foreach ($networkCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="basic-form">
                                                <label>Category 4</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category8" class="form-control" id="select8">
                                                            <option></option>
                                                            @foreach ($networkCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12" style="border-bottom: 1px solid black;margin-top:-10px">
                            <h6 style="background:white; width:90px; margin:auto">Adapters</h6>
                            <div class="row">
                                <!-- /# row -->
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 1</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category9" class="form-control" id="select9">
                                                            <option></option>
                                                            @foreach ($adapters as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 2</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category10" class="form-control" id="select10">
                                                            <option></option>
                                                            @foreach ($adapters as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 3</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category11" class="form-control" id="select11">
                                                            <option></option>
                                                            @foreach ($adapters as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="basic-form">
                                                <label>Category 4</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category12" class="form-control" id="select12">
                                                            <option></option>
                                                            @foreach ($adapters as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12" style="border-bottom: 1px solid black;margin-top:-10px">
                            <h6 style="background:white; width:114px; margin:auto">Storage Cables</h6>
                            <div class="row">
                                <!-- /# row -->
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 1</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category13" class="form-control" id="select13">
                                                            <option></option>
                                                            @foreach ($storageCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 2</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category14" class="form-control" id="select14">
                                                            <option></option>
                                                            @foreach ($storageCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 3</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category15" class="form-control" id="select15">
                                                            <option></option>
                                                            @foreach ($storageCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="basic-form">
                                                <label>Category 4</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category16" class="form-control" id="select16">
                                                            <option></option>
                                                            @foreach ($storageCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12" style="border-bottom: 1px solid black;margin-top:-10px">
                            <h6 style="background:white; width:114px; margin:auto">Power Cables</h6>
                            <div class="row">
                                <!-- /# row -->
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 1</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category17" class="form-control" id="select17">
                                                            <option></option>
                                                            @foreach ($powerCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 2</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category18" class="form-control" id="select18">
                                                            <option></option>
                                                            @foreach ($powerCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                <label>Category 3</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category19" class="form-control" id="select19">
                                                            <option></option>
                                                            @foreach ($powerCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="basic-form">
                                                <label>Category 4</label>
                                                <div class="form-group row">
                                                    <div class="form-group-inner">
                                                        <select name="category20" class="form-control" id="select20">
                                                            <option></option>
                                                            @foreach ($powerCables as $item)
                                                                <option value="{{ $item->sub_sub_sub_category }}">
                                                                    {{ $item->sub_sub_sub_category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-sm btn-info pull-right">Add Page</button>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script type="text/javascript">
        $("#select1").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select2").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select3").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select4").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select5").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select6").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select7").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select8").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select9").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select10").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select11").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select12").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select13").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select14").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select15").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select16").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select17").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select18").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select19").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
        $("#select20").select2({
            placeholder: "Select a Child",
            allowClear: true
        });
    </script>
@endsection
