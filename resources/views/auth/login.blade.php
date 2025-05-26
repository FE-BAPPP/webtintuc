@extends('layouts.app')

@section('title', 'Đăng nhập vào BlogTFT')

@section('content')
<div class="login_container">
  <div class="login_left">
    <p class="login_left_text">@BlogTFT</p>
    <video autoplay muted loop>
      <source src="https://cdn.dribbble.com/uploads/48226/original/b8bd4e4273cceae2889d9d259b04f732.mp4?1689028949" type="video/mp4">
    </video>
  </div>

  <div class="login_right">
    <div class="login_form-container">
      <h2 class="login_title">Đăng nhập vào BlogTFT</h2>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <label class="login_label">Tên người dùng</label>
        <input class="login_input" type="text" name="username" required />

        <label class="login_label">Mật khẩu </label>
        <input class="login_input" type="password" name="password" required />

        <div class="login_forgot">
          <a href="#" style="text-decoration: underline;">Quên mật khẩu?</a>
        </div>

        <button class="login_button" type="submit">Đăng nhập</button>
      </form>

      <div class="login_signup">
        Chưa có tài khoản?
        <a href="{{ route('register') }}" style="text-decoration: underline">Đăng ký</a>
      </div>
    </div>
  </div>

  <div class="login_right_2"></div>
</div>
@endsection
