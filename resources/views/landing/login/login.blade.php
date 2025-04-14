@extends('base.app')
@section('title','homepage')
@section('content')
<div class="login-container">
        <!-- Bagian Kiri (Form) -->
        <div class="left">
            <div class="logo">
            <img src="{{asset('svg/logo.svg')}}" alt="">
            </div>
        </div>
        <div class="right">
        <form action="{{ route('dashboard') }}" method="get">
            <div class="judul">
                <h2>Masuk ke akunmu</h2>
                <p>Masukkan email dan kata sandi akun anda</p>
            </div>
            <div class="contentt">
                    <div class="content-login">
                        <h6>Email</h6>
                        <div class="input">
                        <input type="text" class="form-control" id="email" Placeholder="Masukkan Email">
                        <img src="{{asset('svg/logo-email.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="content-login">
                        <h6>Kata Sandi</h6>
                        <div class="input">
                        <input type="text" class="form-control" id="email" Placeholder="Masukkan Kata Sandi">
                        <img src="{{asset('svg/logo-pass.svg')}}" alt="">
                        </div>
                    </div>
                    <button class="btn-login" type="input">Masuk</button>
            </div>
               
            </form>
        </div>
    </div>
@endsection