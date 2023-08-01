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
    <div class="banner py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="item1 col-lg-4 d-flex justify-content-center mt-3">
                    <div class="banner-img">
                        <img src=" {{ asset('assets/images/banner-1.avif') }}" alt="Banner" width="100%">
                        <div class="banner-content">
                            <h3>Any day  <br> offers</h3>
                            <h5>new  phenomenon <br> burger taste</h5>
                            <p><span>$12.90</span></p>
                            <p class="banner-description"></p>
                        </div>
                    </div>
                </div>
                <div class="item2 col-lg-4 d-flex justify-content-center mt-3">
                    <div class="banner-img">
                        <img src=" {{ asset('assets/images/banner-2.avif') }}" alt="Banner" width="100%">
                        <div class="banner-content">
                            <h3>OTHER <br> FLAVORS</h3>
                            <h5>SAVE ROOM. <br> WE MADE SALATS</h5>
                            <p><span>$12.90</span></p>
                            <p class="banner-description"></p>
                        </div>
                    </div>
                </div>
                <div class="item3 col-lg-4 d-flex justify-content-center mt-3">
                    <div class="banner-img">
                        <img src=" {{ asset('assets/images/banner-3.avif') }}" alt="Banner" width="100%">
                        <div class="banner-content">
                            <h3>FIND A POCO <br> STORE <br> NEAR YOU</h3>
                            <p class="banner-description"></p>
                        </div>
                    </div>
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
                            <a href="{{ route('customer.detail') }}">
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
                            <div class="d-flex justify-content-between mt-3">
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
                            <div class="d-flex justify-content-between mt-3">
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
                            <div class="d-flex justify-content-between mt-3">
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
                            <div class="d-flex justify-content-between mt-3">
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
                            <div class="d-flex justify-content-between mt-3">
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
                            <div class="d-flex justify-content-between mt-3">
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
            <div class="image-sale d-none d-sm-block">
                <img src="{{ asset('assets/images/image-sale.avif')}}" alt="Sale">
            </div>
        </div>
    </div>
    <div class="top-product">
        <div class="top-recipes">
            <div class="container">
                <div class="row">
                    <div class="product-list">
                        <div class="wp_des">
                            <h2>Top recipes</h2>
                            <div class="btn-product">
                                <a href="#">
                                    See all
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="list row">
                            <div class="col-md-6">
                                <div class="card-wrapper">
                                    <div class="image">
                                        <img width="120px" src="{{ asset('assets/products/top-item1.webp')}}"
                                            alt="Top Product">
                                    </div>
                                    <div class="review">
                                        <h5><a href="#">BBQ chicken breast 4</a></h5>
                                        <p>Pasta</p>
                                        <span class="price">$12.00</span>
                                    </div>
                                    <div class="cart">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-wrapper">
                                    <div class="image">
                                        <img width="120px" src="{{ asset('assets/products/top-item2.webp')}}"
                                            alt="Top Product">
                                    </div>
                                    <div class="review">
                                        <h5><a href="#">BBQ chicken breast 4</a></h5>
                                        <p>Pasta</p>
                                        <span class="price">$12.00</span>
                                    </div>
                                    <div class="cart">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-wrapper">
                                    <div class="image">
                                        <img width="120px" src="{{ asset('assets/products/top-item1.webp')}}"
                                            alt="Top Product">
                                    </div>
                                    <div class="review">
                                        <h5><a href="#">BBQ chicken breast 4</a></h5>
                                        <p>Pasta</p>
                                        <span class="price">$12.00</span>
                                    </div>
                                    <div class="cart">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-wrapper">
                                    <div class="image">
                                        <img width="120px" src="{{ asset('assets/products/top-item2.webp')}}"
                                            alt="Top Product">
                                    </div>
                                    <div class="review">
                                        <h5><a href="#">BBQ chicken breast 4</a></h5>
                                        <p>Pasta</p>
                                        <span class="price">$12.00</span>
                                    </div>
                                    <div class="cart">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-wrapper">
                                    <div class="image">
                                        <img width="120px" src="{{ asset('assets/products/top-item2.webp')}}"
                                            alt="Top Product">
                                    </div>
                                    <div class="review">
                                        <h5><a href="#">BBQ chicken breast 4</a></h5>
                                        <p>Pasta</p>
                                        <span class="price">$12.00</span>
                                    </div>
                                    <div class="cart">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-wrapper">
                                    <div class="image">
                                        <img width="120px" src="{{ asset('assets/products/top-item1.webp')}}"
                                            alt="Top Product">
                                    </div>
                                    <div class="review">
                                        <h5><a href="#">BBQ chicken breast 4</a></h5>
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
                    <div class="product-banner d-none d-lg-block">
                        <div class="img">
                            <img src="{{ asset('assets/images/banner-chicken.webp')}}" alt="Banner">
                        </div>
                        <div class="right-content">
                            <div class="sub-title">Super Delicious</div>
                            <h2 class="title">CHICKEN</h2>
                            <p class="description"><span>call us now:</span>
                                <br>
                                1-800-555-333
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-post">
        <div class="container">
            <div class="wp_des">
                <h2 class="section-header">Latest news</h2>
                <div class="btn-product">
                    <a href="#">
                        See all
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="blog-list">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 mb-3">
                        <div class="blog-item">
                            <div class="blog-link">
                                <a href="#">
                                    <img width="100%" src="{{ asset('assets/images/blog-item1.webp') }}" alt="Blog Image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="#">
                                        10 Reasons To Do A Digital Detox
                                    </a>
                                </h2>
                                <p class="blog-description">The Ultimate Hangover Burger: Egg in a Hole Burger Grilled Cheese Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed The Ultimate Hangover Burger: Egg in a Hole Burger Grilled Cheese Lorem ipsum dolor sit amet, consectetur adipisicing </p>
                                <a class="btn-base mt-3" href="#">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-3">
                        <div class="blog-item">
                            <div class="blog-link">
                                <a href="#">
                                    <img width="100%" src="{{ asset('assets/images/blog-item2.webp') }}" alt="Blog Image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="#">
                                        10 Reasons To Do A Digital Detox Challenge
                                    </a>
                                </h2>
                                <p class="blog-description">The Ultimate Hangover Burger: Egg in a Hole Burger Grilled Cheese Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
                                <a class="btn-base mt-3" href="#">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-3">
                        <div class="blog-item">
                            <div class="blog-link">
                                <a href="#">
                                    <img width="100%" src="{{ asset('assets/images/blog-item2.webp') }}" alt="Blog Image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="#">
                                        10 Reasons To Do A Digital Detox Challenge
                                    </a>
                                </h2>
                                <p class="blog-description">The Ultimate Hangover Burger: Egg in a Hole Burger Grilled Cheese Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
                                <a class="btn-base mt-3" href="#">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal View -->
    <div class="modal modal-lg fade position-relative" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pointer">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img width="100%" src="{{ asset('assets/images/img_modal.webp') }}" alt="">
                    <div class="w-75  mt-3">
                        <h3>JOIN OUR NEWLETTER AND GET 20% DISCOUNT</h3>
                        <p>This website uses cookies to ensure you get the best experience on our website.</p>
                        <form action="">
                            <input type="text" placeholder="Your Email..."> 
                            <button type="submit" class="btn-base">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(window).on('load', function() {
        const showModal = sessionStorage.getItem("showModal");

        if(showModal !== "false") {
            $('#myModal').modal('show');
            sessionStorage.setItem("showModal", false);
        }
    });
</script>
@endsection