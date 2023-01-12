@extends('layouts.core')
@extends('layouts.navbar')
@section('content')

  <link rel="stylesheet" href="{{ asset('css/edit-profile.css')}}">
  <link rel="stylesheet" href="{{ asset('css/collection-style.css')}}">

  <div class="container">
    <form action="{{ route('validate_edit_profile') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="profile d-flex flex-column">
        <div class="profile-bg">
          <img id="bg_output" alt="">
          <button class="btn btn-white" id="btn-changebg"  onclick="getAcceptedExtensionBG()">Change background</button>
          <input type="file" name="inputFileBG" id="inputFileBG" onchange="loadBackgroundFile(event)" multiple="multiple" style="display: none;" >
        </div>

        <div class="profile-info card">
          <div class="profile-main-pic ratio ratio-1x1 ratio-circle">
            <img id="profile_output" alt="">
          </div>
          <button type="button" id="uploadBtn" onclick="getAcceptedExtension()" class="mx-auto btn-outline-primary btn btn-action btnChangeProfile">Change profile image</button>
          <input type="file" name="inputFile" id="inputFile" onchange="loadProfileFile(event)" multiple="multiple" style="display: none;" >

          {{-- <button class="mx-auto btn-outline-primary btn btn-action btnChangeProfile">Change profile image</button> --}}
          <button class="d-md-none mx-auto btn-outline-primary btn btn-action mt-2">Change background</button>
          <!-- <h4 class="profileName">SIOWRS</h4> -->

          <div class="mt-4">
            <label for="name" class="form-label profileNameForm">Profile Name</label>
            <input type="text" class="form-control form-control-lg" name="name" id="name"
              placeholder="A name to display for the public">
          </div>

          {{-- <div class="row mt-4">
            <div class="col-12 col-md-6">
              <label for="twitterProfile" class="form-label">Address</label>
              <div class="input-group">
                <input type="text" class="form-control form-control-lg prefix-icon" id="twitterProfile"
                  placeholder="Twitter name">
              </div>
            </div>

            <div class="col-12 col-md-6 mt-4 mt-md-0">
              <label for="instagramProfile" class="form-label">Instagram Profile</label>
              <input type="text" class="form-control form-control-lg" id="instagramProfile"
                placeholder="Instagram profile">
            </div>
          </div> --}}

          <div class="mt-4">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" aria-label="Default select example">
              <option selected>Select Status</option>
              <option value="1">Done</option>
              <option value="2">Pending Activation</option>
            </select>
          </div>

          {{-- <div class="mt-4">
            <label for="assetDescription" class="form-label">Address</label>
            <textarea class="form-control form-control-lg" id="assetDescription" rows="3"></textarea>
          </div> --}}
          <div class="d-flex flex-column flex-md-row justify-content-md-between my-4">
            <button class="btn btn-white btn-action">Reset Password</button>
            <div>
              <!-- <button class="btn btn-white btn-action">Cancel</button> -->
              <button class="btn btn-primary btn-action">Update Profile</button>
            </div>
          </div>
        </div>
      </div>
      <hr class="d-md-none">
      <h4 class="display-body my-4">Inventory Privacy</h4>
      <div class="row gy-4 gy-md-0">
        <div class="col-md-3 col-12">
          <h5 class="mb-3">Purchased Digital Asset</h5>
          <div class="form-check mb-1">
            <input class="form-check-input" type="radio" name="purchasedView" id="purchasedVisible">
            <label class="form-check-label" for="purchasedVisible">Visible to public</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="purchasedView" id="purchasedHidden">
            <label class="form-check-label" for="purchasedHidden">Hidden</label>
          </div>
        </div>

        <div class="col-md-3 col-12">
          <h5 class="mb-3">Created Digital Asset</h5>
          <div class="form-check mb-1">
            <input class="form-check-input" type="radio" name="createdView" id="createdVisible">
            <label class="form-check-label" for="createdVisible">Visible to public</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="createdView" id="createdHidden">
            <label class="form-check-label" for="createdHidden">Hidden</label>
          </div>
        </div>

        <div class="col-md-3 col-12">
          <h5 class="mb-3">Digital Assets Collections</h5>
          <div class="form-check mb-1">
            <input class="form-check-input" type="radio" name="collectionView" id="collectionVisible">
            <label class="form-check-label" for="collectionVisible">Visible to public</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="collectionView" id="collectionHidden">
            <label class="form-check-label" for="collectionHidden">Hidden</label>
          </div>
        </div>
      </div>
      
    </form>
  </div>

@endsection