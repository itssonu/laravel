<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>OneUI - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name="description"
        content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description"
        content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>

    <?php 
        // dd($data);
         ?>
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
    <div id="page-container" class="main-content-boxed">

        <!-- Main Container -->
        <main id="main-container">


            <!-- Remastered -->
            <div id="one-remastered" class="bg-white">
                <div class="content content-full">
                    <div class="py-5 text-center">
                        <h2 class="h1 mb-2">
                            Users images
                        </h2>
                        <h3 class="font-w400 text-muted mb-5">
                            The latest Images of Users
                        </h3>
                        <div class="row">
                            @foreach ($data as $value)


                            <div class="col-sm-6 col-md-4 col-xl-3 invisible" data-toggle="appear">
                                <!-- Bootstrap 4 -->
                                <div class="block block-rounded block-fx-pop">
                                    <div class="block-content block-content-full">
                                        <a class="block block-link-pop" href="be_pages_blog_story.html">
                                            <img class="img-fluid" src="{{ asset('images') }}/{{ $value->image }}"
                                                alt="">
                                            <div class="block-content">
                                                <h4 class="mb-1">Uploade By </h4>
                                                <p class="font-size-sm">
                                                    <span class="text-primary">{{$value->username}}</span>
                                                    <em class="text-muted">{{$value->updated_at}} ·</em>
                                                </p>
                                                {{-- <p class="font-size-sm">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                                    ultrices, justo vel imperdiet gravida...
                                                </p> --}}
                                            </div>
                                        </a>
                                        {{-- <div class="item item-rounded bg-amethyst-lighter mx-auto my-4">
                                            <i class="fa fa-2x fa-fire text-amethyst"></i>
                                        </div>
                                        <h4 class="mb-2">Bootstrap 4</h4>
                                        <p class="font-size-sm text-muted text-left">
                                            The latest Bootstrap version now powers OneUI 4.3 framework. Flexbox support
                                            and tons of new features are ready for you to use.
                                        </p> --}}
                                    </div>
                                </div>
                                <!-- END Bootstrap 4 -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Remastered -->


            <!-- Footer -->
            <footer id="page-footer" class="bg-white">
                <div class="content py-5">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600"
                                href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                            <a class="font-w600" href="https://1.envato.market/xWy" target="_blank">OneUI 4.3</a> &copy;
                            <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->

        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
OneUI JS Core

Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

If you like, you could also include them separately directly from the assets/js/core folder in the following
order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

assets/js/core/jquery.min.js
assets/js/core/bootstrap.bundle.min.js
assets/js/core/simplebar.min.js
assets/js/core/jquery-scrollLock.min.js
assets/js/core/jquery.appear.min.js
assets/js/core/js.cookie.min.js
-->
    <script src="assets/js/oneui.core.min.js"></script>

    <!--
OneUI JS

Custom functionality including Blocks/Layout API as well as other vital and optional helpers
webpack is putting everything together at assets/_es6/main/app.js
-->
    <script src="assets/js/oneui.app.min.js"></script>
</body>

</html>