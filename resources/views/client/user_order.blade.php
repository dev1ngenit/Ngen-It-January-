@extends('frontend.master')
@section('content')

<div class="content_wrapper mx-4" style="margin-top:100px; margin-bottom: 25px">
    <!--Sidebar Wrapper-->


    @include('client.partials.sidebar')
    <!--Content Wrapper-->
    <div class="d-flex">
        <div id="userSideButton_wrapper">
            <button class="sidebarButtonStyle" onclick="userDashboardSidebarClicked()">☰</button>
        </div>
        <div id="Content_Wrapper">
            <section class="client_dashboard_content_wp">
                <!--======// Content body Start //=====-->
                <!----Order Tracking start---->
                <div class="row p-2">
                    <!--------Serch & Title------->
                    <div class="col-lg-12 col-sm-12 d-flex justify-content-center">
                        <h2>Order Tracking</h2>
                    </div>
                    <div class="col-lg-12 col-sm-12 d-flex justify-content-center search_order_tracking">
                        <form id="form" role="search">
                            <input type="search" id="query" name="q" placeholder="Search..."
                                aria-label="Search through site content">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                    <!--------Managing item------->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-thumb">
                            <div class="card-img d-flex justify-content-center">
                                <img src="images/icon/managing-orders.png" alt="">
                            </div>
                            <h4>Managing orders </h4>
                            <ul>
                                <li><a href="">Order status</a></li>
                                <li><a href="">Stock status</a></li>
                                <li><a href="">Cancelling an order</a></li>
                            </ul>
                            <div class="d-flex justify-content-center order_tracking_btn mb-4">
                                <a href="">Learn more</a>
                            </div>

                        </div>
                    </div>
                    <!--------Pricing item------->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-thumb">
                            <div class="card-img d-flex justify-content-center">
                                <img src="images/icon/pricing-payments.png" alt="">
                            </div>
                            <h4>Pricing & payments</h4>
                            <ul>
                                <li><a href="">Payment options</a></li>
                                <li><a href="">Leasing options</a></li>
                                <li><a href="">Find paid invoices</a></li>
                            </ul>
                            <div class="d-flex justify-content-center order_tracking_btn mb-4">
                                <a href="">Learn more</a>
                            </div>

                        </div>
                    </div>
                    <!--------Shipping item------->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-thumb">
                            <div class="card-img d-flex justify-content-center">
                                <img src="images/icon/shipping-information.png" alt="">
                            </div>
                            <h4>Shipping information</h4>
                            <ul>
                                <li><a href="">Delivery options</a></li>
                                <li><a href="">Shipping to differlint address</a></li>
                                <li><a href="">Estimated delivery date</a></li>
                            </ul>
                            <div class="d-flex justify-content-center order_tracking_btn mb-4">
                                <a href="">Learn more</a>
                            </div>

                        </div>
                    </div>
                    <!--------Processing item------->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-thumb">
                            <div class="card-img d-flex justify-content-center">
                                <img src="images/icon/privacy-policies.png" alt="">
                            </div>
                            <h4>Product Processing</h4>
                            <ul>
                                <li><a href="">Order status</a></li>
                                <li><a href="">Stock status</a></li>
                                <li><a href="">Cancelling an order</a></li>
                            </ul>
                            <div class="d-flex justify-content-center order_tracking_btn mb-4">
                                <a href="#">Learn more</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Order Tracking End-->
                <!--Order Details Start-->
                <div class="client_db_oredr_details">
                    <div class="d-flex justify-content-center mb-4">
                        <h2>Order Details</h2>
                    </div>
                    <table class="table table-striped">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Qantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>1</td>
                                <td>$2,500</td>
                                <td><a href="#" class="btn_action bg-info">Pending</a></td>
                            </tr>
                            <th scope="row">2</th>
                                <td>Desktop</td>
                                <td>3</td>
                                <td>$2,500</td>
                                <td><a href="#" class="btn_action bg-danger">Cancel</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Cable</td>
                                <td>5</td>
                                <td>$2,500</td>
                                <td><a href="#" class="btn_action bg-primary">On the way</a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Monitor</td>
                                <td>1</td>
                                <td>$2,500</td>
                                <td><a href="#" class="btn_action bg-success">Complete</a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Monitor</td>
                                <td>2</td>
                                <td>$2,500</td>
                                <td><a href="#" class="btn_action bg-success">Complete</a></td>
                            </tr>
                            <tr>
                        </tbody>
                    </table>
                </section>
                <!--Order Details End-->
                <!--End-->
            </section>
        </div>
    </div>
</div>

@endsection
