@extends('frontend.master')

@section('content')

@include('frontend.header')
    <!--======Header Title==========-->
    <section class="header_title_terms_policy">
        <h2 class="container">All Terms & Policies</h2>
    </section>
    <!--------Header Title--------->

    <!--============Content=============-->
    <section class="container">
        <div class="row mt-4">
            <!----------content left --------->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="left_terms_policy">
                    <h3>All Terms & Policies</h3>
                    <h5>Policies</h5>

                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Stock Status Explanations</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Vendor Code of Conduct</a></li>
                    </ul>

                    <a href="#"><strong>Supplier License and Use Terms</strong></a>
                    <a href="#"><strong>Supplier Terms of Purchase</strong></a>

                    <h5>Terms & Conditions</h5>
                    <ul>
                        <li><a href="#">eCommerce Product Returns</a></li>
                    </ul>

                    <h5>Terms & Conditions</h5>
                    <ul>
                        <li><a href="#">Third Party Cloud Services Terms of Sale </a><em>(U.S./Commercial)</em></li>
                        <li><a href="#">Third Party Cloud Services Terms of Sale </a><em> (Ngen it Public Sector)</em>
                        </li>
                        <ul>
                            <li><a href="#">Supplemental Terms and Conditions Relating to Azure Billing</a></li>
                        </ul>
                        <li><a href="#">Products and Services</a></li>
                        <li><a href="#">Products</a><em>(Ngen it Public Sector)</em></li>
                        <li><a href="#">Services</a><em>(Ngen it Public Sector)</em></li>
                    </ul>

                    <h5>Terms of Service</h5>
                    <ul>
                        <li><a href="#">Ngen it Connected Platform™</a></li>
                        <li><a href="#">Ngen it Daily Q</a></li>
                    </ul>
                </div>
            </div>
            <!----------conternt right--------->
            <div class="col-lg-6 col-md-6 col-sm-12">
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
                                <td rowspan="3" valign="top" class="firstLine"><img src="{{ asset('assets/frontend/image/company_logo/8x8.png') }}"></td>
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
                                <td valign="top" class="firstLine"><img src="{{ asset('assets/frontend/image/company_logo/atlassian.png') }}"></td>
                                <td valign="top"><a href="#" target="_blank">Atlassian Customer Agreement</a></td>
                            </tr>
                            <!--Brand-->
                            <tr>
                                <td valign="top" class="firstLine"><img src="{{ asset('assets/frontend/image/company_logo/valimail.png') }}"></td>
                                <td valign="top"><a href="#" target="_blank">Valimail Channel Terms of Service</a></td>
                            </tr>
                            <!--Brand-->
                            <tr>
                                <td valign="top" class="firstLine"><img src="{{ asset('assets/frontend/image/company_logo/valimail.png') }}"></td>
                                <td valign="top"><a href="#" target="_blank">Valimail Channel Terms of Service</a></td>
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </section>
    <br>
@include('frontend.footer')
@endsection