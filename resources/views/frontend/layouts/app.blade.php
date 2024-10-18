<!-- Navbar -->
@include('frontend.layouts.header')
<!-- /Navbar -->
<div id="wrapper">
    <!-- Navbar -->
    @include('frontend.layouts.navbar')
    <!-- /Navbar -->

    @yield('content')

    <!-- Footer -->
    @include('frontend.layouts.footer')
    <!-- /Footer -->
</div>

<!-- gotop -->
@include('frontend.layouts.goto-top')
<!-- /gotop -->

<!-- toolbar-bottom -->
@include('frontend.layouts.m_toolbar')
<!-- /toolbar-bottom -->

<!-- mobile menu -->
@include('frontend.layouts.m_sidebar')
<!-- /mobile menu -->

<!-- canvasSearch -->
@include('frontend.layouts.search')
<!-- /canvasSearch -->

<!-- toolbarShopmb -->
@include('frontend.layouts.m_shop')
<!-- /toolbarShopmb -->

<!-- modal login -->
@include('frontend.layouts.m_account')
<!-- /modal login -->

<!-- shoppingCart -->
@include('frontend.layouts.cart')
<!-- /shoppingCart -->

<!-- MainFooter -->
@include('frontend.layouts.main_footer')
<!-- MainFooter -->