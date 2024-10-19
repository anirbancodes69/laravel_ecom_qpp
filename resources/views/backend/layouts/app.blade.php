<!-- Navbar -->
@include('backend.layouts.header')
<!-- /Navbar -->
<div id="wrapper">
    <!-- Navbar -->
    @include('backend.layouts.navbar')
    <!-- /Navbar -->

    @yield('content')

</div>

<!-- gotop -->
@include('backend.layouts.goto-top')
<!-- /gotop -->

<!-- mobile menu -->
@include('backend.layouts.m_sidebar')
<!-- /mobile menu -->

<!-- MainFooter -->
@include('backend.layouts.main_footer')
<!-- MainFooter -->