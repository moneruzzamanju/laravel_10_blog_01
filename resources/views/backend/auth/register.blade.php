@extends('backend.auth.layouts.master')

@section('page_title','Register User')

@section('content')
<div class="border border-primary rounded mt-5">

    <form class="px-4 py-3" method="POST" action="{{ route('register') }}">
      @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name </label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Password Confirmation</label>
      <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="password confirmation">
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
         <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </form>

</div>
@endsection
