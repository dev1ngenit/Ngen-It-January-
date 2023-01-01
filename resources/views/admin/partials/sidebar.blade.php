<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg sidebar-main-resized"
    style="background:linear-gradient(109deg, #191c19, #2c0707eb)">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Ngen It</h5>

                <div>
                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
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
                    <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                        <i class="ph-house"></i>
                        <span>
                            Dashboard

                        </span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{route('category.index')}}" class="nav-link">
                        <i class="ph-tree"></i>
                        <span>
                            Category
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="ph-tree"></i>
                        <span>
                            Brand
                        </span>
                    </a>
                </li> --}}
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="fas fa-boxes"></i>
                        <span>Product, Category, Brand</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{ route('category.index') }}" class="nav-link active"><i
                                    class="ph-layout"></i>
                                <span>Category</span></a></li>
                        <li class="nav-item"><a href="{{ route('brand.index') }}" class="nav-link"><i
                                    class="ph-layout"></i>
                                <span>Brand</span></a></li>
                        <li class="nav-item"><a href="{{ route('all.product') }}" class="nav-link"><i
                                    class="ph-layout"></i>
                                <span>Product</span></a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="fas fa-industry"></i>
                        <span>Solution & Industry</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        {{-- <li class="nav-item"><a href="{{ route('solution.index') }}" class="nav-link active"><i
                                    class="ph-layout"></i>
                                <span>Solution</span></a></li> --}}
                        <li class="nav-item"><a href="{{ route('industry.index') }}" class="nav-link"><i
                                    class="ph-layout"></i>
                                <span>Industry</span></a></li>
                        <li class="nav-item"><a href="{{ route('solutionDetails.index') }}" class="nav-link"><i
                                    class="ph-layout"></i>
                                <span>Solution Details</span></a></li>

                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-layout"></i>
                        <span>Success, Features</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{ route('success.index') }}" class="nav-link active"><i
                                    class="ph-layout"></i>
                                <span>Client Success</span></a></li>
                        <li class="nav-item">
                            <a href="{{ route('feature.index') }}" class="nav-link">
                                <i class="ph-tree"></i>
                                <span>
                                    Features
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-layout"></i>
                        <span>Client Story, Blog, Tech Glossy</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item">
                            <a href="{{ route('clientstory.index') }}" class="nav-link">
                                <i class="ph-tree"></i>
                                <span>
                                    Client Story
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog.index') }}" class="nav-link">
                                <i class="ph-tree"></i>
                                <span>
                                    Blog
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('techglossy.index') }}" class="nav-link">
                                <i class="ph-tree"></i>
                                <span>
                                    Tech Glossy
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{ route('setting.index') }}" class="nav-link">
                        <i class="ph-gear"></i>
                        <span>
                            Website Settings
                        </span>
                    </a>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="icon-envelop4"></i>
                        <span>Support, Contact, NewsLetter</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{ route('support.all') }}" class="nav-link active"><i
                                    class="ph-headset"></i>
                                <span>Support</span></a></li>
                        <li class="nav-item"><a href="{{ route('contact.index') }}" class="nav-link"><i
                                    class="mi-message"></i>
                                <span>Contact</span></a></li>
                        <li class="nav-item"><a href="{{ route('newsLetter.index') }}" class="nav-link"><i
                                    class="ph-envelope-open"></i>
                                <span>NewsLetter</span></a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="icon-envelop4"></i>
                        <span>Account Approval</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{ route('clientPermission.index') }}" class="nav-link">
                            <i class="ph-user-plus"></i>
                            <span>
                                Client Approval
                            </span>
                        </a></li>
                        <li class="nav-item"><a href="{{ route('partnerPermission.index') }}" class="nav-link">
                            <i class="ph-user-plus"></i>
                            <span>
                                Partner Approval
                            </span>
                        </a></li>
                        <li class="nav-item"><a href="{{ route('newsLetter.index') }}" class="nav-link"><i
                                    class="ph-user-plus"></i>
                                <span>Salesman Approval</span></a></li>
                    </ul>
                </li>





                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-buildings"></i>
                        <span>Row, Column, Card Builder</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item">
                            <a href="{{ route('row.index') }}" class="nav-link">
                                <i class="ph-tree"></i>
                                <span>
                                    Row
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rowWithCol.index') }}" class="nav-link">
                                <i class="ph-tree"></i>
                                <span>
                                    Row With Column
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('solutionCard.index') }}" class="nav-link">
                                <i class="ph-tree"></i>
                                <span>
                                    Card
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-buildings"></i>
                        <span>Page Builder</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item">
                            <a href="{{ route('learnMore.index') }}" class="nav-link">
                                <i class="ph-tree"></i>
                                <span>
                                    Learn More
                                </span>
                            </a>
                        </li>
                        <li class="nav-item"><a href="{{ route('allpage') }}" class="nav-link active"><i
                                    class="ph-headset"></i>
                                <span>Home Page</span></a></li>
                        <li class="nav-item"><a href="{{ route('industryPage.index') }}" class="nav-link"><i
                                    class="mi-message"></i>
                                <span>Industry Page</span></a></li>
                        <li class="nav-item"><a href="{{ route('brandPage.index') }}" class="nav-link"><i
                                    class="mi-message"></i>
                                <span>Brand Page</span></a></li>

                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-shopping-cart"></i>
                        <span>Order Module</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('pending.order') }}"><i class="ph-shopping-bag"></i><span>Pending Order</span> </a>
						</li>
						<li class="nav-item"> <a class="nav-link" href="{{ route('admin.confirmed.order') }}"><i class="ph-shopping-bag"></i><span>Confirmed Order</span> </a>
						</li>
						<li class="nav-item"> <a class="nav-link" href="{{ route('admin.processing.order') }}"><i class="ph-shopping-bag"></i><span>Processing Order</span> </a>
						</li>
						<li class="nav-item"> <a class="nav-link" href="{{ route('admin.delivered.order') }}"><i class="ph-shopping-bag"></i><span>Delivered Order</span> </a>
						</li>

                    </ul>
                </li>

            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link">
                    <i class="ph-lock-key"></i>
                    <span>Role & Permission</span>
                </a>
                <ul class="nav-group-sub collapse">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('all.permission') }}">
                            <i class="ph-key"></i>
                            <span>All Permission</span></a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('all.roles') }}">
                            <i class="ph-lock-key-open"></i>
                            <span>All Roles</span> </a>
                    </li>

                    <li class="nav-item"> <a class="nav-link" href="{{ route('add.roles.permission') }}">
                            <i class="ph-lock"></i>
                            <span> Roles in Permission</span></a>
                    </li>

                    <li class="nav-item"> <a class="nav-link" href="{{ route('all.roles.permission') }}">
                            <i class="ph-lock-key"></i>
                            <span> All Roles in Permission</span></a>
                    </li>


                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link">
                    <i class="icon-envelop4"></i>
                    <span>Job</span>
                </a>
                <ul class="nav-group-sub collapse">
                    <li class="nav-item"><a href="{{ route('job.index') }}" class="nav-link active"><i
                                class="ph-headset"></i>
                            <span>Job Posting</span></a></li>


                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link">
                    <i class="ph-layout"></i>
                    <span>Terms & Policy</span>
                </a>
                <ul class="nav-group-sub collapse">
                    <li class="nav-item"><a href="{{ route('policy.index') }}" class="nav-link active"><i
                                class="ph-layout"></i>
                            <span>Policy</span></a></li>
                </ul>
            </li>

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
