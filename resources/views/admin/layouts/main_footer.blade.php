<form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<!-- Javascript -->
<script type="text/javascript" src="{{ asset('frontend/assets') }}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets') }}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets') }}/js/swiper-bundle.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets') }}/js/carousel.js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets') }}/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets') }}/js/lazysize.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets') }}/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets') }}/js/count-down.js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets') }}/js/wow.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets') }}/js/multiple-modal.js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets') }}/js/main.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap4.min.js"></script>


@yield('page-scripts')

</body>

</html>