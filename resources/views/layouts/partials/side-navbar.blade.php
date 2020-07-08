 <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="{{ url('admin') }}">
                        <i class="fa fa-circle-notch text-primary"></i>
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5">school</span> <span class="font-w400"></span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Color Variations -->
                        {{-- <div class="dropdown d-inline-block ml-3">
                            <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="si si-drop"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                                <!-- Color Themes -->
                                <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                                    <span>Default</span>
                                    <i class="fa fa-circle text-default"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                                    <span>Amethyst</span>
                                    <i class="fa fa-circle text-amethyst"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                                    <span>City</span>
                                    <i class="fa fa-circle text-city"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                                    <span>Flat</span>
                                    <i class="fa fa-circle text-flat"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                                    <span>Modern</span>
                                    <i class="fa fa-circle text-modern"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                                    <span>Smooth</span>
                                    <i class="fa fa-circle text-smooth"></i>
                                </a>
                                <!-- END Color Themes -->

                                <div class="dropdown-divider"></div>

                                <!-- Sidebar Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                                    <span>Sidebar Light</span>
                                </a>
                                <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                                    <span>Sidebar Dark</span>
                                </a>
                                <!-- Sidebar Styles -->

                                <div class="dropdown-divider"></div>

                                <!-- Header Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                                    <span>Header Light</span>
                                </a>
                                <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                                    <span>Header Dark</span>
                                </a>
                                <!-- Header Styles -->
                            </div>
                        </div> --}}
                        <!-- END Themes -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-times"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
                <!-- END Side Header -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        @if (Auth::user()->role == 0)
                        <li class="nav-main-item">
                            <a class="nav-main-link {{request()->is('admin')?'active':''}}" href="{{ url('admin') }}">
                                    <i class="nav-main-link-icon si si-speedometer"></i>
                                    <span class="nav-main-link-name">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-main-heading">User Interface</li>
                                <li class="nav-main-item">
                                <a class="nav-main-link {{ request()->is('crud')? 'active':'' }}" href=" {{ url('crud') }}">
                                        <i class="nav-main-link-icon si si-wrench"></i>
                                        <span class="nav-main-link-name">Crud</span>
                                    </a>
                                </li>  
                                <li class="nav-main-item">
                                <a class="nav-main-link {{ request()->is('admin/approve')? 'active':'' }}" href=" {{ url('admin/approve') }}">
                                        <i class="nav-main-link-icon si si-wrench"></i>
                                        <span class="nav-main-link-name">Approve</span>
                                    </a>
                                </li>  
                            <li class="nav-main-item">
                            <a class="nav-main-link {{ request()->is('admin/student')? 'active':'' }}" href=" {{ url('admin/student') }}">
                                    <i class="nav-main-link-icon si si-wrench"></i>
                                    <span class="nav-main-link-name">Student</span>
                                </a>
                            </li>  
                            <li class="nav-main-item">
                            <a class="nav-main-link {{ request()->is('admin/fee')? 'active':'' }}" href=" {{ url('admin/fee') }}">
                                    <i class="nav-main-link-icon si si-wrench"></i>
                                    <span class="nav-main-link-name">Fee Structure</span>
                                </a>
                            </li>  
                            <li class="nav-main-item">
                            <a class="nav-main-link {{ request()->is('admin/view-feerecord')? 'active':'' }}" href=" {{ url('admin/view-feerecord') }}">
                                    <i class="nav-main-link-icon si si-wrench"></i>
                                    <span class="nav-main-link-name">Fee Record</span>
                                </a>
                            </li>  
                            <li class="nav-main-item">
                            <a class="nav-main-link {{ request()->is('admin/upload-excel')? 'active':'' }}" href=" {{ url('admin/upload-excel') }}">
                                    <i class="nav-main-link-icon si si-wrench"></i>
                                    <span class="nav-main-link-name">Upload Excel</span>
                                </a>
                            </li>  
                            <li class="nav-main-item">
                            <a class="nav-main-link {{ request()->is('ajaxcrud')? 'active':'' }}" href=" {{ url('ajaxcrud') }}">
                                    <i class="nav-main-link-icon si si-wrench"></i>
                                    <span class="nav-main-link-name">Ajax Crud</span>
                                </a>
                            </li>  
                        @endif
                        @if (Auth::user()->role==1)
                        <li class="nav-main-item">
                            <a class="nav-main-link {{request()->is('admin/upload')? 'active':''  }}" href="{{url('admin/upload')}}">
                                    <i class="nav-main-link-icon si si-layers"></i>
                                    <span class="nav-main-link-name">Upload</span>
                                </a>
                            </li> 
                        @endif
                        
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </nav>