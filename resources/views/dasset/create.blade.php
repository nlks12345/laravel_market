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

  <div class="container py-3 py-md-5 d-flex flex-column align-items-center">
    <form action="{{ route('validate_asset_create') }}" method="POST" enctype="multipart/form-data">
      @csrf
        <h4 class="me-auto mx-md-auto display-body">
          Create new asset
        </h4>
        <p>Create a new asset and sell it from your inventory.</p>

        <div class="my-md-4 my-2 row g-4">
          <div class="col-md-6 col-12">
            <h5>Upload file</h5>
            <p>Upload your artwork here. It can be video, audio, image, or 3D model.
              <br><br>
              Format supported: JPG, PNG, MP4, GIF, MP3, WEBM, WEBP, GLB, SVG
            </p>
            <br>
            <canvas id="myCanvas" width="200" height="100" style="border:1px solid #000000;"></canvas>
              {{-- <img id="output_asset" alt="your image" /> --}}
             
        </div>

        <div class="col-md-6 col-12">
          {{-- onchange="loadFileAsset(event)" --}}
          {{-- <input type="file" id="upload_asset" name="upload_asset" hidden> --}}
          <input accept="image/*" type='file' id="upload_asset" name="upload_asset" hidden>
          <label for="upload_asset" class="uploadBtn" ><i class="me-3 fa-solid fa-file-circle-plus"></i>Choose file</label>
         
          @if($errors->has('upload_asset'))
              <span class="text-danger">{{ $errors->first('upload_asset')}}</span>
          @endif
        </div>

        <div class="col-12">
          <label for="asset_name" class="form-label">Asset Name</label>
          <input type="text" class="form-control form-control-lg" id="asset_name" name="asset_name"
          placeholder="Give a name for your upcoming Digital Asset">
        </div>

        <div class="col-12">
          <label for="asset_price" class="form-label">Asset Price</label>
          <input type="text" class="form-control form-control-lg" id="asset_price" name="asset_price"
          placeholder="Your Digital Asset Selling Price.">
        </div>

        <div class="col-12">
          <label for="asset_category" class="form-label">Category</label>
          <select class="form-select form-select-lg" name="asset_category" id="asset_category">
            <option selected disabled>Select a category</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>

        <div class="col-12">
          <label for="asset_description" class="form-label">Description</label>
          <textarea class="form-control form-control-lg" id="asset_description" name="asset_description" rows="3"></textarea>
        </div>

        <div class="col-12">
          <label for="asset_collection" class="form-label">Collection</label>
          <div class="row gx-2 row-cols-2 row-cols-md-4 row-cols-lg-5">
            <div class="col">
              <button type="button" data-bs-toggle="modal" data-bs-target="#newCollectionModal"
              class="new-collection btn btn-outline-primary d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-circle-plus mb-3 fa-3x"></i> New collection
              </button>
            </div>
            {{-- <div class="col">
              <label class="radio-custom">
                <input type="radio" name="asset_collection" value="small">
                <div class="ratio ratio-1x1">
                  <img
                  src="https://images.unsplash.com/photo-1625215081436-85323ed5042c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80">
                </div>
                <p>Car</p>
              </label>
            </div>
            <div class="col">
              <label class="radio-custom">
                <input type="radio" name="asset_collection" value="big">
                <div class="ratio ratio-1x1">
                  <img
                  src="https://images.unsplash.com/photo-1653587193484-92463e78f7b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80">
                </div>
                <p>Club</p>
              </label>
            </div> --}}
            @foreach($collections as $collection)
              <div class="col">
                <label class="radio-custom">
                  <input type="radio" name="collection_id" value="{{$collection->collection_id}}">
                  <div class="ratio ratio-1x1">
                    {{-- <img
                    src="https://images.unsplash.com/photo-1625215081436-85323ed5042c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"> --}}
                      <img src="{{env('APP_URL').'/public/uploads/collection/'.$collection->collection_banner_img}}">
                  </div>
                  <p>{{$collection->collection_name}}</p>
                </label>
              </div>
            @endforeach
          </div>

     
        </div>
      </div>
      <div class="me-auto form-check">
        <input class="form-check-input" type="checkbox" name="tnc_check" id="flexCheckDefault" > {{-- required='required'> --}}
        <label class="form-check-label" for="flexCheckDefault">
          By creating the NFT on this marketplace, I declare I have read and agree to the <a  data-toggle="modal" data-bs-toggle="modal" data-bs-target="#tncModal" >Terms and Conditions</a>.
        </label>
      </div>
      <hr>
      <button class="btn btn-primary ms-auto" type="submit">Create Digital Asset</button>
      {{-- <button class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#assetCreatedModal">Create Digital Asset</button> --}}
    </form>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="newCollectionModal" tabindex="-1" aria-labelledby="newCollectionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form action="{{ route('validate_collection_create') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="modal-header">
              <h5 class="modal-title me-4" id="newCollectionModalLabel">Create Collection</h5>
              <button type="button" class="btn-close ms-auto mb-auto " data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h5>Upload Image</h5>
              <p class="mb-4">This image will be your collection banner and is public to everyone.<br><br>
            Maximum file size allowed: 100mb<br>Format supported JPG, PNG, WEBP, GIF</p>

              <div class="mb-4">
                <canvas id="myCanvasCollection" width="200" height="100" style="border:1px solid #000000;"></canvas> 
                    {{-- <img id="output_collection" alt="your image" />  --}}
                    {{-- onchange="loadFileCollection(event)" --}}
                <input type="file" id="upload_collection"  name="upload_collection" hidden>
                <label for="upload_collection" class="uploadBtn w-100"><i class="me-3 fa-solid fa-file-circle-plus"></i>Choose
                  file</label>

                @if($errors->has('upload_collection'))
                    <span class="text-danger">{{ $errors->first('upload_collection')}}</span>
                @endif
              </div>

              <div class="mb-4">
                <label for="collection_name" class="form-label">Collection Name</label>
                <input type="text" class="form-control form-control-lg" id="collection_name" name="collection_name"
                  placeholder="Your collection name">
              </div>

              <div class="mb-4">
                <label for="collection_desc" class="form-label">Description</label>
                <input type="text" class="form-control form-control-lg" id="collection_desc" name="collection_desc"
                  placeholder="Let people know what is this collection about">
              </div>

              <div class="mb-4">
               <label for="collection_link" class="form-label">Collection Link</label>
               <div class="input-group">
                 <span class="input-group-text">virtural.com/collections/</span>
                 <input type="text" class="form-control prefix-icon form-control-lg" id="collection_link" name="collection_link"
                   placeholder="example-link">
               </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-white" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Create Collection</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="assetCreatedModal" tabindex="-1" aria-labelledby="assetCreatedModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title me-4" id="assetCreatedModalLabel">Asset Created</h5>
        </div>
        <div class="modal-body">
        <p>Congratulations! Your Digital Asset has been created successfully.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white">Create another asset</button>
          <button type="button" class="btn btn-primary">View Asset</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="tncModal" tabindex="-1" aria-labelledby="tncModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title me-4" id="tncModal">Terms and Conditions.</h5>
        </div>
        <div class="modal-body">
        <p>Terms and Conditions.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white">I'm Understood.</button>
        </div>
      </div>
    </div>
  </div>


@endsection