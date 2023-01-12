@extends('layouts.core')
@extends('layouts.navbar')
@section('content')

  <link rel="stylesheet" href="{{ asset('css/asset-detail.css')}}">
  <link rel="stylesheet" href="{{ asset('css/collection-style.css')}}">


  
    <div class="container px-0 pt-0 pb-3 py-md-5">
      <div class="row gx-0 gx-md-5">
        <div class="col-md-6 col-12">
          <div class="ratio ratio-1x1 product-main-img">
            <img
              src="https://images.unsplash.com/photo-1643101452019-bc00c9bba76b?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074"
              alt="">
          </div>
        </div>
  
        <div class="col-md-6 col-12">
          <div class="px-3">
            <h4 class="mt-3 mt-md-0">Flimsy Spaghetti</h4>
            <p class="mb-4">Created on 8 December 8888</p>
            <div class="row row-cols-1 row-cols-xl-2 gx-0 gy-3 gx-md-5">
              <div class="col">
                <div class="d-flex flex-column">
                  <h5>Category</h5>
                  <p class="">3D Art</p>
                </div>
              </div>
  
            </div>
            <hr>
            <p class="mb-4">Doris walked over to the window and reflected on her cold surroundings. She had always loved
              sunny Sleepford
              with its amused, anxious arches. It was a place that encouraged her tendency to feel anxious.</p>
  
            <div class="mb-4">
              <h5>Physical Deliverables</h5>
              <p>1x A4 Autographed Photography Print</p>
            </div>
            <div class="mb-4">
              <h5 class="mb-2">Collection</h5>
              <div class="ratio ratio-32x9">
                <img
                  src="https://images.unsplash.com/photo-1653045474061-075ba29db54f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1267&q=80"
                  alt="">
                <span class="collection-overlay">
                  <h5>Cyberfunk</h5>
                </span>
              </div>
            </div>
            <hr>
            <div class="d-flex flex-column flex-md-row justify-content-between">
              <button class="btn btn-white btn-delete btn-danger btn-action mb-2 mb-md-0">Delete Digital Asset</button>
  
              <button class="ms-md-auto btn-action btn btn-primary-gradient">Sell on marketplace</button>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  


@endsection