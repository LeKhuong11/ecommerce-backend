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
                        <li><a href="{{ route('customer.branch') }}">Branches</a></li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 col-12">
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
            </div> -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="text-content">
                    <h2 class="title-footer">CUSTOMER SUPPORT</h2>
                    <ul class="list-content-footer p-0">
                        <li><a href="{{ route('customer.shipping-policy') }}">Shipping policy</a></li>
                        <li><a href="{{ route('customer.privacy-policy') }}">Privacy policy</a></li>
                        <li><a href="{{ route('customer.payment-policy') }}">Payment policy</a></li>
                        <li><a href="{{ route('customer.return-policy') }}">Return policy</a></li>
                        <li><a href="{{ route('customer.shopping-guide') }}">Shopping guide</a></li>
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
                    <form  action="" accept-charset="UTF-8">
                        <div class="w-100 d-flex justify-content-between">
                            <input type="email" utocomplete="email" placeholder="Your email...">
                            <button type="submit" class="contact-btn">
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