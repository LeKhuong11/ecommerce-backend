@extends('layout.app')

@section('seo')
    <title>Login</title>
@endsection

@section('content')
    <div id="login">
        <nav class="breadcrumb">
            <a href="{{ route('customer.home') }}" class="d-flex align-items-center text-muted">
                <i class="fa-solid fa-house"></i>
                <p class="px-2">Home</p>
            </a>
            <i class="fa-solid fa-chevron-right text-muted"></i>
            <p class="px-2 text-muted">Account</p>
        </nav>
        <div class="container">
            <div class="login text-center">
                <h2>Login</h2>
                <form action="">
                    <input type="email" placeholder="Email"> <br>
                    <input type="pasword" placeholder="Password"> <br>
                    <input type="submit" value="Sign in">
                </form>
            </div>
        </div>
    </div>
@endsection