@extends('layouts.core')
@extends('layouts.navbar')
@section('content')

  <link rel="stylesheet" href="{{ asset('css/select-to-sell.css')}}">


  <div class="container py-3 py-md-5 d-flex flex-column">
    <h4 class="text-md-center display-body">
      Create new asset
    </h4>
    <p class="text-md-center">Create a new asset and sell it from your inventory.</p>

    <div class="my-md-4 my-2 row g-4">
      <div class="col-md-6 col-12">
        <h5>Upload file</h5>
        <p>Upload your artwork here. It can be video, audio, image, or 3D model.
          <br><br>
          Format supported: JPG, PNG, MP4, GIF, MP3, WEBM, WEBP, GLB, SVG
        </p>
      </div>

      <div class="col-md-6 col-12">
        <input type="file" id="uploadFile" hidden>
        <label for="uploadFile" class="uploadBtn"><i class="me-3 fa-solid fa-file-circle-plus"></i>Choose file</label>
      </div>

      <div class="col-12">
        <label for="assetName" class="form-label">Asset Name</label>
        <input type="text" class="form-control form-control-lg" id="assetName"
          placeholder="Give a name for your upcoming Digital Asset">
      </div>

      <div class="col-12">
        <label for="assetCategory" class="form-label">Category</label>
        <select class="form-select form-select-lg" id="assetCategory">
          <option selected disabled>Select a category</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

      <div class="col-12">
        <label for="assetDescription" class="form-label">Description</label>
        <textarea class="form-control form-control-lg" id="assetDescription" rows="3"></textarea>
      </div>
      <div class="col-12">
        <label for="assetDescription" class="form-label">Collection</label>
        <div class="row gx-2 row-cols-2 row-cols-md-4 row-cols-lg-5">
          <div class="col">

            <button data-bs-toggle="modal" data-bs-target="#newCollectionModal"
              class="new-collection btn btn-outline-primary d-flex flex-column align-items-center justify-content-center">
              <i class="fa-solid fa-circle-plus mb-3 fa-3x"></i> New collection
            </button>
          </div>
          <div class="col">
            <label class="radio-custom">
              <input type="radio" name="same" value="car">
              <div class="ratio ratio-1x1">
                <img
                  src="https://images.unsplash.com/photo-1625215081436-85323ed5042c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80">
              </div>
              <p>Car</p>
            </label>
          </div>
          <div class="col">
            <label class="radio-custom">
              <input type="radio" name="same" value="club">
              <div class="ratio ratio-1x1">
                <img
                  src="https://images.unsplash.com/photo-1653587193484-92463e78f7b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80">
              </div>
              <p>Club</p>
            </label>


          </div>
        </div>


      </div>
      <div class="col-12">
        <hr>
      </div>

      <div class="col-12">
        <div class="row row-cols-1 row-cols-md-3 gy-4">
          <div class="col">
            <label for="listingPrice" class="form-label">Listing Price</label>
            <div class="input-group">
              <span class="input-group-text">RM</span>
              <input type="text" class="form-control form-control-lg prefix-icon" id="listingPrice"
                placeholder="How much you want to sell it for">
            </div>
          </div>

          <div class="col">
            <label for="transactionFee" class="form-label">Transaction Fee - 2.5%</label>

            <input type="text" class="form-control form-control-lg" id="transactionFee"
              placeholder="This fee will be collected by Virtural" disabled>


          </div>

          <div class="col">
            <label for="paymentReceived" class="form-label">You Will Receive</label>
            <div class="input-group">
              <span class="input-group-text">RM</span>
              <input type="text" class="form-control form-control-lg prefix-icon" id="paymentReceived"
                placeholder="Amount after transaction fee is deducted">
            </div>

          </div>
        </div>
      </div>

      <div class="col-12">
        <label for="stockAmount" class="form-label">Stock Amount</label><i
          class="text-primary ms-3 fa-regular fa-circle-question" tabindex="0" role="button" data-bs-toggle="popover"
          data-bs-trigger="focus" data-bs-content="The amount of Digital Asset to be sold on the Marketplace"></i>
        <input type="text" class="form-control form-control-lg" id="stockAmount" placeholder="">
      </div>

      <div class="col-12">
        <label for="royalties" class="form-label">Royalties</label>
        <div class="input-group">

          <input type="text" class="form-control form-control-lg suffix-icon" id="royalties" placeholder="">
          <span class="input-group-text">%</span>
        </div>
      </div>

      <div class="col-12">
        <label for="deliverables" class="form-label">Deliverables</label>
        <input type="text" class="form-control form-control-lg" id="deliverables"
          placeholder="What physical item will the user get when purchasing this asset?">
      </div>
      <div class="col-12">
        <hr>
      </div>
    </div>


    <div class="me-md-auto mb-3 mb-md-0 form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        By creating the Digital Asset on this marketplace, I declare I have read and agree to the Terms and Conditions
      </label>
    </div>

    <div class="d-flex flex-column-reverse flex-md-row ms-md-auto">
      <button class="btn btn-action btn-white me-md-2" data-bs-toggle="modal"
        data-bs-target="#assetCancelModal">Cancel</button>

      <button class="btn btn-action btn-primary ms-md-2" data-bs-toggle="modal"
        data-bs-target="#assetCreatedModal">Create & Sell Digital Asset</button>
    </div>
  </div>

  <!-- new collection modal -->
  <div class="modal fade" id="newCollectionModal" tabindex="-1" aria-labelledby="newCollectionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title me-4" id="newCollectionModalLabel">Create Collection</h5>
          <button type="button" class="btn-close ms-auto mb-auto " data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>Upload Image</h5>
          <p class="mb-4">This image will be your collection banner and is public to everyone.<br><br>
            Maximum file size allowed: 100mb<br>Format supported JPG, PNG, WEBP, GIF</p>

          <div class="mb-4">
            <input type="file" id="uploadFile2" hidden>
            <label for="uploadFile2" class="uploadBtn w-100"><i class="me-3 fa-solid fa-file-circle-plus"></i>Choose
              file</label>
          </div>

          <div class="mb-4">
            <label for="collectionName" class="form-label">Collection Name</label>
            <input type="text" class="form-control form-control-lg" id="collectionName"
              placeholder="Your collection name">
          </div>

          <div class="mb-4">
            <label for="collectionDesc" class="form-label">Description</label>
            <input type="text" class="form-control form-control-lg" id="assetName"
              placeholder="Let people know what is this collection about">
          </div>

          <div class="mb-4">
            <label for="collectionLink" class="form-label">Collection Link</label>
            <div class="input-group">
              <span class="input-group-text">virtural.com/collections/</span>
              <input type="text" class="form-control prefix-icon form-control-lg" id="assetName"
                placeholder="example-link">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Create Collection</button>
        </div>
      </div>
    </div>
  </div>

  <!-- new asset modal -->
  <div class="modal fade" id="assetCreatedModal" tabindex="-1" aria-labelledby="assetCreatedModalLabel"
    aria-hidden="true">
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

  <!-- new cancel modal -->
  <div class="modal fade" id="assetCancelModal" tabindex="-1" aria-labelledby="assetCancelModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title me-4" id="assetCancelModalLabel">Are you sure?</h5>
        </div>
        <div class="modal-body">
          <p>The progress made will not be saved.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white">No</button>
          <button type="button" class="btn btn-primary">Yes</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
    })

  </script>

@endsection