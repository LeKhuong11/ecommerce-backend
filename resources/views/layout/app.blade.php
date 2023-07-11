<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('seo')

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <script src="{{ mix('js/app.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="header-logo">
                        <a href="#" class=""><img src="{{ asset('assets/images/logo.png')}}" loading="lazy" width="auto"
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
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Blog</a></li>
                            <li class="pages position-relative">
                                <a href="#">Page <i class="fa-solid fa-chevron-down"></i></a>
                                <div class="mini-pages">
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
                            <li><a href="#">Contact</a></li>
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
                        <div class="header-signin px-2 px-lg-3">
                            <div class="button login">
                                <i class="fa-solid fa-user-large text-dark"></i>
                            </div>
                            <div class="mini-acount">
                                <p><a href="#">Sign in</a></p>
                                <p><a href="#" title="Register">Register</a></p>
                                <p><a href="#" title="Wishlist">Wishlist (<span>1</span>)</a></p>
                                <p><a href="#" title="Compare">Compare (<span
                                            class="js-compare-count text-center">0</span>)</a></p>
                                <p><a href="#" title="Checkout">Checkout</a></p>
                            </div>
                        </div>
                        <div class="header-cart">
                            <div class="button cart">
                                <a href="#"><i class="fas fa-shopping-basket text-dark"></i></a>
                            </div>
                            <div class="cart-count-bubble">
                                <span aria-hidden="true">4</span>
                            </div>
                            <div class="mini-cart">
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
                                        <a href="#">Go to Cart</a>
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
                                    <li class="flex-row justify-content-between"><a href="#">Page</a> <i class="fa-solid fa-chevron-down"></i></li>
                                    <hr>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div id="main">
        @yield('content')
    </div>

    <footer id="footer">
        <div class="container-fluid">
            <div class="top-footer d-flex align-items-center">
                <div class="logo-footer">
                    <img srcset="" src="{{ asset('assets/images/logo.png') }}" alt="" loading="lazy">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-blog">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-content">
                        <h2 class="title-footer">ADDRESS</h2>
                        <ul class="list-content-footer p-0 p-0">
                            <li>570 8th Ave,</li>
                            <li>
                                New York, NY 10018
                                <br>
                                United States
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-content">
                        <h2 class="title-footer">BOOK A TABLE</h2>
                        <ul class="list-content-footer p-0">
                            <li>
                                Dogfood och Sliders foodtruck. <br>
                                Under Om oss kan ni läsa
                            </li>
                            <li class="number">
                                (850) 435-4155
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-content">
                        <h2 class="title-footer">OPENING HOURS</h2>
                        <ul class="list-content-footer p-0">
                            <li class="d-flex">
                                Monday – Friday:
                                <strong class="text-white">8am – 4pm</strong>
                            </li>
                            <li>
                                Saturday:
                                <strong class="text-white">9am – 5pm</strong>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-content">
                        <h2 class="title-footer">NEWSLETTER</h2>
                        <ul class="list-content-footer p-0">
                            <li>Subscribe to the weekly newsletter for all the latest updates</li>
                        </ul>
                    </div>
                    <div class="footer-form">
                        <form method="post" action="" accept-charset="UTF-8">
                            <div class="w-100 d-flex justify-content-between">
                                <input type="email" name="contact" class="" value="" aria-required="true"
                                    autocorrect="off" autocapitalize="off" autocomplete="email"
                                    placeholder="Your email...">
                                <button type="submit" class="contact-btn" name="commit">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <p class="m-0">Copyright © 2023, <a href="#" style="color: #ffc222">vt poco</a></p>
                    </div>
                    <div class="col-md-4 social-footer">
                        <ul class="d-flex p-0">
                            <li>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>