@extends('layouts.login_master')
@section('title', 'Login')
@push('page-css')
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
@endpush
@section('content')
<div class="bgc center">
  <div class="container">
    <div class="header">
      <h1><span class="l">L</span>OGIN</h1>
    </div>
    <form action="{{route('post.login')}}" id="login-form" method="POST">
        @csrf
      <label for="uname">Email</label>
      <input type="text" class="inp" name="email" required>
      <label for="psw">Password</label>
      <input type="password" class="inp" name="password" required>
      <button type="button" id="login">Login</button>
    </form>
    <div class="signup">
      <b>Don't have account?</b>
      <a href="#">Sign up</a>
    </div>
  </div>
</div>
@endsection