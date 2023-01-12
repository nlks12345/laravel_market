@extends('layouts.core')
@extends('layouts.navbar')
@section('content')

  <link rel="stylesheet" href="{{ asset('css/collection.css')}}">
  <link rel="stylesheet" href="{{ asset('css/collection-style.css')}}">

  <div class="container">

    <div class="row gx-md-5">
      <div class="col-12 col-lg-3 ">
        <h4 class="display-body mb-4">Collection Name Here</h4>
        <div class="d-flex flex-row mb-4">
          <div class="ratio ratio-1x1 ratio-circle profile-pic me-3">
            <img
              src="https://images.unsplash.com/photo-1547619292-8816ee7cdd50?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"
              alt="">
          </div>
          <div class="d-flex flex-column">
            <h5>Created by</h5>
            <h5 class="text-primary">Siowrs</h5>
          </div>
        </div>
        <p class="">Checkboxes can utilize the :indeterminate pseudo class when manually set via JavaScript (there
          is no
          available HTML attribute for specifying it).</p>
        <button class="btn btn-outline-primary my-4 w-100" data-bs-toggle="modal"
          data-bs-target="#editCollectionModal">Edit collection</button>

        <div class="accordion accordion-flush d-none d-md-block" id="filterbar">

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
        <div class="mb-md-0 ratio ratio-3x4 ratio-md-32x9">
          <img
            src="https://images.unsplash.com/photo-1654663477425-acf704a970d7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
            alt="">
          <div class="collection-overlay">
            <div class="stats-wrapper m-auto d-flex flex-column flex-md-row">
              <div class="stat">
                <h4>4</h4>
                <p>Owner(s)</p>
              </div>

              <div class="stat">
                <h4>12</h4>
                <p>Item(s)</p>
              </div>

              <div class="stat">
                <h4>RM 192</h4>
                <p>Floor price</p>
              </div>

              <div class="stat">
                <h4>RM 888,888</h4>
                <p>Total sale volume</p>
              </div>
            </div>
          </div>
        </div>
        <hr class="d-md-none">
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
        <div class="mt-4 d-none d-md-flex justify-content-between align-items-center mb-3">
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
                <img src="https://mymodernmet.com/wp/wp-content/uploads/archive/MLlCE8ZnRBF1DtvKqb9r_1082119684.jpeg"
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

  <!-- edit collection modal -->
  <div class="modal fade" id="editCollectionModal" tabindex="-1" aria-labelledby="editCollectionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editCollectionModalLabel">Edit Collection</h5>
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