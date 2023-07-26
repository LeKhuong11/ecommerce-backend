@extends('layout.app')

@section('seo')
    <title>Contact</title>
@endsection

@section('content')
    <div id="about">
        <nav class="breadcrumb">
            <a href="{{ route('customer.home') }}" class="d-flex align-items-center text-muted">
                <i class="fa-solid fa-house"></i>
                <p class="px-2">Home</p>
            </a>
            <i class="fa-solid fa-chevron-right text-muted"></i>
            <p class="px-2 text-muted">About Us</p>
        </nav>
        <div class="about py-5">
            <div class="advanced-content pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img width="100%" src="{{ asset('assets/images/about-demo.webp') }}" alt="">
                        </div>
                        <div class="col-md-6 mt-3 mt-md-0">
                            <div class=" px-4">
                                <h2>Our Story</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <br>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service bg-light p-5">
                <div class="container">
                    <h3 class="text-center">WHY CHOOSE US</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="service-content mt-4">
                                <i class="fa-solid fa-rocket"></i>
                                <h5>Secure Payments</h5>
                                <p>See below for information about the delivery & returns options in your country.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-content mt-4">
                                <i class="fa-solid fa-wallet"></i>
                                <h5>Secure Payments</h5>
                                <p>See below for information about the delivery & returns options in your country.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-content mt-4">
                                <i class="fa-solid fa-message"></i>
                                <h5>Secure Payments</h5>
                                <p>See below for information about the delivery & returns options in your country.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-section py-5">
                <div class="container">
                    <h2 class="text-center pb-4">MEET OUR PEOPLE</h2>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="about-wrap text-center">
                                <img width="100%" src="{{ asset('assets/images/founder.webp') }}" alt="">
                                <h5 class="pt-4 m-0">EMMA WATSON</h5>
                                <span>CEO/FOUNDER</span>
                                <div class="contact pb-2 pt-3">
                                    <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="about-wrap text-center">
                                <img width="100%" src="{{ asset('assets/images/founder.webp') }}" alt="">
                                <h5 class="pt-4 m-0">EMMA WATSON</h5>
                                <span>CEO/FOUNDER</span>
                                <div class="contact pb-2 pt-3">
                                    <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="about-wrap text-center">
                                <img width="100%" src="{{ asset('assets/images/founder.webp') }}" alt="">
                                <h5 class="pt-4 m-0">EMMA WATSON</h5>
                                <span>CEO/FOUNDER</span>
                                <div class="contact pb-2 pt-3">
                                    <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="about-wrap text-center">
                                <img width="100%" src="{{ asset('assets/images/founder.webp') }}" alt="">
                                <h5 class="pt-4 m-0">EMMA WATSON</h5>
                                <span>CEO/FOUNDER</span>
                                <div class="contact pb-2 pt-3">
                                    <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-video  py-5">
                <div class="container">
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/T3AHBe0I0yc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection