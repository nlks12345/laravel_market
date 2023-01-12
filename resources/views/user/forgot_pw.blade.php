@extends('layouts.core')
@extends('layouts.navbar')
@section('content')

@if (Session::has('message'))
    <div class="alert alert-success" role="alert">
       {{ Session::get('message') }}
    </div>
@endif

<div class="container py-3 py-md-5">
    <div class="row">
      <div class="col-12 col-lg-6 d-none d-lg-block">
        <img src="./resources/img/login-img.png" alt="" width="100%">
      </div>
    <!-- <div class="col-1"></div> -->
      
     
      <div class="col-12 col-lg-5 ms-auto">
        <form action="{{ route('validate_forgot_password') }}" method="POST" enctype="multipart/form-data">
          @csrf
        <h4 class="mb-4 display-body">Reset My Password</h4>
        <div class="mb-4">
          <label for="email" class="form-label">Email address</label>
          <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Your collection name">
          @if($errors->has('email'))
			<span class="text-danger">{{ $errors->first('email') }}</span>
		  @endif
        </div>

        <div class="mt-5 mb-4 d-flex  flex-column flex-md-row mt-md-5 my-3 mb-md-4 justify-content-between align-items-center">
          <button class="mt-3 mt-md-0 btn btn-primary btn-action">Forgot Password</button>
        </div>
        </form>
      </div>
    </div>
  </div>


@endsection