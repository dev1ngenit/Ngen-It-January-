@extends('frontend.master')
@section('content')
<style>
    .custom .active{
        border: none;
    }
</style>
<!--=======// Header Title //=======-->
<section class="header_title_terms_policy" style="margin-top: 100px;">
    <h2 class="container">All Terms & Policies</h2>
</section>
<!-------End------->

<!--=======// Content //=======//-->
<section class="container">
    <div class="tabpanel">
        <div class="row mt-4">
            <!----------content left --------->
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="tab-content" id="myTabContent">
                    @foreach ($policy as $count => $item)
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">{{$item->description}}</div>
                   @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="left_terms_policy">
                    <h3>All Terms & Policies</h3>
                    <h5>Policies</h5>

                    <ul class="nav nav-tabs pl-3" id="myTab" role="tablist" style="display: block;">

                        <li class="nav-item py-1 custom" role="presentation">
                            <a href="#home" aria-controls="#home" role="tab" role="tab"
                                data-toggle="tab">Privacy Policy</a>
                        </li>

                    </ul>


                    <h5>Terms & Conditions</h5>
                    <ul>
                        <li><a href="#">eCommerce Product Returns</a></li>
                    </ul>


                </div>
            </div>
            <!----------conternt right--------->
            {{-- <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="right_terms_policy">
                    <h4>Supplier License and Use Terms</h4>
                    <input type="Search" placeholder="Search by partner">

                    <!--Table-->
                    <table class="order-table table">
                        <thead>
                            <tr>
                                <th style="width: 25.0%;">Partner</th>
                                <th style="width: 75.0%;">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--Brand-->
                            <tr>
                                <td rowspan="3" valign="top" class="firstLine"><img src="{{asset('frontend')}}/images/company_logo/8x8.png"></td>
                                <td valign="top"><a href="https://www.8x8.com/terms-and-conditions/privacy-policy" target="_blank">8x8 Privacy Policy</a></td>
                            </tr>
                            <tr>
                                <td valign="top"><a href="#" target="_blank" rel="nofollow">8x8 Terms and Conditions</a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top"><a href="#" target="_blank">8x8 VoIP Business Phone Systems</a></td>
                            </tr>

                            <!--Brand-->
                            <tr>
                                <td valign="top" class="firstLine"><img src="{{asset('frontend')}}/images/company_logo/atlassian.png"></td>
                                <td valign="top"><a href="#" target="_blank">Atlassian Customer Agreement</a></td>
                            </tr>
                            <!--Brand-->
                            <tr>
                                <td valign="top" class="firstLine"><img src="{{asset('frontend')}}/images/company_logo/valimail.png"></td>
                                <td valign="top"><a href="#" target="_blank">Valimail Channel Terms of Service</a></td>
                            </tr>
                            <!--Brand-->
                            <tr>
                                <td valign="top" class="firstLine"><img src="{{asset('frontend')}}/images/company_logo/valimail.png"></td>
                                <td valign="top"><a href="#" target="_blank">Valimail Channel Terms of Service</a></td>
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div> --}}

        </div>
    </div>

</section>
<br>
<!-------End------->

@endsection

