@extends('layout.app')

@section('seo')
<title>Store</title>
@endsection

@section('content')
    <div id="cart">
        <nav class="breadcrumb">
            <a href="{{ route('customer.home') }}" class="d-flex align-items-center text-muted">
                <i class="fa-solid fa-house"></i>
                <p class="px-2">Home</p>
            </a>
            <i class="fa-solid fa-chevron-right text-muted"></i>
            <p class="px-2 text-muted">Your Shopping Cart</p>
        </nav>
        <div class="cart py-5">
            <div class="container">
                <div class="title d-flex justify-content-between">
                    <h2>Your Cart</h2>
                    <a href="#">Continue shopping</a>
                </div>
                <div class="table">
                    <table class="cart-items">
                        <thead>
                            <tr>
                                <th class="px-4" colspan="2" scope="col">Product</th>
                                <th colspan="1">Price</th>
                                <th colspan="1" scope="col">Quantity</th>
                                <th colspan="1" scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="item-img">
                                    <a href="{{ route('customer.detail') }}">
                                        <img src="{{ asset('assets/products/cheese-butter.webp') }}" alt="" width="100" height="100">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('customer.detail') }}">Pene Salmone</a>
                                    <p>$7.00</p>
                                </td>
                                <td>
                                    <span class="price">$7.00</span> <br>
                                    <span class="sale">$11.00</span>
                                </td>
                                <td >
                                    <div class="d-flex align-items-center">
                                        <div class="quantity pt-2">
                                            <button><i class="fa-solid fa-minus"></i></button>
                                            <input type="text" value="1">
                                            <button><i class="fa-solid fa-plus"></i></button>
                                        </div>
                                        <div class="trash">
                                            <i class="fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="price">$7.00</span> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-img">
                                    <a href="{{ route('customer.detail') }}">
                                        <img src="{{ asset('assets/products/cheese-butter.webp') }}" alt="" width="100" height="100">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('customer.detail') }}">Pene Salmone</a>
                                    <p>$7.00</p>
                                </td>
                                <td>
                                    <span class="price">$7.00</span> <br>
                                    <span class="sale"></span>
                                </td>
                                <td >
                                    <div class="d-flex align-items-center">
                                        <div class="quantity pt-2">
                                            <button><i class="fa-solid fa-minus"></i></button>
                                            <input type="text" value="1">
                                            <button><i class="fa-solid fa-plus"></i></button>
                                        </div>
                                        <div class="trash">
                                            <i class="fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="price">$7.00</span> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-img">
                                    <a href="{{ route('customer.detail') }}">
                                        <img src="{{ asset('assets/products/cheese-butter.webp') }}" alt="" width="100" height="100">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('customer.detail') }}">Pene Salmone</a>
                                    <p>$7.00</p>
                                </td>
                                <td>
                                    <span class="price">$7.00</span> <br>
                                    <span class="sale">$11.00</span>
                                </td>
                                <td >
                                    <div class="d-flex align-items-center">
                                        <div class="quantity pt-2">
                                            <button><i class="fa-solid fa-minus"></i></button>
                                            <input type="text" value="1">
                                            <button><i class="fa-solid fa-plus"></i></button>
                                        </div>
                                        <div class="trash">
                                            <i class="fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="price">$7.00</span> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-img">
                                    <a href="{{ route('customer.detail') }}">
                                        <img src="{{ asset('assets/products/cheese-butter.webp') }}" alt="" width="100" height="100">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('customer.detail') }}">Pene Salmone</a>
                                    <p>$7.00</p>
                                </td>
                                <td>
                                    <span class="price">$7.00</span> <br>
                                    <span class="sale"></span>
                                </td>
                                <td >
                                    <div class="d-flex align-items-center">
                                        <div class="quantity pt-2">
                                            <button><i class="fa-solid fa-minus"></i></button>
                                            <input type="text" value="1">
                                            <button><i class="fa-solid fa-plus"></i></button>
                                        </div>
                                        <div class="trash">
                                            <i class="fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="price">$7.00</span> <br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="sub-total">
                    <div class="total d-flex">
                        <h5>Subtotal</h5>
                        <span>$113.61</span>
                    </div>
                    <p>Taxes and shipping calculated at checkout</p>
                    <a href="#">Check out</a>
                </div>
            </div>
        </div>
    </div>
@endsection