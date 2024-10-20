<!-- Navbar -->
@include('admin.layouts.header')
<!-- /Navbar -->
<div id="wrapper">
    <!-- Navbar -->
    @include('admin.layouts.navbar')
    <!-- /Navbar -->

    @yield('content')

</div>

<!-- gotop -->
@include('admin.layouts.goto-top')
<!-- /gotop -->

<!-- mobile menu -->
@include('admin.layouts.m_sidebar')
<!-- /mobile menu -->

<!-- MainFooter -->
@include('admin.layouts.main_footer')
<!-- MainFooter -->