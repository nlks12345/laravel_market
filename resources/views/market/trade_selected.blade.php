@extends('layouts.core')
@extends('layouts.navbar')
@section('content')

  <link rel="stylesheet" href="{{ asset('css/select-to-sell.css')}}">

    <div class="container px-0 pt-0 pb-3 py-md-5">
      <div class="row gx-0 gx-md-5">
  
        <div class="col-12 col-md-5">
          <div class="ratio ratio-1x1 product-main-img">
            <img
              src="https://images.unsplash.com/photo-1643101452019-bc00c9bba76b?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074"
              alt="">
          </div>
        </div>
  
        <div class="col-12 col-md-7">
          <div class="px-3">
            <h4 class="mb-2 mt-3 mt-md-0">Flimsy Spaghetti</h4>
            <p class="mb-4">Doris walked over to the window and reflected on her cold surroundings. She had always loved
              sunny Sleepford
              with its amused, anxious arches. It was a place that encouraged her tendency to feel anxious.</p>
  
            <div class="d-flex flex-row mb-4">
              <div class="ratio ratio-1x1 ratio-circle profile-pic me-3">
                <img
                  src="https://images.unsplash.com/photo-1547619292-8816ee7cdd50?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"
                  alt="">
              </div>
  
              <div class="d-flex flex-column">
                <h5>Created by (10% Royalties)</h5>
                <h5 class="text-primary">Siowrs</h5>
              </div>
            </div>
  
            <div class="mb-4">
              <h5>Category</h5>
              <p>Photography</p>
            </div>
  
            <div class="">
              <h5 class="mb-2">Collection</h5>
              <div class="ratio ratio-32x9">
                <img
                  src="https://images.unsplash.com/photo-1653045474061-075ba29db54f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1267&q=80"
                  alt="">
              </div>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="px-3">
            <hr>
          </div>
        </div>
  
        <div class="col-12">
          <div class="px-3">
            <div class="row row-cols-1 row-cols-md-3 gy-4 mb-4">
              <div class="col">
                <label for="listingPrice" class="form-label">Listing Price</label>
                <div class="input-group">
                  <span class="input-group-text">RM</span>
                  <input type="text" class="form-control form-control-lg prefix-icon" id="listingPrice" placeholder="">
                </div>
              </div>
  
              <div class="col">
                <label for="transactionFee" class="form-label">Transaction Fee - 2.5%</label>
                <input type="text" class="form-control form-control-lg" id="transactionFee" placeholder="" disabled>
              </div>
  
              <div class="col">
                <label for="paymentReceived" class="form-label">You Will Receive</label>
                <div class="input-group">
                  <span class="input-group-text">RM</span>
                  <input type="text" class="form-control form-control-lg prefix-icon" id="paymentReceived" placeholder="">
                </div>
              </div>
            </div>
  
  
            <div class="mb-4">
              <label for="stockAmount" class="form-label">Stock Amount</label><i
                class="text-primary ms-3 fa-regular fa-circle-question" tabindex="0" role="button"
                data-bs-toggle="popover" data-bs-trigger="focus"
                data-bs-content="The amount of Digital Asset to be sold on the Marketplace"></i>
              <input type="text" class="form-control form-control-lg" id="stockAmount" placeholder="">
            </div>
  
            <div class="mb-4">
              <label for="royalties" class="form-label">Royalties</label>
              <div class="input-group">
  
                <input type="text" class="form-control form-control-lg suffix-icon" id="royalties" placeholder="">
                <span class="input-group-text">%</span>
              </div>
            </div>
  
            <div class="mb-4">
              <label for="deliverables" class="form-label">Deliverables</label>
              <input type="text" class="form-control form-control-lg" id="deliverables"
                placeholder="What physical item will the user get when purchasing this asset?">
            </div>
  
            <hr>
  
            <div class="me-md-auto mb-3 form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                By creating the Digital Asset on this marketplace, I declare I have read and agree to the Terms and
                Conditions
              </label>
            </div>
  
            <div class="d-flex ">
              <button class="ms-auto btn-action btn btn-primary" data-bs-toggle="modal" data-bs-target="#assetCreatedModal">Sell Asset</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="modal fade" id="assetCreatedModal" tabindex="-1" aria-labelledby="assetCreatedModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title me-4" id="assetCreatedModalLabel">Asset listed on marketplace</h5>
          </div>
          <div class="modal-body">
          <p>The Digital Asset has been listed publicly on the marketplace successfully.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">View Asset</button>
          </div>
        </div>
      </div>
    </div>

@endsection