@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('homepage.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12" style="border-bottom: 1px solid black; padding: 10px">
                                </div>
                                <div class="col-12" style="border-bottom: 1px solid black;margin-top:10px;padding:10px">
                                    <h6 class="text-center" style="background:white;">Banner Section</h6>
                                    <div class="row">
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Banner 1 <span class="text-danger">*</span></label>
                                            <input type="file" name="branner1" class="form-control"
                                                placeholder="Upload your banner" id="image" required>
                                            <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                            <img id="showImage" height="100px" width="100px"
                                                src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                alt="">
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Banner 2 <span class="text-danger">*</span></label>
                                            <input type="file" name="branner2" class="form-control"
                                                placeholder="Upload your banner" id="image1" required>
                                            <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                            <img id="showImage1" height="100px" width="100px"
                                                src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                alt="">
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Banner 3 <span class="text-danger">*</span></label>
                                            <input type="file" name="branner3" class="form-control"
                                                placeholder="Upload your banner" id="image2" required>
                                            <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                            <img id="showImage2" height="100px" width="100px"
                                                src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12" style="border-bottom: 1px solid black;margin-top:10px;padding:10px">
                                    <h6 class="text-center" style="background:white;">Double Button Section</h6>
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Button 1 Title</label>
                                            <input type="text" name="btn1_title" class="form-control"
                                                placeholder="Write Something..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Button 2 Title</label>
                                            <input type="text" name="btn2_title" class="form-control"
                                                placeholder="Write Something..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Button 1 Name</label>
                                            <input type="text" name="btn1_name" class="form-control"
                                                placeholder="Write Something..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Button 2 Name</label>
                                            <input type="text" name="btn2_name" class="form-control"
                                                placeholder="Write Something..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Button 1 Link</label>
                                            <input type="text" name="btn1_link" class="form-control"
                                                placeholder="Write Something..." required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Button 2 Link</label>
                                            <input type="text" name="btn2_link" class="form-control"
                                                placeholder="Write Something..." required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12" style="border-bottom: 1px solid black;margin-top:10px; padding:10px">
                                    <h6 class="text-center" style="background:white;">Features Section</h6>
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Header 1 <span class="text-danger">*</span></label>
                                            <input type="text" name="header1" class="form-control"
                                                placeholder="Write Something..." required>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Header 2 <span class="text-danger">*</span></label>
                                            <input type="text" name="header2" class="form-control"
                                                placeholder="Write Something..." required>
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
                                                        <label>Feature 1</label>
                                                        <div class="form-group row">

                                                            <select name="story1_id" class="form-control select"
                                                                 id="select1">
                                                                <option></option>
                                                                @foreach ($client_experiences as $item)
                                                                    <option class="col-8" value="{{ $item->id }}">{{ $item->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body col-4">
                                                    <div class="basic-form">
                                                        <label>Feature 2</label>
                                                        <div class="form-group row">

                                                            <select name="story2_id" class="form-control select"
                                                                >
                                                                <option></option>
                                                                @foreach ($client_experiences as $item)
                                                                    <option class="col-8" value="{{ $item->id }}">{{ $item->title }}`
                                                                    </option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body col-4">
                                                    <div class="basic-form">
                                                        <label>Feature 3</label>
                                                        <div class="form-group row">

                                                            <select name="story3_id" class="form-control select"
                                                                 id="select3">
                                                                <option></option>
                                                                @foreach ($client_experiences as $item)
                                                                    <option class="col-8" value="{{ $item->id }}">
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
                                                        <label>Feature 4</label>
                                                        <div class="form-group row">

                                                            <select name="story4_id" class="form-control select"
                                                                 id="select4">
                                                                <option></option>
                                                                @foreach ($client_experiences as $item)
                                                                    <option class="col-8" value="{{ $item->id }}">
                                                                        {{ $item->title }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body col-4">
                                                    <div class="basic-form">
                                                        <div class="form-group">

                                                            <label>Feature 5</label>
                                                            <select name="story5_id" class="form-control select"
                                                                 id="select5">
                                                                <option></option>
                                                                @foreach ($client_experiences as $item)
                                                                    <option class="col-8" value="{{ $item->id }}">
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

                                        <div class="form-group col-3 basic-form">

                                            <label>Client Story 1</label>
                                            <select name="solution1_id" class="form-control select">
                                                <option></option>
                                                @foreach ($storys as $item)
                                                    <option class="col-8" value="{{ $item->id }}">{{ $item->badge }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-3 basic-form">

                                            <label>Client Story 2</label>
                                            <select name="solution2_id" class="form-control select"
                                                 id="select7">
                                                <option></option>
                                                @foreach ($storys as $item)
                                                    <option class="col-8" value="{{ $item->id }}">{{ $item->badge }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-3 basic-form">

                                            <label>Client Story 3</label>
                                            <select name="solution3_id" class="form-control select"
                                                 id="select8">
                                                <option></option>
                                                @foreach ($storys as $item)
                                                    <option class="col-8" value="{{ $item->id }}">{{ $item->badge }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-3 basic-form">

                                            <label>Client Story 4</label>
                                            <select name="solution4_id" class="form-control select"
                                                 id="select9">
                                                <option></option>
                                                @foreach ($storys as $item)
                                                    <option class="col-8" value="{{ $item->id }}">{{ $item->badge }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-12" style="border-bottom: 1px solid black;margin-top:10px">
                                    <h6 class="text-center" style="background:white;">Single Tech Glosy Row</h6>
                                    <div class="row pt-3 pb-3">

                                        <div class="form-group col-10 basic-form">
                                            <label>Sigle Tech Glossy</label>
                                            <select class="form-control select" name="techglossy_id">

                                                <option></option>
                                                @foreach ($techglossys as $item)
                                                    <option class="form-control" value="{{ $item->id }}">{{ $item->badge }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12" style="border-bottom: 1px solid black;margin-top:10px">
                                    <h6 class="text-center" style="background:white;">Client Success Row</h6>
                                    <div class="row pt-3 pb-3">
                                        <div class="form-group col-4 basic-form">

                                            <label>Client Success 1</label>
                                            <select name="success1_id" class="form-control select"
                                                 id="select10">
                                                <option></option>
                                                @foreach ($successes as $item)
                                                    <option class="col-8" value="{{ $item->tid}}">{{ $item->title }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-4 basic-form">

                                            <label>Client Success 2</label>
                                            <select name="success2_id" class="form-control select"
                                                 id="select11">
                                                <option></option>
                                                @foreach ($successes as $item)
                                                    <option class="col-8" value="{{ $item->tid}}">{{ $item->title }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-4 basic-form">

                                            <label>Client Success 3</label>
                                            <select name="success3_id" class="form-control select"
                                                 id="select12">
                                                <option></option>
                                                @foreach ($successes as $item)
                                                    <option class="col-8" value="{{ $item->id }}">{{ $item->title }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div><br>
                                <button type="submit" class="btn btn-sm btn-primary pull-right">Add Page<i
                                    class="ph-paper-plane-tilt ms-2"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">
    $("#select1").select2({
        placeholder: "Select a Client Experience",
        allowClear: true
    });
    $("#select2").select2({
        placeholder: "Select a Client Experience",
        allowClear: true
    });
    $("#select3").select2({
        placeholder: "Select a Client Experience",
        allowClear: true
    });
    $("#select4").select2({
        placeholder: "Select a Client Experience",
        allowClear: true
    });
    $("#select5").select2({
        placeholder: "Select a Client Experience",
        allowClear: true
    });
    $("#select6").select2({
        placeholder: "Select a Solution",
        allowClear: true
    });
    $("#select7").select2({
        placeholder: "Select a Solution",
        allowClear: true
    });
    $("#select8").select2({
        placeholder: "Select a Solution",
        allowClear: true
    });
    $("#select9").select2({
        placeholder: "Select a Solution",
        allowClear: true
    });
    $("#select10").select2({
        placeholder: "Select a Success Story",
        allowClear: true
    });
    $("#select11").select2({
        placeholder: "Select a Success Story",
        allowClear: true
    });
    $("#select12").select2({
        placeholder: "Select a Success Story",
        allowClear: true
    });
</script> --}}
@endsection
