<!-- mobile menu -->
<div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    <div class="mb-canvas-content">
        <div class="mb-body">
            <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                <li class="nav-mb-item">
                    <a href="{{ route('home') }}" class="collapsed mb-menu-link current">
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-mb-item">
                    <a href="#dropdown-menu-five" class="collapsed mb-menu-link current" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="dropdown-menu-five">
                        <span>Shop</span>
                        <span class="btn-open-sub"></span>
                    </a>
                    <div id="dropdown-menu-five" class="collapse">
                        <ul class="sub-nav-menu">
                            <li><a href="{{ route('shop.index') }}" class="sub-nav-link">Shop all</a></li>
                            <li><a href="blog-sidebar-left.html" class="sub-nav-link">Men</a></li>
                            <li><a href="blog-sidebar-right.html" class="sub-nav-link">Women</a></li>
                            <li><a href="blog-list.html" class="sub-nav-link">Unisex</a></li>
                            <li><a href="blog-detail.html" class="sub-nav-link">Kids</a></li>
                        </ul>
                    </div>

                </li>
            </ul>
        </div>

    </div>
</div>
<!-- /mobile menu -->