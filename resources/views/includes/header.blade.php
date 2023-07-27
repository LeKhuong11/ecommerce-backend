@php
    $segment_check = Request()->segment(1);

@endphp

<header id="header">
        <div class="container">
            <div class="row">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="header-logo">
                        <a href="{{ route('customer.home') }}" class=""><img src="{{ asset('assets/images/logo.png')}}" loading="lazy" width="auto"
                                height="auto" alt="logo"></a>
                    </div>
                    <div class="header-menubar px-3 d-flex align-align-items-center">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <div class="bar-btn">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                        </button>
                        <ul class="d-flex m-0">
                            <li><a class="{{ in_array($segment_check, array('')) ? 'active' : ''}}" href="{{ route('customer.home')}}">Home</a></li>
                            <li><a class="{{ in_array($segment_check, array('menu')) ? 'active' : ''}}" href="#">Menu</a></li>
                            <li><a class="{{ in_array($segment_check, array('about')) ? 'active' : ''}}" href="{{ route('customer.about') }}">About</a></li>
                            <li><a class="{{ in_array($segment_check, array('shop')) ? 'active' : ''}}" href="#">Shop</a></li>
                            <li><a class="{{ in_array($segment_check, array('blog')) ? 'active' : ''}}" href="#">Blog</a></li>
                            <li class="pages position-relative">
                                <a href="#">Page <i class="fa-solid fa-chevron-down"></i></a>
                                <div class="mini-pages box-shadow">
                                    <h5 class="m-0">PAGES</h5>
                                    <ul class="p-0">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                        <li><a href="#">Shopping time</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="{{ in_array($segment_check, array('contact')) ? 'active' : ''}}" href="{{ route('customer.contact')}}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="header-icon d-flex p-0 p-lg-3">
                        <div class="header-call d-none d-lg-block">
                            <div class="title-call">
                                Call and Order in
                                <p class="address">London</p>
                            </div>
                            <div class="des-call">+1 718-904-4450</div>
                        </div>
                        <div class="header-signin px-2 px-lg-2">
                            <div class="button login">
                                <i class="fa-solid fa-user-large text-dark"></i>
                            </div>
                            <div class="mini-acount box-shadow box-shadow">
                                <p><a href="{{ route('customer.login') }}">Sign in</a></p>
                                <p><a href="#" title="Register">Register</a></p>
                                <p><a href="#" title="Wishlist">Wishlist (<span>1</span>)</a></p>
                                <p><a href="#" title="Compare">Compare (<span class="text-center">0</span>)</a></p>
                                <p><a href="{{ route('customer.cart') }}" title="Checkout">Checkout</a></p>
                            </div>
                        </div>
                        <div class="header-cart ">
                            <div class="button cart">
                                <a href="#"><i class="fas fa-shopping-basket text-dark"></i></a>
                            </div>
                            <div class="cart-count-bubble">
                                <span aria-hidden="true">4</span>
                            </div>
                            <div class="mini-cart box-shadow">
                                <div class="list-minicart">
                                    <div class="minicart-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="image-product">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/pizza.webp') }}" alt="Pizza"
                                                        width="auto" height="auto">
                                                </a>
                                            </div>
                                            <div class="item text-left">
                                                <div class="minicart-price pb-1">
                                                    <a href="#">Apricot Chicken 1</a>
                                                </div>
                                                <span class="price">
                                                    <span class="money">$8.00</span>
                                                </span>
                                                <div class="quantity pt-2">
                                                    <button><i class="fa-solid fa-minus"></i></button>
                                                    <input type="text" value="0">
                                                    <button><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trash">
                                            <a href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="minicart-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="image-product">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/pizza.webp') }}" alt="Pizza"
                                                        width="auto" height="auto">
                                                </a>
                                            </div>
                                            <div class="item text-left">
                                                <div class="minicart-price pb-1">
                                                    <a href="#">Apricot Chicken 1</a>
                                                </div>
                                                <span class="price">
                                                    <span>$8.00</span>
                                                </span>
                                                <div class="quantity pt-2">
                                                    <button><i class="fa-solid fa-minus"></i></button>
                                                    <input type="text" value="0">
                                                    <button><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trash">
                                            <a href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="totals">
                                    <label>Subtotal</label>: <span class="total_price"><span class="money">$62.90</span>
                                        USD</span>
                                </div>
                                <div class="button-minicart">
                                    <div class="gotocart-btn">
                                        <a href="{{ route('customer.cart') }}">Go to Cart</a>
                                    </div>

                                    <div class="checkout-btn">
                                        <a href="#">Check out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-order d-none d-lg-block">
                            <a href="#" title="ORDER NOW" class="btn-base">
                                ORDER NOW
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu mobile -->
        <nav class="navbar fixed-top">
            <div class="container-fluid">
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header d-flex justify-content-end">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="navbar-mobile">
                            <div>
                                <ul class="p-3">
                                    <li><a href="#">Home</a></li>
                                    <hr>
                                    <li><a href="#">Menu</a></li>
                                    <hr>
                                    <li><a href="#">About</a></li>
                                    <hr>
                                    <li><a href="#">Shop</a></li>
                                    <hr>
                                    <li><a href="#">Blog</a></li>
                                    <hr>
                                    <li class="flex-row justify-content-between">
                                        <div class="accordion w-100" id="accordionExample">
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header">
                                                <button class="accordion-button p-0 bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Page
                                                </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="p-0">
                                                        <li class="py-1"><a href="#">About us</a></li>
                                                        <li class="py-1"><a href="#">Brands</a></li>
                                                        <li class="py-1"><a href="#">Contact us</a></li>
                                                        <li class="py-1"><a href="#">FAQs</a></li>
                                                        <li class="py-1"><a href="#">Wishlist</a></li>
                                                        <li class="py-1"><a href="#">Shopping time</a></li>
                                                    </ul>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <hr>
                                    <li><a href="{{ route('customer.contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>