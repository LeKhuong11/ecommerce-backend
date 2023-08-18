@extends('layout.app')

@section('seo')
    <title>Quản lý hóa đơn</title>
@endsection

@section('content')
    <div id="electronic-bill">
        <div class="title">
            <img width="230" height="150" src="{{ asset('assets/images/logo2.png')}}" alt="Logo">
            <h3 class="text-white">Tra cứu hóa đơn điện tử</h3>
            <form action="" class="form-search">
                <div class="wrap-input d-flex">
                    <input type="text" placeholder="Nhập mã số ..."> 
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
        <div class="content">

        </div>
    </div>
@endsection