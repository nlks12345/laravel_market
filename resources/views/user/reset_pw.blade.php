@extends('layouts.core')
@extends('layouts.navbar')
@section('content')


<div class="container py-3 py-md-5">
    <div class="row">
      <div class="col-12 col-lg-6 d-none d-lg-block">
        <img src="./resources/img/login-img.png" alt="" width="100%">
      </div>
    <!-- <div class="col-1"></div> -->

      <div class="col-12 col-lg-5 ms-auto">
        <form action="{{ route('validate_reset_password') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group row">
                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                <div class="col-md-6">
                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                <div class="col-md-6">
                    <input type="password" id="password" class="form-control" name="password" required autofocus>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                <div class="col-md-6">
                    <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Reset Password
                </button>
            </div>
        </form>
      </div>
    </div>
  </div>


@endsection