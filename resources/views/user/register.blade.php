@extends('layouts.core')
@extends('layouts.navbar')
@section('content')

  <div class="container py-3 py-md-5">
    <div class="row">
      <div class="col-12 col-lg-6 d-none d-lg-block">
        <img src="./resources/img/signup-img.png" alt="" width="100%">
      </div>
    <!-- <div class="col-1"></div> -->
      <div class="col-12 col-lg-5 ms-auto">
        <form action="{{ route('validate_register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h6 class="mb-4 display-body"><b>Start Collecting Digital Assets With Real Money</b></h6>
            <div class="mb-4">
                <label for="name" class="form-label">First Name</label>
                <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Your First Name">
                @if($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            {{-- <div class="mb-4">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control form-control-lg" id="last_name" placeholder="Your Last Name">
                @if($errors->has('last_name'))
                  <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
            </div> --}}
            <div class="mb-4">
              <label for="email" class="form-label">Email address</label>
              <input type="text" name="email" class="form-control form-control-lg" id="email" placeholder="Your email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
              @if($errors->has('email'))
				        <span class="text-danger">{{ $errors->first('email') }}</span>
			        @endif
            </div>
            <div class="mb-2">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control form-control-lg" id="password"
                placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                <span class="text-danger" style="font-size: 10px">*Note: Password must contain at least 1 Uppercase, 1 special character, more than 8 character!</span>
                @if($errors->has('password'))
				          <br><span class="text-danger">{{ $errors->first('password') }}</span>
			          @endif
            </div>

            <div class="mb-4 form-check">
              <input class="form-check-input" type="checkbox" value="" id="showPassword" onchange="switchVisibility()">
              <label class="form-check-label" for="showPassword">
                Show password
              </label>
            </div>

            {{-- <div class="mb-2">
              <label for="confirmPassword" class="form-label">Confirm Password</label>
              <input type="password" name="confirmPassword" class="form-control form-control-lg" id="confirmPassword"
                placeholder="Confirm Password">
              @if($errors->has('confirmPassword'))
				<span class="text-danger">{{ $errors->first('confirmPassword') }}</span>
			  @endif
            </div>

            <div class="mb-4 form-check">
              <input class="form-check-input" type="checkbox" value="" id="showConfirmPassword" onchange="switchConfirmVisibility()">
              <label class="form-check-label" for="showConfirmPassword">
                Show confirm password
              </label>
            </div>
            --}}
              <div class="mb-2">
                <label for="phone" class="form-label">Contact No</label>
                <input type="text" name="phone" class="form-control form-control-lg" id="phone"
                  placeholder="Your Contact Number" data-bs-toggle="tooltip">
                  @if($errors->has('phone'))
				            <br><span class="text-danger">{{ $errors->first('phone') }}</span>
			            @endif
              </div>
              <div class="col-lg-12 row">
                <div class="col-lg-12 mb-2">
                  <label for="address" class="form-label">Address</label>
                  <textarea type="text" name="address" class="form-control form-control-lg" style="overflow:scroll;" id="address"
                    placeholder="Your Full Address"></textarea>
                  @if($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                  @endif
                </div> 
                <div class="col-lg-6 mb-2">
                  <label for="country" class="form-label">Country</label>
                  {{-- <input type="text" name="country" class="form-control form-control-lg" id="country"
                    placeholder="Country"> --}}
                    <select name="country" id="country" class="form-select" aria-label="Default select example">
                      <option selected>Select Menu</option>
                      <option value="singapore">Singapore</option>
                      <option value="malaysia">Malaysia</option>
                    </select>
                  @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                  @endif
                </div> 
                <div class="col-lg-6 mb-2">
                  <label for="state" class="form-label">State</label>
                  <input type="text" name="state" class="form-control form-control-lg" id="state"
                    placeholder="State">
                  @if($errors->has('state'))
                    <span class="text-danger">{{ $errors->first('state') }}</span>
                  @endif
                </div> 
                <div class="col-lg-6 mb-2">
                  <label for="city" class="form-label">City</label>
                  <input type="text" name="city" class="form-control form-control-lg" id="city"
                    placeholder="Cities">
                  @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                  @endif
                </div>     
                <div class="col-lg-6 mb-2">
                  <label for="zipcode" class="form-label">ZipCode</label>
                  <input type="text" name="zipcode" class="form-control form-control-lg" id="zipcode"
                    placeholder="ZipCode">
                  @if($errors->has('zipcode'))
                    <span class="text-danger">{{ $errors->first('zipcode') }}</span>
                  @endif
                </div>             
              </div>
              <div class="mb-2">
                <label for="profileImage" class="form-label">Profile Image</label>
                <input type="file" name="profileImage" class="form-control form-control-lg" id="profileImage">
                @if($errors->has('profileImage'))
                  <span class="text-danger">{{ $errors->first('profileImage')}}</span>
                @endif
              </div>


            <div class="d-flex flex-column flex-md-row mt-md-5 my-3 mb-md-4 align-items-center justify-content-between">
              <button class="mt-3 mt-md-0 btn btn-action btn-primary">Sign up</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection
