@extends('layout.app')

@section('seo')
<title>Store</title>
@endsection

@section('content')
    <div class="home">
        <div class="slide-image">
            <img src="{{ asset('assets/images/background.webp') }}" alt="">
        </div>
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
@endsection