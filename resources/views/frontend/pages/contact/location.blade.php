@extends('frontend.master')

@section('content')

@include('frontend.header')

<div style="height: 400px; background-image:url('{{ asset('assets/frontend/image/buy-category-hero.jpg')}}')">
<div class="col-12" style="padding-top: 10%">
 <div class="row">
    <div class="col-3">
            <strong>Singapore Office<br></strong>
            10, Anson Road, #21-07<br>
            International Plaza, SG (079903)<br>
            Tel: (+65) 97471974<br><br>
    </div>
    <div class="col-3">
            <strong>Bangladesh Office<br></strong>
            Haque Chamber(11 floor - C&D)<br>
            89/2, Panthapath, Dhaka-1215<br>
            Tel: (+88) 0258155838<br><br>
    </div>
    <div class="col-3">
            <strong>USA Office</strong><br>
            29 E 31st Street<br>
            Bayonne, NJ (07002), USA<br>
            Cell:(+1) 2149149218<br><br>
    </div>
    <div class="col-3">
            <strong>Email Us:</strong><br>
            <b>Sales:</b>sales@ngenitltd.com <br>
            <b>Partners:</b>partners@ngenitltd.com <br>
            <b>Support:</b>support@ngenitltd.com <br><br>
    </div>
  </div>
 </div>
</div>
@include('frontend.footer')
<style>
    .col-3{
        color: white
    }
</style>
@endsection