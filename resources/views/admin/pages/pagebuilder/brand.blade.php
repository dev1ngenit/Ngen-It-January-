@extends('backend.master')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<!-- /# Sidebar -->
@include('backend.sidebar');
<!-- /# Header -->
@include('backend.header');
@include('frontend.flash-message')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">

            <!-- /# row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <h4><span style="float: left;font-size:15px">
                                    <p><a href="{{ url('choose') }}"><i class="fa fa-chevron-left"
                                                aria-hidden="true"></i>
                                            Back</a></p>
                                </span>Create a Page For Brand<span style="float: right;font-size:15px">
                                    <p><a href="{{ url('allpage') }}">View all page <i class="fa fa-chevron-right"
                                                aria-hidden="true"></i></a></p>
                                </span></h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="row" action="{{ route('addPage') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12" style="border-bottom: 1px solid black">
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
                                    </div>


                                    <div class="col-12" style="border-bottom: 1px solid black;margin-top:-10px">
                                        <h6 style="background:white; width:68px; margin:auto">Section 1</h6>
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


                                    <div class="col-12" style="border-bottom: 1px solid black; margin-top:-10px">
                                        <h6 style="background:white; width:68px; margin:auto">Section 2</h6>
                                        <div class="row">
                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Circle 1 Image</label>
                                                <input type="file" name="circle1" class="form-control"
                                                    placeholder="Upload your Circle 1 Image">
                                            </div>

                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Circle 1 Text</label>
                                                <input type="text" name="ctitle1" class="form-control"
                                                    placeholder="Enter your Circle 1 Text">
                                            </div>



                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Circle 2 Image</label>
                                                <input type="file" name="circle2" class="form-control"
                                                    placeholder="Upload your Circle 2 Image">
                                            </div>

                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Circle 2 Text</label>
                                                <input type="text" name="ctitle2" class="form-control"
                                                    placeholder="Enter your Circle 2 Text">
                                            </div>



                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Circle 3 Image</label>
                                                <input type="file" name="circle3" class="form-control"
                                                    placeholder="Upload your Circle 3 Image">
                                            </div>

                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Circle 3 Text</label>
                                                <input type="text" name="ctitle3" class="form-control"
                                                    placeholder="Enter your Circle 3 Text">
                                            </div>

                                        </div>
                                    </div>



                                    <div class="col-12" style="border-bottom: 1px solid black; margin-top:-10px">
                                        <h6 style="background:white; width:68px; margin:auto">Section 3</h6>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <tr>
                                                <p class="btn btn-sm btn-outline-primary ml-2" onclick="fun()">Write</p>
                                                <p class="btn btn-sm btn-outline-info" onclick="fun2()">Select</p>
                                            </tr>
                                        </div>

                                        <div id="write_type" class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <select class="form-control" name="write_type1" id=""
                                                onchange="writeform(this)">
                                                <option value="">Select Type</option>
                                                <option value="solution">Solution</option>
                                                <option value="product">Product</option>
                                            </select>
                                        </div>

                                        <div class="row" id="id">

                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Name</label>
                                                <input type="text" name="p1_title" class="form-control"
                                                    placeholder="Enter your product name...">
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Price</label>
                                                <input type="number" name="p1_price" class="form-control"
                                                    placeholder="Enter your price">
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Description</label>
                                                <textarea class="form-control" name="p1_description"
                                                    placeholder="Prodcut description..." rows="5"></textarea>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Image</label>
                                                <input type="file" name="p1_image" class="form-control"
                                                    placeholder="Upload your image">
                                            </div>

                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Product Type</label>
                                                <select name="p1_product_type" class="form-control">
                                                    <option>Select Type</option>
                                                    @foreach (productType() as $item)
                                                    <option value="{{ $item }}">{{ $item }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Category</label>
                                                <select name="p1_category" class="form-control">
                                                    <option>Select Category</option>
                                                    @foreach ($categories as $item)
                                                    <option value="{{ $item->title }}">{{ $item->title }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Sub Category</label>
                                                <select name="p1_sub_category" class="form-control">
                                                    <option>Select Sub Category</option>
                                                    @foreach (subCategory() as $item)
                                                    <option value="{{ $item }}">{{ $item }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Brands</label>
                                                <select name="p1_brand" class="form-control">
                                                    <option>Select Brand</option>
                                                    @foreach ($brands as $item)
                                                    <option value="{{ $item->title }}">{{ $item->title }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label>Industries</label>
                                                <select name="p1_industry" class="form-control">
                                                    <option>Select Industry</option>
                                                    @foreach ($industries as $item)
                                                    <option value="{{ $item->title }}">{{ $item->title }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div id="ws1">
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <label>Title</label>
                                                    <input type="name" name="s1_title" class="form-control"
                                                        placeholder="Enter your solution name...">

                                                    @error('title')
                                                    <p>{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <label>Description</label>
                                                    <input typ="text" class="form-control" name="s1_description"
                                                        placeholder="Prodcut description..." rows="5">

                                                    @error('description')
                                                    <p>{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <label>Heading 1</label>
                                                    <input type="text" class="form-control" name="s1_header1"
                                                        placeholder="Enter your heading here" rows="5">

                                                    @error('header1')
                                                    <p>{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                {{-- <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <label>Heading 2</label>
                                                    <input type="text" class="form-control" name="s1_header2"
                                                        placeholder="Enter your sub heading here" rows="5">

                                                    @error('header2')
                                                    <p>{{ $message }}</p>
                                                    @enderror
                                                </div> --}}


                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Solution</label>
                                         <p>
                                             <select name="s1_solutions" id="" class="form-control">
                                                 <option>Select Solution</option>
                                            @foreach($solutions as $solution)
                                                <option value="{{$solution->title}}">{{$solution->title}}</option>
                                            @endforeach 
                                            </select>
                                        </p>  
                                        @error('title')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Industry </label>
                                         <p>
                                             <select name="s1_industries" id="" class="form-control">
                                                 <option>Select Industries</option>
                                            @foreach($industries as $industry)
                                                <option value="{{$industry->title}}">{{$industry->title}}</option>
                                            @endforeach 
                                            </select>
                                        </p>  
                                        
                                        @error('title')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <label>Image</label>
                                                    <input type="file" class="form-control"
                                                        placeholder="Upload your image" name="s1_logo">
                                                    {{-- accept=".png" --}}
                                                    @error('logo')
                                                    <p>{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <label>Tag</label>
                                                    <input type="teg" class="form-control"
                                                        placeholder="Enter your tag name..." name="s1_tags" />

                                                    @error('tags')
                                                    <p>{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div id="fun" class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <select class="form-control" name="select_type1" id=""
                                                    onchange="myform(this)">
                                                    <option value="">Select Type</option>
                                                    <option value="solution">Solution</option>
                                                    <option value="product">Product</option>
                                                </select>
                                            </div>

                                            <div id="product" class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <select class="form-control" style="width: 100%;" name="title1_p"
                                                    id="select1">
                                                    <option></option>
                                                    @foreach ($products as $item)
                                                    <option value="{{ $item->title }}">{{ $item->title }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div id="solution" class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <select class="form-control" style="width: 100%;" name="title1_s"
                                                    id="select2">
                                                    <option></option>
                                                    @foreach ($blogs as $item)
                                                    <option value="{{ $item->title }}">{{ $item->title }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                            </div>

                            <div class="col-12" style="border-bottom: 1px solid black; margin-top:-10px ">
                                <h6 style="background:white; width:68px; margin:auto">Section 4</h6
                                    style="text-align: center">
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <tr>
                                        <p class="btn btn-sm btn-outline-primary" onclick="fun3()">Write</p>
                                        <p class="btn btn-sm btn-outline-info" onclick="fun4()">Select</p>
                                    </tr>
                                </div>

                                <div id="write_type2" class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <select class="form-control" name="write_type2" id="" onchange="writeform2(this)">
                                        <option value="">Select Type</option>
                                        <option value="solution">Solution</option>
                                        <option value="product">Product</option>
                                    </select>
                                </div>

                                <div class="row" id="id2">

                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <label>Name</label>
                                        <input type="text" name="p2_title" class="form-control"
                                            placeholder="Enter your product name...">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <label>Price</label>
                                        <input type="number" name="p2_price" class="form-control"
                                            placeholder="Enter your price">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <label>Description</label>
                                        <textarea class="form-control" name="p2_description"
                                            placeholder="Prodcut description..." rows="5"></textarea>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <label>Image</label>
                                        <input type="file" name="p2_image" class="form-control"
                                            placeholder="Upload your image">
                                    </div>

                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <label>Product Type</label>
                                        <select name="p2_product_type" class="form-control">
                                            <option>Select Type</option>
                                            @foreach (productType() as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <label>Category</label>
                                        <select name="p2_category" class="form-control">
                                            <option>Select Category</option>
                                            @foreach ($categories as $item)
                                            <option value="{{ $item->title }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <label>Sub Category</label>
                                        <select name="p2_sub_category" class="form-control">
                                            <option>Select Sub Category</option>
                                            @foreach (subCategory() as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <label>Brands</label>
                                        <select name="p2_brand" class="form-control">
                                            <option>Select Brand</option>
                                            @foreach ($brands as $item)
                                            <option value="{{ $item->title }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <label>Industries</label>
                                        <select name="p2_industry" class="form-control">
                                            <option>Select Industry</option>
                                            @foreach ($industries as $item)
                                            <option value="{{ $item->title }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div id="ws2">
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Title</label>
                                            <input type="name" name="s2_title" class="form-control"
                                                placeholder="Enter your solution name...">

                                            @error('title')
                                            <p>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Description</label>
                                            <input typ="text" class="form-control" name="s2_description"
                                                placeholder="Prodcut description..." rows="5">

                                            @error('description')
                                            <p>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Heading 1</label>
                                            <input type="text" class="form-control" name="s2_header1"
                                                placeholder="Enter your heading here" rows="5">

                                            @error('header1')
                                            <p>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Heading 2</label>
                                            <input type="text" class="form-control" name="s2_header2"
                                                placeholder="Enter your sub heading here" rows="5">

                                            @error('header2')
                                            <p>{{ $message }}</p>
                                            @enderror
                                        </div> --}}

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Solution</label>
                                         <p>
                                             <select name="s2_solutions" id="" class="form-control">
                                                 <option>Select Solution</option>
                                            @foreach($solutions as $solution)
                                                <option value="{{$solution->title}}">{{$solution->title}}</option>
                                            @endforeach 
                                            </select>
                                        </p>  
                                        @error('title')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Industry </label>
                                         <p>
                                             <select name="s2_industries" id="" class="form-control">
                                                 <option>Select Industries</option>
                                            @foreach($industries as $industry)
                                                <option value="{{$industry->title}}">{{$industry->title}}</option>
                                            @endforeach 
                                            </select>
                                        </p>  
                                        
                                        @error('title')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Image</label>
                                            <input type="file" class="form-control" placeholder="Upload your image"
                                                name="s2_logo">
                                            {{-- accept=".png" --}}
                                            @error('logo')
                                            <p>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Tag</label>
                                            <input type="teg" class="form-control" placeholder="Enter your tag name..."
                                                name="s2_tags" />

                                            @error('tags')
                                            <p>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div id="fun1" class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <select class="form-control" name="select_type2" id="" onchange="myform1(this)">
                                            <option value="">Select Type</option>
                                            <option value="solution">Solution</option>
                                            <option value="product">Product</option>
                                        </select>
                                    </div>

                                    <div id="product1" class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <select class="form-control" style="width: 100%;" name="title2_p" id="select3">
                                            <option></option>
                                            @foreach ($products as $item)
                                            <option value="{{ $item->title }}">{{ $item->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div id="solution1" class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <select class="form-control" style="width: 100%;" name="title2_s" id="select4">
                                            <option></option>
                                            @foreach ($blogs as $item)
                                            <option value="{{ $item->title }}">{{ $item->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>

                        <div class="col-12" style="border-bottom: 1px solid black; margin-top:-10px">
                            <h6 style="background:white; width:68px; margin:auto">Section 5</h6
                                style="text-align: center">
                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                <tr>
                                    <p class="btn btn-sm btn-outline-primary" onclick="fun5()">Write</p>
                                    <p class="btn btn-sm btn-outline-info" onclick="fun6()">Select</p>
                                </tr>
                            </div>

                            <div id="write_type3" class="form-group col-lg-4 col-md-6 col-sm-12">
                                <select class="form-control" name="write_type3" id="" onchange="writeform3(this)">
                                    <option value="">Select Type</option>
                                    <option value="solution">Solution</option>
                                    <option value="product">Product</option>
                                </select>
                            </div>

                            <div class="row" id="id3">

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Name</label>
                                    <input type="text" name="p3_title" class="form-control"
                                        placeholder="Enter your product name...">
                                </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Price</label>
                                    <input type="number" name="p3_price" class="form-control"
                                        placeholder="Enter your price">
                                </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Description</label>
                                    <textarea class="form-control" name="p3_description"
                                        placeholder="Prodcut description..." rows="5"></textarea>
                                </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Image</label>
                                    <input type="file" name="p3_image" class="form-control"
                                        placeholder="Upload your image">
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Product Type</label>
                                    <select name="p3_product_type" class="form-control">
                                        <option>Select Type</option>
                                        @foreach (productType() as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Category</label>
                                    <select name="p3_category" class="form-control">
                                        <option>Select Category</option>
                                        @foreach ($categories as $item)
                                        <option value="{{ $item->title }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Sub Category</label>
                                    <select name="p3_sub_category" class="form-control">
                                        <option>Select Sub Category</option>
                                        @foreach (subCategory() as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Brands</label>
                                    <select name="p3_brand" class="form-control">
                                        <option>Select Brand</option>
                                        @foreach ($brands as $item)
                                        <option value="{{ $item->title }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Industries</label>
                                    <select name="p3_industry" class="form-control">
                                        <option>Select Industry</option>
                                        @foreach ($industries as $item)
                                        <option value="{{ $item->title }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div id="ws3">
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Title</label>
                                        <input type="name" name="s3_title" class="form-control"
                                            placeholder="Enter your solution name...">

                                        @error('title')
                                        <p>{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Description</label>
                                        <input typ="text" class="form-control" name="s3_description"
                                            placeholder="Prodcut description..." rows="5">

                                        @error('description')
                                        <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Heading 1</label>
                                        <input type="text" class="form-control" name="s3_header1"
                                            placeholder="Enter your heading here" rows="5">

                                        @error('header1')
                                        <p>{{ $message }}</p>
                                        @enderror
                                    </div>

                                    {{-- <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Heading 2</label>
                                        <input type="text" class="form-control" name="s3_header2"
                                            placeholder="Enter your sub heading here" rows="5">

                                        @error('header2')
                                        <p>{{ $message }}</p>
                                        @enderror
                                    </div> --}}


                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Solution</label>
                                         <p>
                                             <select name="s3_solutions" id="" class="form-control">
                                                 <option>Select Solution</option>
                                            @foreach($solutions as $solution)
                                                <option value="{{$solution->title}}">{{$solution->title}}</option>
                                            @endforeach 
                                            </select>
                                        </p>  
                                        @error('title')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Industry </label>
                                         <p>
                                             <select name="s3_industries" id="" class="form-control">
                                                 <option>Select Industries</option>
                                            @foreach($industries as $industry)
                                                <option value="{{$industry->title}}">{{$industry->title}}</option>
                                            @endforeach 
                                            </select>
                                        </p>  
                                        
                                        @error('title')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Image</label>
                                        <input type="file" class="form-control" placeholder="Upload your image"
                                            name="s3_logo">
                                        {{-- accept=".png" --}}
                                        @error('logo')
                                        <p>{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Tag</label>
                                        <input type="teg" class="form-control" placeholder="Enter your tag name..."
                                            name="s3_tags" />

                                        @error('tags')
                                        <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div id="fun2" class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <select class="form-control" name="select_type3" id="" onchange="myform2(this)">
                                        <option value="">Select Type</option>
                                        <option value="solution">Solution</option>
                                        <option value="product">Product</option>
                                    </select>
                                </div>

                                <div id="product2" class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <select class="form-control" style="width: 100%;" name="title3_p" id="select5">
                                        <option></option>
                                        @foreach ($products as $item)
                                        <option value="{{ $item->title }}">{{ $item->title }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div id="solution2" class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <select class="form-control" style="width: 100%;" name="title3_s" id="select6">
                                        <option></option>
                                        @foreach ($blogs as $item)
                                        <option value="{{ $item->title }}">{{ $item->title }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="col-12" style="border-bottom: 1px solid black; margin-top:-10px">
                            <h6 style="background:white; width:68px; margin:auto">Section 6</h6
                                style="text-align: center">
                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                <tr>
                                    <p class="btn btn-sm btn-outline-primary" onclick="fun7()">Write</p>
                                    <p class="btn btn-sm btn-outline-info" onclick="fun8()">Select</p>
                                </tr>
                            </div>

                            <div id="write_type4" class="form-group col-lg-4 col-md-6 col-sm-12">
                                <select class="form-control" name="write_type4" id="" onchange="writeform4(this)">
                                    <option value="">Select Type</option>
                                    <option value="solution">Solution</option>
                                    <option value="product">Product</option>
                                </select>
                            </div>

                            <div class="row" id="id4">

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Name</label>
                                    <input type="text" name="p4_title" class="form-control"
                                        placeholder="Enter your product name...">
                                </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Price</label>
                                    <input type="number" name="p4_price" class="form-control"
                                        placeholder="Enter your price">
                                </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Description</label>
                                    <textarea class="form-control" name="p4_description"
                                        placeholder="Prodcut description..." rows="5"></textarea>
                                </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Image</label>
                                    <input type="file" name="p4_image" class="form-control"
                                        placeholder="Upload your image">
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Product Type</label>
                                    <select name="p4_product_type" class="form-control">
                                        <option>Select Type</option>
                                        @foreach (productType() as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Category</label>
                                    <select name="p4_category" class="form-control">
                                        <option>Select Category</option>
                                        @foreach ($categories as $item)
                                        <option value="{{ $item->title }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Sub Category</label>
                                    <select name="p4_sub_category" class="form-control">
                                        <option>Select Sub Category</option>
                                        @foreach (subCategory() as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Brands</label>
                                    <select name="p4_brand" class="form-control">
                                        <option>Select Brand</option>
                                        @foreach ($brands as $item)
                                        <option value="{{ $item->title }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Industries</label>
                                    <select name="p4_industry" class="form-control">
                                        <option>Select Industry</option>
                                        @foreach ($industries as $item)
                                        <option value="{{ $item->title }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div id="ws4">
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Title</label>
                                        <input type="name" name="s4_title" class="form-control"
                                            placeholder="Enter your solution name...">

                                        @error('title')
                                        <p>{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Description</label>
                                        <input typ="text" class="form-control" name="s4_description"
                                            placeholder="Prodcut description..." rows="5">

                                        @error('description')
                                        <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Heading 1</label>
                                        <input type="text" class="form-control" name="s4_header1"
                                            placeholder="Enter your heading here" rows="5">

                                        @error('header1')
                                        <p>{{ $message }}</p>
                                        @enderror
                                    </div>

                                    {{-- <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Heading 2</label>
                                        <input type="text" class="form-control" name="s4_header2"
                                            placeholder="Enter your sub heading here" rows="5">

                                        @error('header2')
                                        <p>{{ $message }}</p>
                                        @enderror
                                    </div> --}}

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Solution</label>
                                         <p>
                                             <select name="s4_solutions" id="" class="form-control">
                                                 <option>Select Solution</option>
                                            @foreach($solutions as $solution)
                                                <option value="{{$solution->title}}">{{$solution->title}}</option>
                                            @endforeach 
                                            </select>
                                        </p>  
                                        @error('title')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Industry </label>
                                         <p>
                                             <select name="s4_industries" id="" class="form-control">
                                                 <option>Select Industries</option>
                                            @foreach($industries as $industry)
                                                <option value="{{$industry->title}}">{{$industry->title}}</option>
                                            @endforeach 
                                            </select>
                                        </p>  
                                        
                                        @error('title')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Image</label>
                                        <input type="file" class="form-control" placeholder="Upload your image"
                                            name="s4_logo">
                                        {{-- accept=".png" --}}
                                        @error('logo')
                                        <p>{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Tag</label>
                                        <input type="teg" class="form-control" placeholder="Enter your tag name..."
                                            name="s4_tags" />

                                        @error('tags')
                                        <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div id="fun3" class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <select class="form-control" name="select_type4" id="" onchange="myform3(this)">
                                        <option value="">Select Type</option>
                                        <option value="solution">Solution</option>
                                        <option value="product">Product</option>
                                    </select>
                                </div>

                                <div id="product3" class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <select class="form-control" style="width: 100%;" name="title4_p" id="select7">
                                        <option></option>
                                        @foreach ($products as $item)
                                        <option value="{{ $item->title }}">{{ $item->title }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div id="solution3" class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <select class="form-control" style="width: 100%;" name="title4_s" id="select8">
                                        <option></option>
                                        @foreach ($blogs as $item)
                                        <option value="{{ $item->title }}">{{ $item->title }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                </div>
            </div>

            <button style="margin-bottom:30px " type="submit" class="btn btn-info ml-2 mt-2 pull-right">Add
                Page</button>
            </form>
        </div>
    </div>
</div>
</div>

</div>
</div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script>
    $("#id").hide();
    $("#id2").hide();
    $("#id3").hide();
    $("#id4").hide();

    $("#fun").hide();
    $("#fun1").hide();
    $("#fun2").hide();
    $("#fun3").hide();


    $("#product").hide();
    $("#solution").hide();
    $("#product1").hide();
    $("#solution1").hide();
    $("#product2").hide();
    $("#solution2").hide();
    $("#product3").hide();
    $("#solution3").hide();

    $("#write_type").hide();
    $("#ws1").hide();
    $("#write_type2").hide();
    $("#ws2").hide();
    $("#write_type3").hide();
    $("#ws3").hide();
    $("#write_type4").hide();
    $("#ws4").hide();



    function fun() {
        $("#write_type").show();
        $("#id").hide();
        $("#fun").hide();
        $("#product").hide();
        $("#solution").hide();
    }

    function fun2() {
        $("#fun").show();
        $("#id").hide();
        $("#write_type").hide();
        $("#ws1").hide();
    }



    function fun3() {
        $("#write_type2").show();
        $("#id2").hide();
        $("#fun1").hide();
        $("#product1").hide();
        $("#solution1").hide();
    }

    function fun4() {
        $("#fun1").show();
        $("#id2").hide();
        $("#write_type2").hide();
        $("#ws2").hide();

    }



    function fun5() {
        $("#write_type3").show();
        $("#id3").hide();
        $("#fun2").hide();
        $("#product2").hide();
        $("#solution2").hide();
    }

    function fun6() {
        $("#fun2").show();
        $("#id3").hide();
        $("#write_type3").hide();
        $("#ws3").hide();

    }



    function fun7() {
        $("#write_type4").show();
        $("#id4").hide();
        $("#fun3").hide();
        $("#product3").hide();
        $("#solution3").hide();
    }

    function fun8() {
        $("#fun3").show();
        $("#id4").hide();
        $("#write_type4").hide();
        $("#ws4").hide();

    }




    function myform(sel) {
        $var = sel.value;
        if ($var === 'product') {
            $("#product").show();
            $("#solution").hide();
        }
        if ($var === 'solution') {
            $("#solution").show();
            $("#product").hide();
        }
    }

    function myform1(sel) {
        $var = sel.value;
        if ($var === 'product') {
            $("#product1").show();
            $("#solution1").hide();
        }
        if ($var === 'solution') {
            $("#solution1").show();
            $("#product1").hide();
        }
    }

    function myform2(sel) {
        $var = sel.value;
        if ($var === 'product') {
            $("#product2").show();
            $("#solution2").hide();
        }
        if ($var === 'solution') {
            $("#solution2").show();
            $("#product2").hide();
        }
    }

    function myform3(sel) {
        $var = sel.value;
        if ($var === 'product') {
            $("#product3").show();
            $("#solution3").hide();
        }
        if ($var === 'solution') {
            $("#solution3").show();
            $("#product3").hide();
        }
    }


    function writeform(sel) {
        $var = sel.value;
        if ($var === 'product') {
            $("#id").show();
            $("#ws1").hide();
        }
        if ($var === 'solution') {
            $("#ws1").show();
            $("#id").hide();
        }
    }

    function writeform2(sel) {
        $var = sel.value;
        if ($var === 'product') {
            $("#id2").show();
            $("#ws2").hide();
        }
        if ($var === 'solution') {
            $("#ws2").show();
            $("#id2").hide();
        }
    }

    function writeform3(sel) {
        $var = sel.value;
        if ($var === 'product') {
            $("#id3").show();
            $("#ws3").hide();
        }
        if ($var === 'solution') {
            $("#ws3").show();
            $("#id3").hide();
        }
    }

    function writeform4(sel) {
        $var = sel.value;
        if ($var === 'product') {
            $("#id4").show();
            $("#ws4").hide();
        }
        if ($var === 'solution') {
            $("#ws4").show();
            $("#id4").hide();
        }
    }

</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">
    $("#select1").select2({
        placeholder: "Select a Product",
        allowClear: true
    });

    $("#select2").select2({
        placeholder: "Select a Solution",
        allowClear: true
    });

    $("#select3").select2({
        placeholder: "Select a Product",
        allowClear: true
    });

    $("#select4").select2({
        placeholder: "Select a Solution",
        allowClear: true
    });
    $("#select5").select2({
        placeholder: "Select a Product",
        allowClear: true
    });

    $("#select6").select2({
        placeholder: "Select a Solution",
        allowClear: true
    });

    $("#select7").select2({
        placeholder: "Select a Product",
        allowClear: true
    });

    $("#select8").select2({
        placeholder: "Select a Solution",
        allowClear: true
    });

</script>
@endsection
