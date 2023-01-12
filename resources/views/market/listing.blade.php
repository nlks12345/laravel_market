@extends('layouts.core')
@extends('layouts.navbar')
@section('content')


  <link rel="stylesheet" href="{{ asset('css/marketplace.css')}}">



  <div class="container py-3 py-md-5 d-flex flex-column">
    <h4 class="display-body text-center mb-2">Explore The Marketplace</h4>
    <p class="mb-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Fugiat consequuntur iure
      ipsa cum error consectetur
      voluptas, nulla odio assumenda neque?</p>
    <div class="row row-cols-1 row-cols-md-2 gy-2 gy-md-0 align-self-md-center">
      <div class="col">
        <a href="#buy-section" id="btn-buy" class="btn btn-outline-primary btn-link"><i
            class="fa-solid fa-cart-shopping me-3"></i>Buy
          Asset</a>
      </div>
      <div class="col">
        <a href="{{ route('trade_option')}}" id="btn-sell" class="btn btn-outline-primary btn-link"><i class="fa-solid fa-coins me-3"></i>Sell
          Asset</a>
      </div>
    </div>
    
    <div class="mx-auto input-group my-3 my-md-4">
      <input type="text" class="form-control form-control-lg suffix-icon" placeholder="Search" aria-label="Search">
      <span class="input-group-text"><i class="fas fa-search"></i><span>
    </div>

  </div>

  <div id="buy-section" class="container py-3 py-md-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab"
          aria-controls="all" aria-selected="true">All</button>
        <span class="underline"></span>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="virtural-tab" data-bs-toggle="tab" data-bs-target="#virtural" type="button"
          role="tab" aria-controls="virtural" aria-selected="false">Virtural</button>
        <span class="underline"></span>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="verified-tab" data-bs-toggle="tab" data-bs-target="#verified" type="button"
          role="tab" aria-controls="verified" aria-selected="false">Verified Merchant</button>
        <span class="underline"></span>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="community-tab" data-bs-toggle="tab" data-bs-target="#community" type="button"
          role="tab" aria-controls="community" aria-selected="false">Community</button>
        <span class="underline"></span>
      </li>
    </ul>

    <div class="mt-3 tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">

        <div class="row gx-md-5">
          <div class="col-12 col-lg-3">
            <div class="accordion accordion-flush" id="filterbar">

              <div class="accordion-item">
                <div class="accordion-header" id="filterbarHeader">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collection" aria-expanded="true" aria-controls="collection">
                    <i class="fa-solid fa-folder-open fa-fw me-3"></i>
                    <h5 class="">Collections</h5>
                    <i class="ms-auto fa-solid rotate-icon fa-caret-down"></i>

                  </button>
                </div>
                <div id="collection" class="accordion-collapse collapse" aria-labelledby="filterbarHeader">
                  <div class="accordion-body mt-2">

                    <div class="input-group mb-3">
                      <input type="text" class="form-control suffix-icon" placeholder="Search" aria-label="Search">
                      <span class="input-group-text"><i class="fas fa-search"></i><span>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="summerCheckbox">
                      <label class="form-check-label" for="summerCheckbox">
                        Summer series
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="winterCheckbox">
                      <label class="form-check-label" for="winterCheckbox">
                        Winter series
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="springCheckbox">
                      <label class="form-check-label" for="springCheckbox">
                        Spring series
                      </label>
                    </div>
                  </div>
                </div>

              </div>

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
            <div class="d-flex justify-content-end mb-3">
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
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3 gy-md-5 gx-md-3">
              <a href="{{route('view_asset')}}" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1643101452019-bc00c9bba76b?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074"
                    alt="">
                </div>

                <h5 class="mb-1">Flimsy spaghetti</h5>
                <p class="desc mb-1">Creator: Feed Richards</p>
                <p class="desc mb-1">Stock remaining: 1 / 2</p>
                <p class="price">RM 888,888</p>
              </a>

              <a href="{{route('view_asset')}}" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1580136579312-94651dfd596d?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1317"
                    alt="">
                </div>

                <h5 class="mb-1">That doesn't seem fair</h5>
                <p class="desc mb-1">Creator: Scarlet Snitch</p>
                <p class="desc mb-1">Stock remaining: 1 / 1</p>
                <p class="price">RM 120,999</p>
              </a>

              <a href="{{route('view_asset')}}" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1602532305019-3dbbd482dae9?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735"
                    alt="">
                </div>

                <h5 class="mb-1">Splish splash abstract art</h5>
                <p class="desc mb-1">Creator: I can do this all day</p>
                <p class="desc mb-1">Stock remaining: 1 / 1</p>
                <p class="price">RM 1,222</p>
              </a>

              <a href="{{route('view_asset')}}" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074"
                    alt="">
                </div>

                <h5 class="mb-1">The little girl match</h5>
                <p class="desc mb-1">Creator: Cap Bagus</p>
                <p class="desc mb-1">Stock remaining: 10 / 10</p>
                <p class="price">RM 0.25</p>
              </a>

              <a href="{{route('view_asset')}}" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1579783900882-c0d3dad7b119?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=708"
                    alt="">
                </div>

                <h5 class="mb-1">Ring and roses</h5>
                <p class="desc mb-1">Creator: ffff</p>
                <p class="desc mb-1">Stock remaining: 40 / 40</p>
                <p class="price">RM 4,000</p>
              </a>

              <a href="{{route('view_asset')}}" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1604077198996-4eb67c32f6a7?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687"
                    alt="">
                </div>

                <h5 class="mb-1">BKB Color Hole</h5>
                <p class="desc mb-1">Creator: Counter Initiation</p>
                <p class="desc mb-1">Stock remaining: 1 / 1</p>
                <p class="price">RM 2,123</p>
              </a>

              <a href="{{route('view_asset')}}" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1618005198919-d3d4b5a92ead?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074"
                    alt="">
                </div>

                <h5 class="mb-1">Wobb wobb wobb</h5>
                <p class="desc mb-1">Creator: michael bubble</p>
                <p class="desc mb-1">Stock remaining: 1 / 272</p>
                <p class="price">RM 523</p>
              </a>

              <a href="{{route('view_asset')}}" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1619946070664-7051e550c16f?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715"
                    alt="">
                </div>

                <h5 class="mb-1">Things just got out of hand</h5>
                <p class="desc mb-1">Creator: Painter Strange</p>
                <p class="desc mb-1">Stock remaining: 2 / 4</p>
                <p class="price">RM 1,222</p>
              </a>

              <a href="{{route('view_asset')}}" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1653256824583-7d907797af36?ixlib=rb-1.2.1&raw_url=true&q=60&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MnwxMDQ3OTQyN3x8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600"
                    alt="">
                </div>

                <h5 class="mb-1">Peace by piece</h5>
                <p class="desc mb-1">Creator: f932j</p>
                <p class="desc mb-1">Stock remaining: 1 /1</p>
                <p class="price">RM 2,000</p>
              </a>
            </div>
          </div>
        </div>

      </div>



      <div class="tab-pane fade" id="virtural" role="tabpanel" aria-labelledby="virtural-tab">
        <div class="row gx-md-5">
          <div class="col-12 col-lg-3">
            <div class="accordion accordion-flush" id="filterbar">

              <div class="accordion-item">
                <div class="accordion-header" id="filterbarHeader">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collection" aria-expanded="true" aria-controls="collection">
                    <i class="fa-solid fa-folder-open fa-fw me-3"></i>
                    <h5 class="">Collections</h5>
                    <i class="ms-auto fa-solid rotate-icon fa-caret-down"></i>

                  </button>
                </div>
                <div id="collection" class="accordion-collapse collapse" aria-labelledby="filterbarHeader">
                  <div class="accordion-body mt-2">

                    <div class="input-group mb-3">
                      <input type="text" class="form-control suffix-icon" placeholder="Search" aria-label="Search">
                      <span class="input-group-text"><i class="fas fa-search"></i><span>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="summerCheckbox">
                      <label class="form-check-label" for="summerCheckbox">
                        Summer series
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="winterCheckbox">
                      <label class="form-check-label" for="winterCheckbox">
                        Winter series
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="springCheckbox">
                      <label class="form-check-label" for="springCheckbox">
                        Spring series
                      </label>
                    </div>
                  </div>
                </div>

              </div>

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
            <div class="d-flex justify-content-end mb-3">
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
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3 gy-md-5 gx-md-3">
              <a href="" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1643101452019-bc00c9bba76b?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074"
                    alt="">
                </div>

                <h5 class="mb-1">Flimsy spaghetti</h5>
                <p class="desc mb-1">Creator: Feed Richards</p>
                <p class="desc mb-1">Stock remaining: 1 / 2</p>
                <p class="price">RM 888,888</p>
              </a>

              <a href="" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1580136579312-94651dfd596d?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1317"
                    alt="">
                </div>

                <h5 class="mb-1">That doesn't seem fair</h5>
                <p class="desc mb-1">Creator: Scarlet Snitch</p>
                <p class="desc mb-1">Stock remaining: 1 / 1</p>
                <p class="price">RM 120,999</p>
              </a>

              <a href="" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1602532305019-3dbbd482dae9?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735"
                    alt="">
                </div>

                <h5 class="mb-1">Splish splash abstract art</h5>
                <p class="desc mb-1">Creator: I can do this all day</p>
                <p class="desc mb-1">Stock remaining: 1 / 1</p>
                <p class="price">RM 1,222</p>
              </a>

              <a href="" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074"
                    alt="">
                </div>

                <h5 class="mb-1">The little girl match</h5>
                <p class="desc mb-1">Creator: Cap Bagus</p>
                <p class="desc mb-1">Stock remaining: 10 / 10</p>
                <p class="price">RM 0.25</p>
              </a>

            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="verified" role="tabpanel" aria-labelledby="verified-tab">
        <div class="row gx-md-5">
          <div class="col-12 col-lg-3">
            <div class="accordion accordion-flush" id="filterbar">

              <div class="accordion-item">
                <div class="accordion-header" id="filterbarHeader">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collection" aria-expanded="true" aria-controls="collection">
                    <i class="fa-solid fa-folder-open fa-fw me-3"></i>
                    <h5 class="">Collections</h5>
                    <i class="ms-auto fa-solid rotate-icon fa-caret-down"></i>

                  </button>
                </div>
                <div id="collection" class="accordion-collapse collapse" aria-labelledby="filterbarHeader">
                  <div class="accordion-body mt-2">

                    <div class="input-group mb-3">
                      <input type="text" class="form-control suffix-icon" placeholder="Search" aria-label="Search">
                      <span class="input-group-text"><i class="fas fa-search"></i><span>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="summerCheckbox">
                      <label class="form-check-label" for="summerCheckbox">
                        Summer series
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="winterCheckbox">
                      <label class="form-check-label" for="winterCheckbox">
                        Winter series
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="springCheckbox">
                      <label class="form-check-label" for="springCheckbox">
                        Spring series
                      </label>
                    </div>
                  </div>
                </div>

              </div>

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
            <div class="d-flex justify-content-end mb-3">
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
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3 gy-md-5 gx-md-3">
              <a href="" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1652129950700-8517fe5d068d?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764"
                    alt="">
                </div>

                <h5 class="mb-1">Hugzzzz</h5>
                <p class="desc mb-1">Creator: 94jf3</p>
                <p class="desc mb-1">Stock remaining: 1 / 1</p>
                <p class="price">RM 2,111</p>
              </a>

            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="community" role="tabpanel" aria-labelledby="community-tab">
        <div class="row gx-md-5">
          <div class="col-12 col-lg-3">
            <div class="accordion accordion-flush" id="filterbar">

              <div class="accordion-item">
                <div class="accordion-header" id="filterbarHeader">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collection" aria-expanded="true" aria-controls="collection">
                    <i class="fa-solid fa-folder-open fa-fw me-3"></i>
                    <h5 class="">Collections</h5>
                    <i class="ms-auto fa-solid rotate-icon fa-caret-down"></i>

                  </button>
                </div>
                <div id="collection" class="accordion-collapse collapse" aria-labelledby="filterbarHeader">
                  <div class="accordion-body mt-2">

                    <div class="input-group mb-3">
                      <input type="text" class="form-control suffix-icon" placeholder="Search" aria-label="Search">
                      <span class="input-group-text"><i class="fas fa-search"></i><span>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="summerCheckbox">
                      <label class="form-check-label" for="summerCheckbox">
                        Summer series
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="winterCheckbox">
                      <label class="form-check-label" for="winterCheckbox">
                        Winter series
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="springCheckbox">
                      <label class="form-check-label" for="springCheckbox">
                        Spring series
                      </label>
                    </div>
                  </div>
                </div>

              </div>

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
            <div class="d-flex justify-content-end mb-3">
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
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3 gy-md-5 gx-md-3">
              <a href="" class="col grid-item">
                <div class="ratio ratio-3x2 mb-2">
                  <img
                    src="https://images.unsplash.com/photo-1647244461148-f3053e52cbe7?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764"
                    alt="">
                </div>

                <h5 class="mb-1">Green Cape</h5>
                <p class="desc mb-1">Creator: gwf21</p>
                <p class="desc mb-1">Stock remaining: 1 / 1</p>
                <p class="price">RM 2,211</p>
              </a>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


@endsection