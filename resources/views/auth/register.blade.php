@extends('layouts.app')

@section('title', 'Đăng ký')

@section('content')
<div class="register_container">
  <div class="register_left">
    <p class="register_left_text">@BlogTFT</p>
    <video autoplay muted loop>
      <source src="https://cdn.dribbble.com/uploads/48292/original/30fd1f7b63806eff4db0d4276eb1ac45.mp4?1689187515" type="video/mp4">
    </video>
  </div>

  <div class="register_right">
    <div class="register_form-container">
      <h2 class="register_title">Đăng ký</h2>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <label class="register_label">Tên đăng nhập</label>
        <input class="register_input" type="text" name="username" value="{{ old('username') }}" required />

        <label class="register_label">Mật khẩu</label>
        <input class="register_input" type="password" name="password" required />

        <label class="register_label">Xác nhận mật khẩu</label>
        <input class="register_input" type="password" name="password_confirmation" required />

        <label class="register_label">Giới tính</label>
        <div class="register_gender">
          <label><input type="radio" name="sex" value="male" {{ old('sex') === 'male' ? 'checked' : '' }} required /> Nam</label>
          <label><input type="radio" name="sex" value="female" {{ old('sex') === 'female' ? 'checked' : '' }} required /> Nữ </label>
        </div>

        <button class="register_button" type="submit">Đăng ký</button>
      </form>

      <div class="register_terms">
          Bằng việc tạo một tài khoản, bạn đồng ý với
          <a href="#">Điều khoản dịch vụ</a>, <a href="#">Chính sách bảo mật</a>
      </div>


      <div class="register_signin">
        Đã có tài khoản?
        <a href="{{ route('login') }}">Đăng nhập</a>
      </div>
    </div>
  </div>

  <div class="register_right_2"></div>
</div>
@endsection
