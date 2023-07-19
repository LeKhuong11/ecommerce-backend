@extends('layout.app')

@section('seo')
<title>Store</title>
@endsection

@section('content')
<div id="detail">
    <nav class="breadcrumb">
        <a href="{{ route('customer.home') }}" class="d-flex align-items-center text-muted">
            <i class="fa-solid fa-house"></i>
            <p class="px-2">Home</p>
        </a>
        <i class="fa-solid fa-chevron-right text-muted"></i>
        <p class="px-2 text-muted">Cheese Butter 6</p>
    </nav>
    <div class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column align-items-center">
                    <img id="img-main" src="{{ asset('assets/products/item1.webp') }}" width="70%" alt="">
                    <div class="images-item d-flex">
                        <div class="item px-1 border">
                            <img class="img-child" src="{{ asset('assets/products/item1.webp') }}" width="100%" alt="">
                        </div>
                        <div class="item px-1 border">
                            <img class="img-child" src="{{ asset('assets/products/orange-juice.webp') }}" width="100%" alt="">
                        </div>
                        <div class="item px-1 border">
                            <img class="img-child" src="{{ asset('assets/products/cheese-butter.webp') }}" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="w-75">
                        <span>VT POCO</span>
                        <h3>Apricot Chicken 1</h3>
                        <div class="rate">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span>(2)</span>
                        </div>
                        <hr>
                        <div class="price d-flex align-items-center pb-3">
                            <span class="money">$8.00</span>
                            <p class="sale px-2">$12.00</p>
                        </div>
                        <form action="" method="POST">
                            <div class="size">

                                <p>Size</p>
                                <label>
                                    <input type="radio" name="size" value="small" hidden>
                                    <div>S</div>
                                </label>
                                <label>
                                    <input type="radio" name="size" value="medium" hidden>
                                    <div>M</div>
                                </label>
                                <label>
                                    <input type="radio" name="size" value="large" hidden>
                                    <div>L</div>
                                </label>
                                <label>
                                    <input type="radio" name="size" value="large" hidden>
                                    <div>XL</div>
                                </label>
                            </div>
                            <hr>
                            <div>
                                <p>Quantity</p>
                                <div class="d-flex">
                                    <div class="quantity pt-2">
                                        <button><i class="fa-solid fa-minus"></i></button>
                                        <input type="text" value="1">
                                        <button><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <div class="px-4 pt-2">
                                        <button type="submit" class="btn-base border-0 text-white btn-submit"><i
                                                class="fa-solid fa-bag-shopping text-white px-2"></i>Add to
                                            cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="share d-flex align-items-center pt-4">
                                <p>Share: </p>
                                <div class="d-flex">
                                    <a href="https://facebook.com" target="_blank"
                                        class="facebook px-1 d-flex align-items-center">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <span>
                                    </span>
                                    <a href="https://twitter.com" target="_blank"
                                        class="twitter px-2 d-flex align-items-center">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex py-2">
                                <a href="#" class="d-flex align-items-center text-muted">
                                    <i class="fa-solid fa-heart"></i>
                                    <p class="px-2">Wishlist</p>
                                </a>
                                <a href="#" class="d-flex align-items-center text-muted px-3">
                                    <i class="fa-solid fa-layer-group"></i>
                                    <p class="px-2">Compare</p>
                                </a>
                            </div>
                            <hr>
                            <div class="tags d-flex text-muted">
                                <p>Tags:</p>
                                <strong>pizza</strong>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="review mt-5">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active text-muted" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-muted" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Review(2)</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active p-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="description">
                        <p data-mce-fragment="1">Although the legendary Double Burger really needs no introduction,
                            please allow us… Tucked in between three soft buns are two all-beef patties, cheddar cheese,
                            ketchup, onion, pickles and iceberg lettuce. Hesburger’s own paprika and cucumber mayonnaise
                            add the crowning touch. Oh baby!</p>

                        <p data-mce-fragment="1"><strong>Ingredients:</strong>&nbsp;Dr. Praeger’s Black Bean Burger,
                            Focaccia bun, Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese</p>
                    </div>
                </div>
                <div class="tab-pane fade m-3 px-4 border" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="comment py-3">
                        <div class="rate pb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span>(2)</span>
                        </div>
                        <strong>Demo Review</strong>
                        <p class="comment-desc pt-1">Demo on Jul 26, 2022</p>
                        <p class="comment-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                            dolor enim tempora optio! Non numquam mollitia, tenetur iure voluptatem rerum ratione, a
                            explicabo aperiam sit sint rem illum error odit!</p>
                    </div>
                    <div class="comment py-3">
                        <div class="rate pb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span>(2)</span>
                        </div>
                        <strong>Demo Review</strong>
                        <p class="comment-desc pt-1">Demo on Jul 26, 2022</p>
                        <p class="comment-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                            dolor enim tempora optio! Non numquam mollitia, tenetur iure voluptatem rerum ratione, a
                            explicabo aperiam sit sint rem illum error odit!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products mt-5">
        <div class="container">
            <h2 class="section-header">You May Also Like</h2>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-item">
                        <div class="img">
                            <a href="#">
                                <img width="75%" src="{{ asset('assets/products/orange-juice.webp') }}" alt="">
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
                                <img width="75%" src="{{ asset('assets/products/cheese-butter.webp') }}" alt="">
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
</div>
@endsection