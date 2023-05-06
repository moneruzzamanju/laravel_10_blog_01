@extends('backend.auth.layouts.master')
@section('page_title','User Login')


@section('content')
<div class="border border-primary rounded mt-5">
    <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
      @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <div class="mb-3">
         <button type="submit" class="btn btn-primary btn-block">Log in</button>
    </div>
  </form>
  <div class="dropdown-divider"></div>
{{--  <div class="col-md-6 offset-md-3">--}}
{{--    <a class="dropdown-item" href="#">New around here? Sign up</a>--}}
{{--    <a class="dropdown-item" href="#">Forgot password?</a>--}}
{{--  </div>--}}
</div>
@endsection
