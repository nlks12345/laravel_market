@extends('layouts.core')
@extends('layouts.navbar')
@section('content')

  <link rel="stylesheet" href="{{ asset('css/profile.css')}}">
  <link rel="stylesheet" href="{{ asset('css/collection-style.css')}}">
   
    <div class="container">
      <form action="{{ route('validate_login') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="profile d-flex flex-column">
        <div class="profile-bg">
          <img src="https://i.ytimg.com/vi/PqjlLr8LWiA/maxresdefault.jpg" alt="">
        </div>
  
        <div class="profile-info card">
          <div class="profile-main-pic ratio ratio-1x1 ratio-circle">
            <img src="{{env('APP_URL').'/public/uploads/profile/'.$user_data['file_name']}}" alt="">
          </div>
          {{-- @foreach($user_data as $key => $user) --}}
          {{-- {{dd($user_data['file_name']);}} --}}
          <h4 class="profileName">{{$user_data['name']}}</h4>
          <a href="{{ route('edit_profile')}}" class="mx-auto mb-4 text-uppercase">Edit Profile</a>
          <div class="d-flex flex-row mx-auto mb-4">
            <p class="me-5"><a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram me-2 fa-fw"></i></a>
              <a href="https://www.instagram.com" target="_blank">Intagram</a>
            </p>
            <p class="ms-5"><a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook me-2 fa-fw"></i></a>
              <a href="https://www.instagram.com" target="_blank">Facebook</a>
            </p>
          </div>
          <div class="d-flex flex-row mb-4 stats-wrapper">
            <div class="stats">
              <div class="">
                <h4 class="display-body">{{$user_data['total_asset']}}</h4>
                <p class="">Asset owned</p>
              </div>
              <a href="{{ route('listing') }}" class="btn btn-outline-primary w-100 btn-link">Buy</a>
            </div>
            <div class="stats">
              <div>
                <h4 class="display-body">12</h4>
                <p class="">Asset created</p>
              </div>
              <a href="{{ route('asset_created') }}" class="btn btn-outline-primary w-100 btn-link">Create</a>
            </div>
            <div class="stats">
              <div>
                <h4 class="display-body">5</h4>
                <p class="">Asset sold</p>
              </div>
              <a href="{{ route('trade_new') }}" class="btn btn-outline-primary w-100 btn-link">Sell</a>
            </div>
          </div>
          <p>"Look Mark," growled Susan, with a virtuous glare that reminded Mark of callous frogs. "It's not that I
            don't
            love you, but I want a resolution. You owe me 2757 marker pens."</p>
          {{-- @endforeach --}}
        </div>
        
        <ul class="nav nav-pills justify-content-center" id="profileTab" role="tablist">
          <li class="nav-item m-1" role="presentation">
            <button class="nav-link active btn" id="home-tab" data-bs-toggle="tab" data-bs-target="#owned" type="button"
              role="tab" aria-controls="home" aria-selected="true">Owned<span class="underline"></span></button>
  
          </li>
          <li class="nav-item m-1" role="presentation">
            <button class="nav-link btn" id="created-tab" data-bs-toggle="tab" data-bs-target="#created" type="button"
              role="tab" aria-controls="profile" aria-selected="false">Created<span class="underline"></span></button>
          </li>
          <li class="nav-item m-1" role="presentation">
            <button class="nav-link btn" id="collections-tab" data-bs-toggle="tab" data-bs-target="#collections"
              type="button" role="tab" aria-controls="contact" aria-selected="false">Collections<span
                class="underline"></span></button>
          </li>
  
          <li class="nav-item m-1" role="presentation">
            <button class="nav-link btn" id="favourite-tab" data-bs-toggle="tab" data-bs-target="#favourite" type="button"
              role="tab" aria-controls="contact" aria-selected="false">Favourite<span class="underline"></span></button>
          </li>
  
          <li class="nav-item m-1" role="presentation">
            <button class="nav-link btn" id="listedMarketplace-tab" data-bs-toggle="tab"
              data-bs-target="#listedMarketplace" type="button" role="tab" aria-controls="contact"
              aria-selected="false">Listed on Marketplace<span class="underline"></span></button>
          </li>
  
          <li class="nav-item m-1" role="presentation">
            <button class="nav-link btn" id="pendingPayment-tab" data-bs-toggle="tab" data-bs-target="#pendingPayment"
              type="button" role="tab" aria-controls="contact" aria-selected="false">Pending Payment<span
                class="underline"></span></button>
          </li>
        </ul>
  
  
      </div>
      <hr class="d-md-none">
      <div class="tab-content my-4" id="myTabContent">
        <div class="tab-pane fade show active" id="owned" role="tabpanel" aria-labelledby="owned-tab">
          <div class="d-md-none">
            <button class="mb-2 btn btn btn-outline-primary w-100" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#ownedFilter" aria-controls="ownedFilter">
              <i class="fa-solid fa-filter me-2"></i>Filter
            </button>
            <div class="dropdown">
              <button class="mb-3 btn btn-outline-primary dropdown-toggle w-100" type="button" id="sortPriceBtnMobile"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="me-2 fa-solid fa-sort"></i>Price: Low to high
              </button>
              <ul class="dropdown-menu" aria-labelledby="sortPriceBtn2">
                <li><a class="dropdown-item" href="#">Price: High to l2ow</a></li>
  
              </ul>
            </div>
          </div>
          <div class="row gx-md-5">
            <div class="col-12 col-lg-3 d-none d-md-block">
              <div class="accordion accordion-flush" id="filterbar">
  
                <div class="accordion-item">
                  <div class="accordion-header" id="filterbarHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#category" aria-expanded="true" aria-controls="category">
                      <i class="fa-solid fa-boxes-stacked fa-fw me-3"></i>
                      <h5 class="">Categories</h5>
                      <i class="ms-auto fa-solid rotate-icon fa-caret-down"></i>
  
                    </button>
                  </div>
                  <div id="category" class="accordion-collapse collapse" aria-labelledby="filterbarHeader">
                    <div class="accordion-body mt-2">
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="photoCheckbox">
                        <label class="form-check-label" for="photoCheckbox">
                          Photography
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="artCheckbox">
                        <label class="form-check-label" for="artCheckbox">
                          Art
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="clothCheckbox">
                        <label class="form-check-label" for="clothCheckbox">
                          Clothing
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="clothCheckbox">
                        <label class="form-check-label" for="clothCheckbox">
                          Accessories
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shoesCheckbox">
                        <label class="form-check-label" for="shoesCheckbox">
                          Shoes
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="bagCheckbox">
                        <label class="form-check-label" for="bagCheckbox">
                          Bag
                        </label>
                      </div>
  
                    </div>
                  </div>
  
                </div>
  
                <div class="accordion-item">
                  <div class="accordion-header" id="filterbarHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#priceRange" aria-expanded="true" aria-controls="category">
                      <i class="fa-solid fa-dollar-sign fa-fw me-3"></i>
                      <h5 class="">Price range</h5>
                      <i class="ms-auto fa-solid rotate-icon fa-caret-down"></i>
  
                    </button>
                  </div>
                  <div id="priceRange" class="accordion-collapse collapse" aria-labelledby="filterbarHeader">
                    <div class="accordion-body mt-2">
  
                      <div class="row row-cols-1 gy-2">
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text">RM</span>
                            <input type="text" class="form-control prefix-icon" placeholder="Min" aria-label="Min">
  
                          </div>
                        </div>
  
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text">RM</span>
                            <input type="text" class="form-control prefix-icon" placeholder="Max" aria-label="Max">
  
                          </div>
                        </div>
  
                        <div class="col">
                          <button class="mt-3 w-100 btn btn-outline-primary">Apply</button>
                        </div>
                      </div>
                    </div>
                  </div>
  
                </div>
  
              </div>
            </div>
  
            <div class="col-12 col-lg-9">
              <div class="d-none d-md-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Show Digital Assets created by you </label>
                </div>
  
                <div class="dropdown">
                  <button class="btn btn-white dropdown-toggle" type="button" id="sortPriceBtn" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="me-3 fa-solid fa-sort"></i>Price: Low to high
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="sortPriceBtn">
                    <li><a class="dropdown-item" href="#">Price: High to low</a></li>
  
                  </ul>
                </div>
              </div>
  
              <div class="overflow-hidden">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-5 gx-md-3">
                  <a href="{{route('asset_owned')}}" class="col grid-item">
                    <div class="ratio ratio-3x2 mb-2">
                      <img
                        src="https://images.unsplash.com/photo-1643101452019-bc00c9bba76b?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074"
                        alt="">
                    </div>
  
                    <h5 class="mb-1">Flimsy spaghetti</h5>
                    <p class="desc">Creator: Feed Richards</p>
                    <p class="desc">Purchased at RM90 on 29 Feb 2022</p>
                  </a>
  
                  <a href="{{route('asset_owned')}}" class="col grid-item">
                    <div class="ratio ratio-3x2 mb-2">
                      <img
                        src="https://images.unsplash.com/photo-1580136579312-94651dfd596d?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1317"
                        alt="">
                    </div>
  
                    <h5 class="mb-1">That doesn't seem fair</h5>
                    <p class="desc">Creator: Scarlet Snitch</p>
                    <p class="desc">Purchased at RM76 on 22 Feb 2022</p>
  
                  </a>
  
                  <a href="{{route('asset_owned')}}" class="col grid-item">
                    <div class="ratio ratio-3x2 mb-2">
                      <img
                        src="https://images.unsplash.com/photo-1602532305019-3dbbd482dae9?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735"
                        alt="">
                    </div>
  
                    <h5 class="mb-1">Splish splash abstract art</h5>
                    <p class="desc">Creator: You</p>
                    <p class="desc">Created on 22 Feb 2022</p>
  
                  </a>
  
                  <a href="{{route('asset_owned')}}" class="col grid-item">
                    <div class="ratio ratio-3x2 mb-2">
                      <img
                        src="https://img.wattpad.com/3c23f40a4543395e92547a84b58e823e7d8258fe/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f6a4c47575065704e4666425234413d3d2d33362e313439643236376332633936303431313933393235343037393534312e6a7067?s=fit&w=720&h=720"
                        alt="">
                    </div>
  
                    <h5 class="mb-1">The little girl match</h5>
                    <p class="desc">Creator: You</p>
                    <p class="desc">Created on 19 Feb 2022</p>
  
                  </a>
  
                  <a href="{{route('asset_owned')}}" class="col grid-item">
                    <div class="ratio ratio-3x2 mb-2">
                      <img src="https://pbs.twimg.com/media/BNAzrMpCUAAaohW.jpg" alt="">
                    </div>
  
                    <h5 class="mb-1">Ring and roses</h5>
                    <p class="desc">Creator: ffff</p>
                    <p class="desc">Purchased at RM1.50 on 88 Feb 8888</p>
  
                  </a>
  
                  <a href="{{route('asset_owned')}}" class="col grid-item">
                    <div class="ratio ratio-3x2 mb-2">
                      <img
                        src="https://mymodernmet.com/wp/wp-content/uploads/archive/MLlCE8ZnRBF1DtvKqb9r_1082119684.jpeg"
                        alt="">
                    </div>
  
                    <h5 class="mb-1">BKB Color Hole</h5>
                    <p class="desc">Creator: Counter Initiation</p>
                    <p class="desc">Purchased at RM92,10 on 24 Feb 2022</p>
  
                  </a>
                </div>
              </div>
            </div>
          </div>
  
        </div>
  
        <div class="tab-pane fade" id="created" role="tabpanel" aria-labelledby="created-tab">
          <div class="row gx-md-5">
            <div class="col-12 col-lg-3">
              <div class="accordion accordion-flush" id="filterbar">
  
  
  
                <div class="accordion-item">
                  <div class="accordion-header" id="filterbarHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#category" aria-expanded="true" aria-controls="category">
                      <i class="fa-solid fa-boxes-stacked fa-fw me-3"></i>
                      <h5 class="">Categories</h5>
                      <i class="ms-auto fa-solid rotate-icon fa-caret-down"></i>
  
                    </button>
                  </div>
                  <div id="category" class="accordion-collapse collapse" aria-labelledby="filterbarHeader">
                    <div class="accordion-body mt-2">
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="photoCheckbox">
                        <label class="form-check-label" for="photoCheckbox">
                          Photography
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="artCheckbox">
                        <label class="form-check-label" for="artCheckbox">
                          Art
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="clothCheckbox">
                        <label class="form-check-label" for="clothCheckbox">
                          Clothing
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="clothCheckbox">
                        <label class="form-check-label" for="clothCheckbox">
                          Accessories
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shoesCheckbox">
                        <label class="form-check-label" for="shoesCheckbox">
                          Shoes
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="bagCheckbox">
                        <label class="form-check-label" for="bagCheckbox">
                          Bag
                        </label>
                      </div>
  
                    </div>
                  </div>
  
                </div>
  
                <div class="accordion-item">
                  <div class="accordion-header" id="filterbarHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#priceRange" aria-expanded="true" aria-controls="category">
                      <i class="fa-solid fa-dollar-sign fa-fw me-3"></i>
                      <h5 class="">Price range</h5>
                      <i class="ms-auto fa-solid rotate-icon fa-caret-down"></i>
  
                    </button>
                  </div>
                  <div id="priceRange" class="accordion-collapse collapse" aria-labelledby="filterbarHeader">
                    <div class="accordion-body mt-2">
  
                      <div class="row row-cols-1 gy-2">
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text">RM</span>
                            <input type="text" class="form-control prefix-icon" placeholder="Min" aria-label="Min">
  
                          </div>
                        </div>
  
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text">RM</span>
                            <input type="text" class="form-control prefix-icon" placeholder="Max" aria-label="Max">
  
                          </div>
                        </div>
  
                        <div class="col">
                          <button class="mt-3 w-100 btn btn-outline-primary">Apply</button>
                        </div>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>
            </div>
  
            <div class="col-12 col-lg-9">
              <div class="d-flex justify-content-between align-items-center mb-3">
  
                <div class="ms-auto dropdown d-none d-md-block">
                  <button class="btn btn-white dropdown-toggle" type="button" id="sortPriceBtn" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="me-3 fa-solid fa-sort"></i>Price: Low to high
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="sortPriceBtn">
                    <li><a class="dropdown-item" href="#">Price: High to low</a></li>
  
                  </ul>
                </div>
  
                <div class="dropdown d-md-none w-100">
                  <button class="btn btn-outline-primary w-100 dropdown-toggle" type="button" id="sortPriceBtn"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="me-3 fa-solid fa-sort"></i>Price: Low to high
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="sortPriceBtn">
                    <li><a class="dropdown-item" href="#">Price: High to low</a></li>
  
                  </ul>
                </div>
              </div>
              <hr class="d-md-none">
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3 gy-md-5 gx-md-3">
  
                <a href="{{route('asset_created')}}" class="col grid-item">
                  <div class="ratio ratio-3x2 mb-2">
                    <img
                      src="https://images.unsplash.com/photo-1602532305019-3dbbd482dae9?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735"
                      alt="">
                  </div>
  
                  <h5 class="mb-1">Splish splash abstract art</h5>
                  <p class="desc">Creator: You</p>
                  <p class="desc">Created on 22 Feb 2022</p>
  
                </a>
  
                <a href="{{route('asset_created')}}" class="col grid-item">
                  <div class="ratio ratio-3x2 mb-2">
                    <img
                      src="https://img.wattpad.com/3c23f40a4543395e92547a84b58e823e7d8258fe/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f6a4c47575065704e4666425234413d3d2d33362e313439643236376332633936303431313933393235343037393534312e6a7067?s=fit&w=720&h=720"
                      alt="">
                  </div>
  
                  <h5 class="mb-1">The little girl match</h5>
                  <p class="desc">Creator: You</p>
                  <p class="desc">Created on 19 Feb 2022</p>
  
                </a>
  
              </div>
            </div>
          </div>
        </div>
  
        <div class="tab-pane fade" id="collections" role="tabpanel" aria-labelledby="collections-tab">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-3 gy-md-5 gx-md-3">
            <div class="col collection-item grid-item">
              <div class=" btn btn-link btn-outline-primary btn-create" data-bs-toggle="modal"
                data-bs-target="#editCollectionModal">
                <i class="fa-solid fa-circle-plus mb-md-3 me-2 me-md-0"></i>
                Create new collection
              </div>
            </div>
            <a href="{{route('collection')}}" class="col collection-item grid-item">
              <div class="ratio ratio-3x2">
                <img
                  src="https://images.unsplash.com/photo-1511909938134-66234e1aa5c9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                  alt="">
              </div>
              <div class="collection-overlay">
                <div class="m-auto">
                  <h5>The Abstract Collection</h5>
                  <p class="mt-1">by you</p>
                </div>
                <p class="item-amount">1 item</p>
              </div>
            </a>
  
            <a href="{{route('collection')}}" class="col collection-item grid-item">
              <div class="ratio ratio-3x2">
                <img
                  src="https://images.unsplash.com/photo-1504573801800-9699d9a43182?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1401&q=80"
                  alt="">
              </div>
  
              <div class="collection-overlay">
                <div class="m-auto">
                  <h5>The Emo Collection</h5>
                  <p class="mt-1">by Emotality</p>
                </div>
                <p class="item-amount">22 items</p>
              </div>
            </a>
  
          </div>
        </div>
  
        <div class="tab-pane fade" id="favourite" role="tabpanel" aria-labelledby="created-tab">
          <div class="row gx-md-5">
            <div class="col-12 col-lg-3">
              <div class="accordion accordion-flush" id="filterbar">
  
                <div class="accordion-item">
                  <div class="accordion-header" id="filterbarHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#category" aria-expanded="true" aria-controls="category">
                      <i class="fa-solid fa-boxes-stacked fa-fw me-3"></i>
                      <h5 class="">Categories</h5>
                      <i class="ms-auto fa-solid rotate-icon fa-caret-down"></i>
  
                    </button>
                  </div>
                  <div id="category" class="accordion-collapse collapse" aria-labelledby="filterbarHeader">
                    <div class="accordion-body mt-2">
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="photoCheckbox">
                        <label class="form-check-label" for="photoCheckbox">
                          Photography
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="artCheckbox">
                        <label class="form-check-label" for="artCheckbox">
                          Art
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="clothCheckbox">
                        <label class="form-check-label" for="clothCheckbox">
                          Clothing
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="clothCheckbox">
                        <label class="form-check-label" for="clothCheckbox">
                          Accessories
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shoesCheckbox">
                        <label class="form-check-label" for="shoesCheckbox">
                          Shoes
                        </label>
                      </div>
  
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="bagCheckbox">
                        <label class="form-check-label" for="bagCheckbox">
                          Bag
                        </label>
                      </div>
  
                    </div>
                  </div>
  
                </div>
  
                <div class="accordion-item">
                  <div class="accordion-header" id="filterbarHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#priceRange" aria-expanded="true" aria-controls="category">
                      <i class="fa-solid fa-dollar-sign fa-fw me-3"></i>
                      <h5 class="">Price range</h5>
                      <i class="ms-auto fa-solid rotate-icon fa-caret-down"></i>
  
                    </button>
                  </div>
                  <div id="priceRange" class="accordion-collapse collapse" aria-labelledby="filterbarHeader">
                    <div class="accordion-body mt-2">
  
                      <div class="row row-cols-1 gy-2">
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text">RM</span>
                            <input type="text" class="form-control prefix-icon" placeholder="Min" aria-label="Min">
  
                          </div>
                        </div>
  
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text">RM</span>
                            <input type="text" class="form-control prefix-icon" placeholder="Max" aria-label="Max">
  
                          </div>
                        </div>
  
                        <div class="col">
                          <button class="mt-3 w-100 btn btn-outline-primary">Apply</button>
                        </div>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>
            </div>
  
            <div class="col-12 col-lg-9">
              <div class="d-flex justify-content-between align-items-center mb-3">
  
                <div class="ms-auto dropdown d-none d-md-block">
                  <button class="btn btn-white dropdown-toggle" type="button" id="sortPriceBtn" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="me-3 fa-solid fa-sort"></i>Price: Low to high
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="sortPriceBtn">
                    <li><a class="dropdown-item" href="#">Price: High to low</a></li>
  
                  </ul>
                </div>
  
                <div class="dropdown d-md-none w-100">
                  <button class="btn btn-outline-primary w-100 dropdown-toggle" type="button" id="sortPriceBtn"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="me-3 fa-solid fa-sort"></i>Price: Low to high
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="sortPriceBtn">
                    <li><a class="dropdown-item" href="#">Price: High to low</a></li>
  
                  </ul>
                </div>
              </div>
              <hr class="d-md-none">
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3 gy-md-5 gx-md-3">
  
                <div class="col grid-item">
                  <a href="">
                    <div class="ratio ratio-3x2 mb-2">
                      <img
                        src="https://images.unsplash.com/photo-1602532305019-3dbbd482dae9?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735"
                        alt="">
                    </div>
  
                    <h5 class="mb-1">Splish splash abstract art</h5>
                    <p class="desc">Creator: You</p>
                    <p class="desc">Stock remaining: 2 / 4</p>
                  </a>
                  <div class="d-flex justify-content-between">
                    <h5 class="price text-primary">RM2,000</h5>
                    <i class="fa-solid fa-heart text-primary"></i>
                  </div>
                </div>
  
                <div class="col grid-item">
                  <a href="">
                    <div class="ratio ratio-3x2 mb-2">
                      <img
                        src="https://img.wattpad.com/3c23f40a4543395e92547a84b58e823e7d8258fe/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f6a4c47575065704e4666425234413d3d2d33362e313439643236376332633936303431313933393235343037393534312e6a7067?s=fit&w=720&h=720"
                        alt="">
                    </div>
  
                    <h5 class="mb-1">The little girl match</h5>
                    <p class="desc">Creator: You</p>
                    <p class="desc">Stock remaining: 1 / 4</p>
                  </a>
                  <div class="d-flex justify-content-between">
                    <h5 class="price text-primary">RM4,000</h5>
                    <i class="fa-solid fa-heart text-primary"></i>
                  </div>
  
                </div>
  
              </div>
            </div>
          </div>
        </div>
  
        <div class="tab-pane fade" id="listedMarketplace" role="tabpanel" aria-labelledby="created-tab">
          <ul class="nav nav-tabs" id="marketTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="active-tab" data-bs-toggle="tab" data-bs-target="#active" type="button"
                role="tab" aria-controls="home" aria-selected="true">Active listing</button><span
                class="underline"></span>
  
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button"
                role="tab" aria-controls="profile" aria-selected="false">History</button><span class="underline"></span>
            </li>
  
          </ul>
          <div class="tab-content my-4" id="marketTabContent">
  
            <div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="owned-tab">
              <div class="table-responsive">
                <table class="table align-middle">
                  <thead>
                    <tr>
                      <th scope="col">Item</th>
                      <th scope="col"></th>
                      <th scope="col">Date Listed</th>
                      <th scope="col">Price</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
  
                      <td scope="row">
                        <a href="{{route('asset_listed')}}" class="stretched-link"></a>
                        <div class="ratio ratio-3x2"><img
                            src="https://images.unsplash.com/photo-1654518999181-98bc88eb7ad1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                            alt=""></div>
                      </td>
                      <td>
                        <h5 class="truncate">Breakfast On Tables</h5>
                        <p class="desc truncate">Creator: Rordon Gamsey</p>
                      </td>
                      <td>11 May 2022</td>
                      <td>RM 245</td>
                      <td><button class="btn btn-outline-primary">Cancel Listing</button></td>
                      </a>
                    </tr>
                    <tr>
                      <td scope="row"> <a href="{{route('asset_listed')}}" class="stretched-link"></a>
                        <div class="ratio ratio-3x2"><img
                            src="https://images.unsplash.com/photo-1654447398793-da55107aa822?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                            alt=""></div>
                      </td>
                      <td>
                        <h5 class="truncate">Vroom vroom</h5>
                        <p class="desc truncate">Creator: you</p>
                      </td>
                      <td>22 February 2022</td>
                      <td>RM 1,292</td>
                      <td><button class="btn btn-outline-primary">Cancel Listing</button></td>
                    </tr>
                    <tr>
                      <td scope="row"> <a href="{{route('asset_listed')}}" class="stretched-link"></a>
                        <div class="ratio ratio-3x2"><img
                            src="https://images.unsplash.com/photo-1654465160932-5864b78bdd2e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
                            alt=""></div>
                      </td>
                      <td>
                        <h5 class="truncate">Darude Sandstorm</h5>
                        <p class="desc truncate">Creator: Darude</p>
                      </td>
                      <td>1 April 2021</td>
                      <td>RM 88</td>
                      <td><button class="btn btn-outline-primary">Cancel Listing</button>
                      </td>
                    </tr>
  
                    <tr>
                      <td scope="row">   <a href="{{route('asset_listed')}}" class="stretched-link"></a>
                        <div class="ratio ratio-3x2"><img
                            src="https://images.unsplash.com/photo-1591497108596-436c1a1a5c8e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            alt=""></div>
                      </td>
                      <td>
                        <h5 class="truncate">Big Sad Accident</h5>
                        <p class="desc truncate">Creator:Ros Bobs</p>
                      </td>
                      <td>22 December 2022</td>
                      <td>RM 3,333</td>
                      <td><button class="btn btn-outline-primary">Cancel Listing</button></td>
                    </tr>
  
                  </tbody>
                </table>
              </div>
            </div>
  
            <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="created-tab">
              <div class="table-responsive">
                <table class="table align-middle">
                  <thead>
                    <tr>
                      <th scope="col">Item</th>
                      <th scope="col"></th>
                      <th scope="col">Date Listed</th>
                      <th scope="col">Status</th>
                      <th scope="col">Buyer</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row" class="">
                        <div class="ratio ratio-3x2"><img
                            src="data:image/jpeg;base64,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"
                            alt=""></div>
                      </td>
                      <td>
                        <h5 class="truncate">Avengers: Low budget</h5>
                        <p class="desc truncate">Creator: Shovel</p>
                      </td>
                      <td>6 March 2022</td>
                      <td>Canceled on 1 June 2022</td>
                      <td></td>
                      <td>RM 245</td>
                    </tr>
  
                    <tr>
                      <td scope="row" class="">
                        <div class="ratio ratio-3x2"><img
                            src="https://images.unsplash.com/photo-1611260507265-97f990094080?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1174&q=80"
                            alt=""></div>
                      </td>
                      <td>
                        <h5 class="truncate">Legoes</h5>
                        <p class="desc truncate">Creator: Gole</p>
                      </td>
                      <td>11 June 2022</td>
                      <td>Sold on 2 January 2022</td>
                      <td>Kanak</td>
                      <td>RM 9,744</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
  
          </div>
        </div>
  
        <div class="tab-pane fade" id="pendingPayment" role="tabpanel" aria-labelledby="pendingPayment-tab">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-3 gy-md-5 gx-md-3">
  
            <div class="col grid-item">
              <div class="ratio ratio-3x2 mb-2">
                <img
                  src="https://images.unsplash.com/photo-1652162539309-c96b2694f02b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1355&q=80"
                  alt="">
                <div class="collection-overlay">
                  <div class="d-flex flex-column m-auto">
                    <a href="" class="btn btn-sm mb-2 btn-primary">Pay now</a>
                    <a href="" class="btn btn-sm btn-white">Remove purchase</a>
                  </div>
                </div>
              </div>
  
              <h5 class="mb-1">Infinive</h5>
              <p class="desc">Pay within 88hours 88seconds</p>
              <p class="price text-primary">RM 100</p>
  
            </div>
  
            <div class="col grid-item">
              <div class="ratio ratio-3x2 mb-2">
                <img src="https://img-9gag-fun.9cache.com/photo/aBYWwYx_460s.jpg" alt="">
                <div class="collection-overlay">
                  <div class="d-flex flex-column m-auto">
                    <a href="" class="btn btn-sm mb-2 btn-primary">Pay now</a>
                    <a href="" class="btn btn-sm btn-white">Remove purchase</a>
                  </div>
                </div>
              </div>
              <h5 class="mb-1">Iron Man: Uncivilized War</h5>
              <p class="desc">Pay within 24hours 1seconds</p>
              <p class="price text-primary">RM 200</p>
  
  
            </div>
  
          </div>
        </div>
      </div>
      </form>
    </div>
  
    <div class="offcanvas offcanvas-end" tabindex="-1" id="ownedFilter" aria-labelledby="ownedFilterLabel">
      <div class="offcanvas-header">
        <h4 class="offcanvas-title" id="ownedFilterLabel">Filter</h4>
        <button type="button" class="btn btn-close btn-icon" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fas fa-times fa-fw"></i>
        </button>
      </div>
      <div class="offcanvas-body">
        <!-- <div class="d-flex justify-content-between align-items-center mb-3"> -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Show Digital Assets created by you </label>
        </div>
        <hr>
  
        <!-- </div> -->
  
        <div class="accordion accordion-flush" id="filterbar">
  
  
  
          <div class="accordion-item">
            <div class="accordion-header" id="filterbarHeader">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#category" aria-expanded="true" aria-controls="category">
                <i class="fa-solid fa-boxes-stacked fa-fw me-3"></i>
                <h5 class="">Categories</h5>
                <i class="ms-auto fa-solid rotate-icon fa-caret-down"></i>
  
              </button>
            </div>
            <div id="category" class="accordion-collapse collapse" aria-labelledby="filterbarHeader">
              <div class="accordion-body mt-2">
  
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="photoCheckbox">
                  <label class="form-check-label" for="photoCheckbox">
                    Photography
                  </label>
                </div>
  
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="artCheckbox">
                  <label class="form-check-label" for="artCheckbox">
                    Art
                  </label>
                </div>
  
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="clothCheckbox">
                  <label class="form-check-label" for="clothCheckbox">
                    Clothing
                  </label>
                </div>
  
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="clothCheckbox">
                  <label class="form-check-label" for="clothCheckbox">
                    Accessories
                  </label>
                </div>
  
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="shoesCheckbox">
                  <label class="form-check-label" for="shoesCheckbox">
                    Shoes
                  </label>
                </div>
  
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="bagCheckbox">
                  <label class="form-check-label" for="bagCheckbox">
                    Bag
                  </label>
                </div>
  
              </div>
            </div>
  
          </div>
  
          <div class="accordion-item">
            <div class="accordion-header" id="filterbarHeader">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#priceRange" aria-expanded="true" aria-controls="category">
                <i class="fa-solid fa-dollar-sign fa-fw me-3"></i>
                <h5 class="">Price range</h5>
                <i class="ms-auto fa-solid rotate-icon fa-caret-down"></i>
  
              </button>
            </div>
            <div id="priceRange" class="accordion-collapse collapse" aria-labelledby="filterbarHeader">
              <div class="accordion-body mt-2">
  
                <div class="row row-cols-1 gy-2">
                  <div class="col">
                    <div class="input-group">
                      <span class="input-group-text">RM</span>
                      <input type="text" class="form-control prefix-icon" placeholder="Min" aria-label="Min">
  
                    </div>
                  </div>
  
                  <div class="col">
                    <div class="input-group">
                      <span class="input-group-text">RM</span>
                      <input type="text" class="form-control prefix-icon" placeholder="Max" aria-label="Max">
  
                    </div>
                  </div>
  
                  <div class="col">
                    <button class="mt-3 w-100 btn btn-outline-primary">Apply</button>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
  
  
  
      </div>
    </div>
  
    <!-- add collection modal -->
    <div class="modal fade" id="editCollectionModal" tabindex="-1" aria-labelledby="editCollectionModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editCollectionModalLabel">Create New Collection</h5>
            <button type="button" class="btn-close ms-auto mb-auto " data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h5>Upload Image</h5>
            <p class="mb-4">This image will be your collection banner and is public to everyone.
              <br><br>
              Maximum file size allowed: 100mb
              Format supported: JPG, PNG, WEBP, GIF
            </p>
  
  
  
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
              <label for="assetDescription" class="form-label">Description</label>
              <textarea class="form-control form-control-lg" id="assetDescription" rows="3"></textarea>
            </div>
  
            <div class="mb-4">
              <label for="collectionName" class="form-label">Collection Link</label>
              <div class="input-group">
                <span class="input-group-text">virtural.com/collections/</span>
                <input type="text" class="form-control form-control-lg prefix-icon" placeholder="a-good-link"
                  aria-label="Min">
              </div>
            </div>
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
   


@endsection