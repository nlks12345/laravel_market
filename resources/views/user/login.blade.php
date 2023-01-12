@extends('layouts.core')
@extends('layouts.navbar')
@section('content')

@if($message = Session::get('success'))

<div class="alert alert-info">
  {{ $message }}
</div>
@elseif($message = Session::get('failed'))
  <div class="alert alert-danger">
    {{ $message }}
  </div>
@endif

<div class="container py-3 py-md-5">
    <div class="row">
      <div class="col-12 col-lg-6 d-none d-lg-block">
        <img src="./resources/img/login-img.png" alt="" width="100%">
      </div>
    <!-- <div class="col-1"></div> -->

      <div class="col-12 col-lg-5 ms-auto">
        <form action="{{ route('validate_login') }}" method="POST" enctype="multipart/form-data">
          @csrf
        <h4 class="mb-4 display-body">Login to Virtural Marketplace</h4>
        <div class="mb-4">
          <label for="email" class="form-label">Email address</label>
          <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Your collection name">
          @if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
        </div>
        <div class="mb-2">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control form-control-lg" id="password" name="password"
            placeholder="Your Password">
          @if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
        </div>

        <div class="mb-4 form-check">
          <input class="form-check-input" type="checkbox" value="" id="showPassword" onchange="switchVisibility()">
          <label class="form-check-label" for="showPassword">
            Show password
          </label>
        </div>
        <p>Don't have an account?<br class="d-md-none"><a class="ms-md-2" href="{{route('register')}}">SIGN UP HERE</a></p>
        <div class="mt-5 mb-4 d-flex  flex-column flex-md-row mt-md-5 my-3 mb-md-4 justify-content-between align-items-center">
          <a href="{{route('forgot_password')}}">Forgot Password?</a>
          <button class="mt-3 mt-md-0 btn btn-primary btn-action">Login</button>
        </div>
        </form>
      </div>
    </div>
  </div>


@endsection