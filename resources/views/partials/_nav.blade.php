
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="/"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="/login">Login</a>
            <a href="/sign-up">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="/"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="{{ Request::is('/') ? "active" : "" }}" ><a href="/">Home</a></li>
                            <li class="{{ Request::is('Women') ? "active" : "" }}" ><a href="/women">Women’s</a></li>
                            <li><a href="#">Men’s</a></li>
                            <li class="{{ Request::is('shop') ? "active" : "" }}" ><a href="/shop">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li class="{{ Request::is('product-details') ? "active" : "" }}" ><a href="/product-details">Product Details</a></li>
                                   {{--  <li><a href="/shop-cart">Shop Cart</a></li> --}}
                                    <li class="{{ Request::is('checkout') ? "active" : "" }}" ><a href="/checkout">Checkout</a></li>
                                   {{--  <li><a href="/blog-details">Blog Details</a></li> --}}
                                </ul>
                            </li>
                            {{-- <li><a href="/blog">Blog</a></li> --}}
                            <li  class="{{ Request::is('contact') ? "active" : "" }}" ><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="/login">Login</a>
                            <a href="/sign-up">Register</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="{{ route('cart.index') }}"><span class="icon_bag_alt">
                            
                            </span>
                                <div class="tip">{{Cart::count()}}</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
