<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Ecomus - Ultimate HTML</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- font -->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/fonts/font-icons.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets') }}/css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets') }}/images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/assets') }}/images/logo/favicon.png">

</head>

<body class="preload-wrapper">
    <div id="wrapper">
        <!-- header -->
        <header id="header" class="header-default">
            <div class="px_15 lg-px_40">
                <div class="row wrapper-header align-items-center">
                    <div class="col-xl-3 col-md-4 col-6">
                        <a href="{{ route('home') }}" class="logo-header">
                            <img src="{{ asset('frontend/assets') }}/images/logo/logo.svg" alt="logo" class="logo">
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- /header -->

        @if (session()->has('error'))
        <section class="flat-spacing-10">
            <div class="container">
                <div class="tf-grid-layout lg-col-10 tf-login-wrap">
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                </div>
            </div>
        </section>
        @endif

        <section class="flat-spacing-10">
            <div class="container">
                <div class="tf-grid-layout lg-col-10 tf-login-wrap">
                    <div class="tf-login-form">
                        <div id="login">
                            <h5 class="mb_36">Log in</h5>
                            <div>
                                <form method="POST" action="{{ route('admin.login.submit') }}">
                                    @csrf
                                    <div class="tf-field style-1 mb_15">
                                        <input class="tf-field-input tf-input" placeholder="Enter admin email"
                                            type="email" id="admin-email" name="email" required>
                                        <label class="tf-field-label fw-4 text_black-2" for="admin-email">Email
                                            *</label>
                                    </div>
                                    <div class="tf-field style-1 mb_30">
                                        <input class="tf-field-input tf-input" placeholder="" type="password"
                                            id="admin-password" name="password" required>
                                        <label class="tf-field-label fw-4 text_black-2" for="admin-password">Password
                                            *</label>
                                    </div>
                                    <div class="">
                                        <button type="submit"
                                            class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Log
                                            in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('frontend/assets') }}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets') }}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets') }}/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets') }}/js/carousel.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets') }}/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets') }}/js/lazysize.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets') }}/js/count-down.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets') }}/js/wow.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets') }}/js/multiple-modal.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets') }}/js/main.js"></script>
</body>

</html>