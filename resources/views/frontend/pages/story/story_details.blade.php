@extends('frontend.master')
@section('content')
<!--=======// Single blog image //=======-->
<section class="container" style="margin-top: 110px;">
    <div class="assetType">
        <a href="javascript:void(0);">{{$blog->badge}}</a>
    </div>
    <div class="headline">
        <h1>{{$blog->title}}</h1>
    </div>
    <div class="aria-text">
        <h2 class="text-center">{!! $blog->header !!}</h2>
    </div>
    <div class="row">
        <div class="byTopics col-9">
            @php
                $all_tags = $blog->tags;
                $tags = explode(',', $all_tags);
            @endphp
            <p>By <a href="javascript:void(0);"> {{$blog->created_by}}</a><span>/ </span><span>{{ date('d-m-Y', strtotime($blog->created_at)) }}</span> <span>/</span> <span>Topics :</span>
                @foreach ($tags as $tag)
                    <a href="javascript:void(0);">{{ ucwords($tag)  }} , </a>
                @endforeach
            </p>
        </div>
        <div class="bySocial col-3">
            <ul class="social-icon-links pull-right" style="font-size: 1.5rem;">
                {{-- {!! $shareComponent !!} --}}
                {!! Share::page(url('/story/'. $blog->id . '/details'))->facebook()->twitter()->whatsapp() !!}
                {{-- <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"></i></a></li> --}}
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <img class="img-fluid" src="{{asset('storage/requestImg/'.$blog->image)}}" alt="{{$blog->badge}}">
        </div>
    </div>
</section>
<!-------End------->

<!--=======// Single blog content //=======-->
<section class="container">
    <div class="row content_wrapper">
        <div class="col-10 blog_text_area" style="display: inline-block;
        word-break: break-word;">

            <blockquote style="overflow-wrap: break-word; margin-top:0.8rem; margin-bottom:1rem; padding: 20px 30px 20px 25px; border-left: 5px solid #af0e2e; background-color: #f7f6f5;">
                <p style="display: inline-block;
                word-break: break-word;">{!!$blog->short_des!!}</p>
            </blockquote>

            {{-- <div class="infographic">
                <img src="images/innovate_icon.png" class="mx-auto d-block">
                <p><strong>Infographic: </strong>Adapting your modern technology to build a digital-first culture.<a href="#">Empower your workforce to build meaningful experiences with the versatile power of the VMware® environment.</a></p>
            </div> --}}

            <p style="overflow-wrap: break-word;">{!!$blog->long_des!!}</p>

        </div>
        <div class="col-lg-12 mb-3">
            <div class="callout">
                <p><strong>{!!$blog->footer!!} </strong></p>
            </div>
        </div>
    </div>
    <div class="byTopics">
        <p>All keyword categories: </span> <a href="#">Client story, </a><a href="#">Connected Workforce, </a><a href="#">Endpoint management, </a><a href="#">Virtualization, </a><a href="#">Remote work, </a><a href="#">Financial</a></p>
    </div>

</section>
<br>
<!-------End------->

<!--=======// Single blog related //=======-->
<section class="related_posts_wrapper">
    <div class="container">
        <div class="related_posts_title">
            <h1 class="text-center">Related Contents</h1>
        </div>

        <div class="row">
            <!--------item------->
            @foreach ($storys as $item)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="related-item">
                        <a href="{{route('story.details',$item->id)}}">
                            <img class="img-fluid" src="{{ asset('storage/' . $item->image) }}" alt="">
                            <h4>{{$item->badge}}</h6>
                            <h3><strong>{{$item->title}}</strong></h3>
                        </a>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
<!-------End------->
@endsection

