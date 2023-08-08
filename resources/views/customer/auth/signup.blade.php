@extends('layout.app')

@section('seo')
    <title>Login</title>
@endsection

@section('content')
    <div class="login-register-user">
        <nav class="breadcrumb">
            <a href="{{ route('customer.home') }}" class="d-flex align-items-center text-muted">
                <i class="fa-solid fa-house"></i>
                <p class="px-2">Home</p>
            </a>
            <i class="fa-solid fa-chevron-right text-muted"></i>
            <p class="px-2 text-muted">Create Account</p>
        </nav>
        <div class="container">
            <div class="register text-center">
                <h2 class="py-3">Create Account</h2>
                <form action="" class="w-100">
                    <input type="text" placeholder="First name">
                    <input type="text" placeholder="Last name">
                    <input type="email" placeholder="Email"> <br>
                    <input type="password" placeholder="Password"> <br>
                    <button type="submit" class="mt-4">Create</button> <br>
                    <div class="link">
                        <a href="{{ route('customer.login') }}">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection