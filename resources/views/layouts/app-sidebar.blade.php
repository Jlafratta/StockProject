<div class="app-sidebar sidebar-shadow bg-dark sidebar-text-light">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                
                <li class="app-sidebar__heading">Inventario</li>
                <li class="mm-active">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Productos
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-show">
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Stock
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('product.create') }}">
                                <i class="metismenu-icon">
                                </i>Nuevo
                            </a>
                        </li>
                    </ul>
                </li>
            
                <li class="app-sidebar__heading">Contable</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-graph2">
                        </i>Ventas
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>