@extends('frontend.master')
@section('content')
    <!--=======// Featured client stories //=======-->
    <div class="header_title_clinet_stories" style="margin-top: 100px;">
        <h2 class="text-center text-white">All Client Stories</h2>
    </div>

    <section class="container padding_bottom">
        <div class="featured_client_stories_wrapper">
            <div class="featured_client_stories">
                <div class="container">
                    <div class="featured_client_stories_title">
                        <h2 class="">Featured Stories</h2>
                    </div>

                    <div class="row">

                        <!--------item------->
                        @foreach ($featured_storys as $item )
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client_stories_item">
                                <a href="#">
                                    <img class="img-fluid" src="{{asset('storage/'.$item->image)}}" alt="{{$item->badge}}">
                                    <h6>{{$item->badge}}</h6>
                                    <h3><strong>{{$item->title}}</strong></h3>
                                </a>

                            </div>
                        </div>
                        @endforeach
                        <!--------item------->

                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-------End------->
    <hr>
    <!--=======// Content & Filter //=======-->
    <section class="container section_padding">
        <!----------Filter Top-nav Bar --------->
        <div class="clinet_stories_filter_top_bar">
            <label>Results per page </label>
            <span class="client_story_filter_page">
                <select>
                    <option value="#" selected>10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                </select>
            </span>

            <label class="ml-4">Filter By: </label>
            <span class="client_story_filter_all_year">
                <select>
                    <option value="#" selected>All years</option>
                    <option value="#">2022</option>
                    <option value="#">2021</option>
                    <option value="#">2020</option>
                    <option value="#">2019</option>
                    <option value="#">2018</option>
                    <option value="#">2017</option>
                    <option value="#">2016</option>
                    <option value="#">2015</option>
                    <option value="#">2014</option>
                    <option value="#">2013</option>
                    <option value="#">2012</option>
                </select>
            </span>
        </div>
        <hr>
        <div class="row">
            <!----------Sidebar client stories --------->
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="sidebar_client_stories">
                    <label> <b>2</b>results matched your search</label>

                    <hr>
                    <!--------Your search--------->
                    <div class="client_stories_your_search">
                        <h6 class="mb-4">Your search</h6>
                        <div class="alert alert-secondary alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>Education (higher)
                        </div>
                        <div class="alert alert-secondary alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>Application (low)
                        </div>
                    </div>

                    <hr>
                    <!-------Content Results---------->
                    <div class="client_stories_narrow_content">
                        <h6 class="mb-4">Narrow content results</h6>
                        <input type="text" placeholder="BY KEYWORD...">
                    </div>

                    <hr>
                    <!--------Topic--------->
                    <div class="client_stories_filter_category">
                        <h6 onclick="myFunction()" class="mb-4"><i class="fa-solid fa-caret-down"></i> Topic</h6>

                        <div id="filter_category">
                            @php

		                    //$tags = explode(',', $tag_items);
                        @endphp
                        @foreach ($tag_items as $tag_item)
                        @php

                            $tags = explode(',', $tag_item);
                         @endphp
                         @if(!empty($_GET['category']))
                         @php
                         $filterCat = explode(',',$_GET['category']);
                         @endphp
                         @endif
                         @foreach($tags as $item)

                         <div class="form-check">
                             <input name="tag" value="{{$item}}" class="form-check-input custom" type="checkbox" id="flexCheckDefault" onchange="this.form.submit()">
                             <span class="ml-2">{{$item}}</span>
                         </div>
                         @endforeach
                         @endforeach



                        </div>

                    </div>
                    <hr>
                    <!--------Industry--------->
                    {{-- <div class="client_stories_filter_category">
                        <h6 onclick="myFunction()" class="mb-4"><i class="fa-solid fa-caret-down"></i> Industry</h6>

                        <div id="filter_category">
                            <div class="form-check">
                                <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                                <span class="ml-2">Agile</span>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                                <span class="ml-2">Application Development</span>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                                <span class="ml-2">Artificial Intelligence</span>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                                <span class="ml-2">As a service</span>
                            </div>
                        </div>

                    </div>
                    <hr> --}}
                    <!--------End--------->

                </div>
            </div>
            <!----------conternt client stories --------->
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="row">
                    <!--------item------->
                    @foreach($client_storys as $item)
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="client_stories_content_item">
                            <a href="{{route('story.details',$item->id)}}">
                                <img class="img-fluid" src="{{asset('storage/'.$item->image)}}" alt="{{$item->badge}}">
                                <h3 class="mt-4">{{$item->title}}</h3>

                                <p>{!! $item->header !!}</p>
                                <h6>{{$item->badge}} / {{$item->created_at->format('Y-m-d')}}</h6>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <!--------item------->


                </div>
            </div>
        </div>


        <!------------------Pagination------------------->
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  {{$client_storys->links()}}
                </ul>
              </nav>
        </div>
    </section>
    <!-------End------->
@endsection
