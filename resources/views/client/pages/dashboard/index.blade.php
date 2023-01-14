@extends('client.master')
@section('content')


            <!-- Content area -->
            <div class="content-wrapper">
                @if (Auth::guard('client')->user()->status == 'inactive')
                <div class="row mt-4">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="text-center">Welcome to my <span class="top-line">N</span>Gen I<span class="top-line">T</span></h2>
                            </div>
                            <div class="card-body">
                                <div class="alert text-center text-danger">
                                    <p><strong>Thank You for opening an account in Ngen It <br>
                                        Please wait for the Approval. <br>
                                        Your Patience will be highly appreciated.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
                @else

                @endif
            </div>

            <!-- /content area -->






@endsection
