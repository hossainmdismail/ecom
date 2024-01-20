<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="index.html" class="brand-wrap">
            <img src="{{ asset('backend') }}/assets/imgs/theme/logo.svg" class="logo" alt="Evara Dashboard">
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i>
            </button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item active">
                <a class="menu-link" href="index.html"> <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-products-list.html"> <i class="icon material-icons md-shopping_bag"></i>
                    <span class="text">Category</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('category.index') }}">Category List</a>
                    <a href="{{ route('category.create') }}">Create Category</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-orders-1.html"> <i class="icon material-icons md-shopping_cart"></i>
                    <span class="text">Banner</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('banner.index') }}">Banner List</a>
                    <a href="{{ route('banner.create') }}">Create Banner</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-sellers-cards.html"> <i class="icon material-icons md-store"></i>
                    <span class="text">Campaign</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('campaign.index') }}">Campaign List</a>
                    <a href="{{ route('campaign.create') }}">Create Campaign</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-sellers-cards.html"> <i class="icon material-icons md-store"></i>
                    <span class="text">Service</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('variation.index') }}">Service List</a>
                    <a href="{{ route('variation.create') }}">Create Service</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-form-product-1.html"> <i class="icon material-icons md-add_box"></i>
                    <span class="text">product</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('product.index') }}">Product List</a>
                    <a href="{{ route('product.create') }}">Add product</a>
                </div>
            </li>
        </ul>
        <br>
        <br>
    </nav>
</aside>
