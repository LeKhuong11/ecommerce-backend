@extends('layout.app')

@section('seo')
<title>Store</title>
@endsection

@section('content')
<div class="home">
    <div class="slide">
        <div class="slide-image">
            <img src="{{ asset('assets/images/background.webp') }}" alt="">
            <div class="text-slider d-flex text-start">
                <div class="text-slider-content">
                    <h4>UNLIMITED <br> MEDIUM <span>PIZZAS</span></h4>
                    <h2>Medium 2-topping* pizza</h2>
                    <p>*Additional charge for premium toppings. Minimum of 2 required.</p>
                    <div class="wp-btn">
                        <a class="btn-base link-left" href="#" title="ORDER NOW">
                            ORDER NOW
                        </a>
                        <div class="price-slide">
                            $12.99
                        </div>
                        <div class="price-slide-sale">
                            $19.99
                        </div>
                    </div>
                </div>
                <div class="text-slider-img">
                    <div class="image_slide_child child-1">
                        <img srcset="" src="{{ asset('assets/images/pizza2.webp') }}" alt="Pizza">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="menu">
        <div class="container">
            <h2 class="section-header">Menus</h2>
            <div class="menu-list">
                <div class="item">
                    <img src="{{ asset('assets/images/item1.webp')}}" alt="">
                    <h5>SIGNLE PRODUCTS</h5>
                    <div class="circle"></div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/item2.webp')}}" alt="">
                    <h5>KID MENUS</h5>
                    <div class="circle"></div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/item3.avif')}}" alt="">
                    <h5>SIDES</h5>
                    <div class="circle"></div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/item4.webp')}}" alt="">
                    <h5>BOX MEALS</h5>
                    <div class="circle"></div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/item5.webp')}}" alt="">
                    <h5>BUCKETS</h5>
                    <div class="circle"></div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/item6.webp')}}" alt="">
                    <h5>CHICKEN</h5>
                    <div class="circle"></div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/item7.avif')}}" alt="">
                    <h5>SAULES</h5>
                    <div class="circle"></div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/item8.webp')}}" alt="">
                    <h5>DRINKS</h5>
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="products">
        <div class="container">
            <h2 class="section-header">Popular dishes</h2>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-item">
                        <div class="img">
                            <a href="#">
                                <img width="75%" src="{{ asset('assets/products/item1.webp') }}" alt="">
                            </a>
                            <div class="sale">
                                <span>SALE</span>
                            </div>
                            <div class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="features">
                                <div class="detail">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="compare">
                                    <i class="fa-solid fa-layer-group"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <h5><a href="#">Apricot Chicken 1</a></h5>
                            <p>Although the legendary Double Burger really needs no introduction, please allow us…
                                Tucked in between three soft buns are two all-beef patties, cheddar cheese, ketchup,
                                onion, pickles and iceberg lettuce. Hesburger’s own paprika and cucumber mayonnaise add
                                the crowning touch. Oh baby!</p>
                            <div class="d-flex justify-content-between">
                                <div class="price">
                                    <span class="money">$8.00</span>
                                    <span class="sale">$12.00</span>
                                </div>
                                <div class="cart">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-item">
                        <div class="img">
                            <a href="#">
                                <img width="75%" src="{{ asset('assets/products/item1.webp') }}" alt="">
                            </a>
                            <div class="sale">
                                <span>SALE</span>
                            </div>
                            <div class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="features">
                                <div class="detail">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="compare">
                                    <i class="fa-solid fa-layer-group"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <h5><a href="#">Apricot Chicken 1</a></h5>
                            <p>Although the legendary Double Burger really needs no introduction, please allow us…
                                Tucked in between three soft buns are two all-beef patties, cheddar cheese, ketchup,
                                onion, pickles and iceberg lettuce. Hesburger’s own paprika and cucumber mayonnaise add
                                the crowning touch. Oh baby!</p>
                            <div class="d-flex justify-content-between">
                                <div class="price">
                                    <span class="money">$8.00</span>
                                    <span class="sale">$12.00</span>
                                </div>
                                <div class="cart">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-item">
                        <div class="img">
                            <a href="#">
                                <img width="75%" src="{{ asset('assets/products/item1.webp') }}" alt="">
                            </a>
                            <div class="sale">
                                <span>SALE</span>
                            </div>
                            <div class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="features">
                                <div class="detail">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="compare">
                                    <i class="fa-solid fa-layer-group"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <h5><a href="#">Apricot Chicken 1</a></h5>
                            <p>Although the legendary Double Burger really needs no introduction, please allow us…
                                Tucked in between three soft buns are two all-beef patties, cheddar cheese, ketchup,
                                onion, pickles and iceberg lettuce. Hesburger’s own paprika and cucumber mayonnaise add
                                the crowning touch. Oh baby!</p>
                            <div class="d-flex justify-content-between">
                                <div class="price">
                                    <span class="money">$8.00</span>
                                    <span class="sale">$12.00</span>
                                </div>
                                <div class="cart">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-item">
                        <div class="img">
                            <a href="#">
                                <img width="75%" src="{{ asset('assets/products/item1.webp') }}" alt="">
                            </a>
                            <div class="sale">
                                <span>SALE</span>
                            </div>
                            <div class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="features">
                                <div class="detail">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="compare">
                                    <i class="fa-solid fa-layer-group"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <h5><a href="#">Apricot Chicken 1</a></h5>
                            <p>Although the legendary Double Burger really needs no introduction, please allow us…
                                Tucked in between three soft buns are two all-beef patties, cheddar cheese, ketchup,
                                onion, pickles and iceberg lettuce. Hesburger’s own paprika and cucumber mayonnaise add
                                the crowning touch. Oh baby!</p>
                            <div class="d-flex justify-content-between">
                                <div class="price">
                                    <span class="money">$8.00</span>
                                    <span class="sale">$12.00</span>
                                </div>
                                <div class="cart">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-item">
                        <div class="img">
                            <a href="#">
                                <img width="75%" src="{{ asset('assets/products/item1.webp') }}" alt="">
                            </a>
                            <div class="sale">
                                <span>SALE</span>
                            </div>
                            <div class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="features">
                                <div class="detail">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="compare">
                                    <i class="fa-solid fa-layer-group"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <h5><a href="#">Apricot Chicken 1</a></h5>
                            <p>Although the legendary Double Burger really needs no introduction, please allow us…
                                Tucked in between three soft buns are two all-beef patties, cheddar cheese, ketchup,
                                onion, pickles and iceberg lettuce. Hesburger’s own paprika and cucumber mayonnaise add
                                the crowning touch. Oh baby!</p>
                            <div class="d-flex justify-content-between">
                                <div class="price">
                                    <span class="money">$8.00</span>
                                    <span class="sale">$12.00</span>
                                </div>
                                <div class="cart">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-item">
                        <div class="img">
                            <a href="#">
                                <img width="75%" src="{{ asset('assets/products/item1.webp') }}" alt="">
                            </a>
                            <div class="sale">
                                <span>SALE</span>
                            </div>
                            <div class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="features">
                                <div class="detail">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="compare">
                                    <i class="fa-solid fa-layer-group"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <h5><a href="#">Apricot Chicken 1</a></h5>
                            <p>Although the legendary Double Burger really needs no introduction, please allow us…
                                Tucked in between three soft buns are two all-beef patties, cheddar cheese, ketchup,
                                onion, pickles and iceberg lettuce. Hesburger’s own paprika and cucumber mayonnaise add
                                the crowning touch. Oh baby!</p>
                            <div class="d-flex justify-content-between">
                                <div class="price">
                                    <span class="money">$8.00</span>
                                    <span class="sale">$12.00</span>
                                </div>
                                <div class="cart">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-sale">
        <div class="main-img">
            <img width="100%" src="{{ asset('assets/images/banner-sale.webp')}}" alt="Banner">
        </div>
        <div class="image-content">
            <div class="img-with-text">
                <div class="img-sub-title">
                    Hot Fresh
                </div>
                <h2>hotdog</h2>
                <a href="" class="btn-base">
                    ORDER NOW
                </a>
            </div>
            <div class="image-sale">
                <img src="{{ asset('assets/images/image-sale.avif')}}" alt="Sale">
            </div>
        </div>
    </div>
    <div class="top-product">
        <div class="top-recipes">
            <div class="wp_des d-flex justify-content-between align-items-center">
                <h2>Top recipes</h2>
                <div class="btn-product">
                    <a class="btn-title" href="/collections/all">
                        See all
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="product-item col-md-6">
                        <div class="image">
                            <img src="{{ asset('assets/products/top-item1.webp')}}" alt="Top Product">
                        </div>
                        <div class="review">
                            <h5>BBQ chicken breast 4</h5>
                            <p>Pasta</p>
                            <span class="price">$12.00</span>
                        </div>
                        <div class="cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner">

        </div>
    </div>
</div>
@endsection