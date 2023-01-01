@extends('backend.master')
@section('content')
    <!-- /# Sidebar -->
    @include('backend.sidebar');
    <!-- /# Header -->
    @include('backend.header');
    @include('frontend.flash-message')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                {{-- <select name="" id="">
                    @foreach ($routeCollection as $value)
                    <option value="">{{ $value->uri() }}</option>
                    @endforeach
                </select> --}}

                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Edit Page For Brand {{ $data->brand }} <span style="float: right;font-size:15px"><p><a href="{{ url('allpage') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</a></p></span></h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="row" action="{{ route('updatePage',['id' => $data->id]) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        {{-- <div class="col-12" style="border-bottom: 1px solid black">
                                            <div class="row">
                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>For Which Brand</label>
                                                    <select name="brand" class="form-control">
                                                        <option>Select Brand</option>
                                                        @foreach ($brands as $item)
                                                            <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div> --}}


                                        <div class="col-12" style="border-bottom: 1px solid black">
                                            <div class="row">
                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Banner</label>
                                                    <img width="100px;" class="pull-right mb-2" src="{{ asset('storage/Banner/'.$data->banner) }}" alt="">
                                                    <input type="file" name="banner" class="form-control"
                                                        placeholder="Upload your banner">
                                                    <input type="hidden" name='previous_banner' value="{{ $data->banner }}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>H1</label>
                                                    <input type="text" name="h1" class="form-control"
                                                        value="{{ $data->h1 }}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>H2</label>
                                                    <input type="text" name="h2" class="form-control"
                                                    value="{{ $data->h2 }}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12" style="border-bottom: 1px solid black">
                                            <div class="row">
                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Circle 1 Image</label>
                                                    <img width="100px;" class="pull-right mb-2" src="{{ asset('storage/Circle1/'.$data->circle1) }}" alt="">
                                                    <input type="file" name="circle1" class="form-control"
                                                        placeholder="Upload your Circle 1 Image">
                                                    <input type="hidden" name="previous_circle1" value="{{$data->circle1}}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Circle 1 Text</label>
                                                    <input type="text" name="ctitle1" class="form-control"
                                                        value="{{ $data->ctitle1 }}">
                                                </div>



                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Circle 2 Image</label>
                                                    <img width="100px;" class="pull-right mb-2" src="{{ asset('storage/Circle2/'.$data->circle2) }}" alt="">
                                                    <input type="file" name="circle2" class="form-control"
                                                        placeholder="Upload your Circle 2 Image">
                                                        <input type="hidden" name="previous_circle2" value="{{$data->circle2}}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Circle 2 Text</label>
                                                    <input type="text" name="ctitle2" class="form-control"
                                                    value="{{ $data->ctitle2 }}">
                                                </div>



                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Circle 3 Image</label>
                                                    <img width="100px;" class="pull-right mb-2" src="{{ asset('storage/Circle2/'.$data->circle2) }}" alt="">
                                                    <input type="file" name="circle3" class="form-control">
                                                    <input type="hidden" name="previous_circle3" value="{{$data->circle3}}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Circle 3 Text</label>
                                                    <input type="text" name="ctitle3" class="form-control"
                                                    value="{{ $data->ctitle3 }}">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="col-12" style="border-bottom: 1px solid black">
                                            <div class="row">

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Title 1</label>
                                                    <input type="text" name="title1" class="form-control"
                                                       value="{{ $data->title1 }}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Description 1</label>
                                                    <input type="text" name="description1" class="form-control"
                                                        value="{{ $data->description1 }}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Button 1</label>
                                                    <input type="text" name="btn1" class="form-control"
                                                        value="{{ $data->btn1 }}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label> Image 1</label>
                                                    <img width="100px;" class="pull-right mb-2" src="{{ asset('storage/Img1/'.$data->img1) }}" alt="">
                                                    <input type="file" name="img1" class="form-control">
                                                    <input type="hidden" name="previous_img1" value="{{$data->img1}}">
                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-12" style="border-bottom: 1px solid black">
                                            <div class="row">

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label> Image 2</label>
                                                    <img width="100px;" class="pull-right mb-2" src="{{ asset('storage/Img2/'.$data->img2) }}" alt="">
                                                    <input type="file" name="img2" class="form-control"
                                                        placeholder="Upload your Image 2">
                                                        <input type="hidden" name="previous_img2" value="{{$data->img2}}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Title 2</label>
                                                    <input type="text" name="title2" class="form-control"
                                                    value="{{ $data->title2 }}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Description 2</label>
                                                    <input type="text" name="description2" class="form-control"
                                                        value="{{ $data->description2 }}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Button 2</label>
                                                    <input type="text" name="btn2" class="form-control"
                                                        value="{{ $data->btn2 }}">
                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-12" style="border-bottom: 1px solid black">
                                            <div class="row">

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Title 3</label>
                                                    <input type="text" name="title3" class="form-control"
                                                    value="{{ $data->title3 }}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Description 3</label>
                                                    <input type="text" name="description3" class="form-control"
                                                    value="{{ $data->description3 }}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Button 3</label>
                                                    <input type="text" name="btn3" class="form-control"
                                                    value="{{ $data->btn3 }}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label> Image 3</label>
                                                    <img width="100px;" class="pull-right mb-2" src="{{ asset('storage/Img3/'.$data->img3) }}" alt="">
                                                    <input type="file" name="img3" class="form-control"
                                                       >
                                                       <input type="hidden" name="previous_img3" value="{{$data->img3}}">

                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-12" style="border-bottom: 1px solid black">
                                            <div class="row">

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label> Image 4</label>
                                                    <img width="100px;" class="pull-right mb-2" src="{{ asset('storage/Img4/'.$data->img4) }}" alt="">
                                                    <input type="file" name="img4" class="form-control"
                                                        >
                                                        <input type="hidden" name="previous_img4" value="{{$data->img4}}">

                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Title 4</label>
                                                    <input type="text" name="title4" class="form-control"
                                                    value="{{ $data->title4 }}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Description 4</label>
                                                    <input type="text" name="description4" class="form-control"
                                                    value="{{ $data->description4 }}">
                                                </div>

                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>Button 4</label>
                                                    <input type="text" name="btn4" class="form-control"
                                                    value="{{ $data->btn4 }}">
                                                </div>

                                            </div>
                                        </div>

                                </div>
                                <button type="submit" class="btn btn-info ml-2 mt-2 pull-right">Update Page</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
