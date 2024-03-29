<!doctype html>
<html lang="en">

<head>
    @include('layouts.partials.head')
</head>

<body>
    <!-- Page Container -->
    <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Light themed Header
            'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="hero-static d-flex align-items-center">
                <div class="w-100">
                    <!-- Sign In Section -->
                    <div class="content content-full bg-white">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                                <!-- Header -->
                                <div class="text-center">
                                    <p class="mb-2">
                                        <i class="fa fa-2x fa-circle-notch text-primary"></i>
                                    </p>
                                    <h1 class="h4 mb-1">
                                        Sign In
                                    </h1>
                                    @if(Session::has('error'))
                                    <h2 class="h6 font-w400 text-muted mb-3" style="color:red!important;">
                                        {{Session::get('error')}}</h2>
                                    @endif
                                    {{-- <h2 class="h6 font-w400 text-muted mb-3">
                                            A perfect match for your project
                                        </h2> --}}
                                </div>
                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-signin" action="{{ url('admin/loginpost') }}" method="POST">
                                    @csrf
                                    <div class="py-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg form-control-alt"
                                                id="login-username" name="username" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg form-control-alt"
                                                id="login-password" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            {{-- <div class="d-md-flex align-items-md-center justify-content-md-between">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="login-remember" name="login-remember">
                                                        <label class="custom-control-label font-w400" for="login-remember">Remember Me</label>
                                                    </div>
                                                    <div class="py-2">
                                                        <a class="font-size-sm" href="op_auth_reminder2.html">Forgot Password?</a>
                                                    </div>
                                                </div> --}}
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-center mb-0">
                                        <div class="col-md-6 col-xl-5">
                                            <button type="submit" class="btn btn-block btn-primary">
                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                    <!-- END Sign In Section -->

                    <!-- Footer -->
                    <div class="font-size-sm text-center text-muted py-3">
                        {{-- <strong>OneUI 4.3</strong> &copy; <span data-toggle="year-copy"></span> --}}
                    </div>
                    <!-- END Footer -->
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    @include('layouts.partials.footer-script')
</body>

</html>