@extends('layouts.core')
@extends('layouts.navbar')
@section('content')

  <link rel="stylesheet" href="{{ asset('css/collection-style.css')}}">
  <link rel="stylesheet" href="{{ asset('css/asset-detail.css')}}">
  
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
            <h4 class="price text-primary">RM 29,222</h4>
            <p class="desc mb-4">Stock remaining: 4 / 4</p>
            <div class="row row-cols-1 row-cols-xl-2 gx-0 gy-3 gx-md-5">
              <div class="col">
                <div class="d-flex flex-row">
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
              </div>
  
              <div class="col">
                <div class="d-flex flex-row">
                  <div class="ratio ratio-1x1 ratio-circle profile-pic me-3">
                    <img class="test"
                      src="https://images.unsplash.com/photo-1585515320310-259814833e62?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                      alt="">
                  </div>
                  <div class="d-flex flex-column">
                    <h5>Seller</h5>
                    <h5 class="text-primary">Aung The Last Fruit Blender</h5>
                  </div>
                </div>
              </div>
  
            </div>
            <hr>
            <p class="mb-4">Doris walked over to the window and reflected on her cold surroundings. She had always loved
              sunny Sleepford
              with its amused, anxious arches. It was a place that encouraged her tendency to feel anxious.</p>
  
            <div class="mb-4">
              <h5>Category</h5>
              <p>Photography</p>
            </div>
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
              </div>
            </div>
            <hr>
  
            <div class="accordion my-4" id="accordionOwners">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5>2 Owner(s)</h5><i
                      class="ms-auto text-primary fa-solid fa-angle-down rotate-icon"></i>
                  </button>
        
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionFaq">
                  <div class="accordion-body">
                    <div class="d-flex flex-row align-items-center mb-3">
                      <div class="ratio ratio-1x1 ratio-circle profile-pic me-3">
                        <img
                          src="https://images.unsplash.com/photo-1653660511035-d8525eac7ff7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                          alt="">
                      </div>
                      <h5 class="text-primary">Security of The Space</h5>
                    </div>
          
                    <div class="d-flex flex-row align-items-center">
                      <div class="ratio ratio-1x1 ratio-circle profile-pic me-3">
                        <img
                          src="https://images.unsplash.com/photo-1585515320310-259814833e62?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                          alt="">
                      </div>
                      <h5 class="text-primary">Aung The Last Fruit Blender</h5>
                    </div>
                  </div>
                </div>
              </div>
        
            </div>
            <hr>
            <div class="d-flex">
              <button class="ms-md-auto btn-action btn btn-primary-gradient">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
  
    </div>

  
  </html>
@endsection