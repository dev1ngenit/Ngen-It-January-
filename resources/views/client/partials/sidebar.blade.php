@php
    $setting = App\Models\Admin\Setting::latest()->first();
@endphp


<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg" style="background:rgb(83, 80, 80)">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">

                <!-- Sidebar user -->
				<div class="sidebar-resize-hide sidebar-section">
					<div class="sidebar-section-body text-center pt-0 pb-1">
						<div class="card-img-actions d-inline-block mb-3">
							<img class="img-fluid rounded-circle"
                            src="{{ (!empty(Auth::guard('client')->user()->photo)) ? url('upload/Profile/user/'.Auth::guard('client')->user()->photo):url('upload/no_image.jpg') }}"
                            width="150" height="150" alt="">
							<div class="card-img-actions-overlay card-img rounded-circle">
								<a href="#" class="btn btn-outline-white btn-icon rounded-pill">
									<i class="ph-pencil"></i>
								</a>
							</div>
						</div>

			    		<h5 class="mb-0">Hello {{Auth::guard('client')->user()->name}}</h5>
			    		{{-- <span class="text-muted">UX/UI designer</span> --}}

						<div class="d-flex justify-content-center mt-3">
							<a href="#" class="link-pink" data-bs-popup="tooltip" title="Dribbble">
								<i class="ph-dribbble-logo"></i>
							</a>
							<a href="#" class="link-info mx-2" data-bs-popup="tooltip" title="Twitter">
								<i class="ph-twitter-logo"></i>
							</a>
							<a href="#" class="link-indigo" data-bs-popup="tooltip" title="Teams">
								<i class="ph-microsoft-teams-logo"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /sidebar user -->

                {{-- <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Hello, {{Auth::user()->name}}!</h5> --}}

                <div>
                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">


                <li class="nav-item">
                    <a href="{{route('client.dashboard')}}" class="nav-link active">
                        <i class="ph-house"></i>
                        <span>
                            Dashboard

                        </span>
                    </a>
                </li>
                @if (Auth::guard('client')->user()->status == 'active')

                @else

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-user-focus"></i>
                        <span>Your Profile</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{ route('client.profile') }}" class="nav-link active"><i
                                    class="ph-user-focus"></i>
                                <span>Profile Details</span></a></li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="ph-user-circle-gear"></i>
                                <span>
                                    Change Password
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-user-focus"></i>
                        <span>RFQ Section</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{ route('client.profile') }}" class="nav-link active"><i
                                    class="ph-user-focus"></i>
                                <span>All RFQs</span></a></li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="ph-user-circle-gear"></i>
                                <span>
                                    All Deals
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-user-focus"></i>
                        <span>Order Section</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{ route('client.profile') }}" class="nav-link active"><i
                                    class="ph-user-focus"></i>
                                <span>All Orders</span></a></li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="ph-user-circle-gear"></i>
                                <span>
                                    All Deals
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                @endif



            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
