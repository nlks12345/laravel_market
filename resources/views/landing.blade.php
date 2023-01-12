

@extends('layouts.core')
@extends('layouts.navbar')
@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">


<div class="container py-3 py-md-5">
    <div class="row">
      <div class="col-12 col-lg-7">
        <h3 class="display-title gradient-text">DIGITAL ASSET EXCHANGE</h3>
      </div>
      <div class="col-12 col-lg-5">
        <h4 class="display-body mt-3 mt-lg-0">BUY, OWN, AND SELL<br>DIGITAL ASSET EASILY</h4>
        <P class="my-3 my-md-4">Wanted to get into NFTs but are a little to sceptical about crypto wallet and
          cryptocurrency? That makes the two of us. Using the blockchain technology, we made it possible to trade
          digital assets with real money.
          No crypto wallet, no cryptocurrency, no NFTs, only blockchain.</P>
        <div class="d-flex flex-lg-row flex-column">
          <a href="{{route('listing')}}" class="btn btn-primary-gradient btn-link me-lg-2 w-100">Explore Marketplace</a>
          <a href="{{route('faq')}}" class="btn btn-outline-primary btn-link mt-2 mt-lg-0 ms-lg-2 w-100">Learn how it works</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container py-3 py-md-5 max-height-800">
    <div class="row gx-md-5 h-100">
      <div class="order-last order-md-first col-12 col-md-8">
        <h4 class="display-body">RECEIVE PHYSICAL GOODS WHEN YOU BUY DIGITAL ASSET</h4>
        <p>We require our seller to attach actual physical goods when selling their digital asset. This digital asset
          acts as a proof of ownership of the purchased goods. By doing so, buyers
          can enjoy and appreciate the art in real world better instead of a screen.</p>
        <div class="mt-3 mt-md-5 ratio ratio-21x9">
          <img
            src="https://images.unsplash.com/photo-1536924940846-227afb31e2a5?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1166"
            alt="">
        </div>
      </div>

      <div class="order-first order-md-last col-12 col-md-4 mb-3 mb-md-0">
        <!-- <div class="ratio ratio-3x4"> -->
        <img class="fit-img"
          src="https://images.unsplash.com/photo-1610354650003-e57d0f4ec18f?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735"
          alt="">
        <!-- </div> -->
      </div>
    </div>
  </div>

  <div class="container py-3 py-md-5 d-flex flex-column">
    <h4 class="display-body text-md-center">NO CRYPTO WALLET.<br>NO CRYPTOCURRENCY.<br>JUST DIGITAL ASSET AND REAL
      MONEY.
    </h4>
    <p class="ccc text-md-center mx-md-auto mb-3">We understand the word crypto can be worrying to some. That is why we
      made
      sure this platform has nothing to do with it. Buyers and sellers can both trade their digital assets with real
      money.</p>
    <div class="row row-cols-1 row-cols-md-3 gy-3">
      <div class="col">
        <div class="ratio ratio-3x2 mb-2">
          <img
            src="https://images.unsplash.com/photo-1511044568932-338cba0ad803?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170"
            alt="">
        </div>
        <h5>What Does The Miao Say</h5>
        <p class="mb-1 desc">Moo</p>
        <p class="mb-1 desc">Stock remaining: 1/1</p>
        <h5 class="text-primary">RM 76</h5>
      </div>

      <div class="col">
        <div class="ratio ratio-3x2 mb-2">
          <img
            src="https://images.unsplash.com/photo-1652710042835-9e7b80526eed?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332"
            alt="">
        </div>
        <h5>Bulat bulat</h5>
        <p class="mb-1 desc">Circle circle</p>
        <p class="mb-1 desc">Stock remaining: 1/1</p>
        <h5 class="text-primary">RM 76</h5>
      </div>

      <div class="col">
        <div class="ratio ratio-3x2 mb-2">
          <img
            src="https://images.unsplash.com/photo-1652296665087-8932538830d4?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332"
            alt="">
        </div>
        <h5>Boxy Mc Boxbox</h5>
        <p class="mb-1 desc">Square Cube</p>
        <p class="mb-1 desc">Stock remaining: 1/1</p>
        <h5 class="text-primary">RM 76</h5>
      </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
      <a href="{{route('listing')}}" class="btn-footer btn btn-primary-gradient btn-link">Explore Marketplace</a>
    </div>
  </div>



@endsection