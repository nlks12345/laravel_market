@extends('layouts.core')
@extends('layouts.navbar')
@section('content')

  <link rel="stylesheet" href="{{ asset('css/marketplace.css')}}">

  
    <div class="container py-3 py-md-5 d-flex flex-column">
      <h4 class="display-body mx-auto">Select Asset To Sell</h4>
      <div class="dropdown mx-auto ms-md-auto mb-3">
        <button class=" btn btn-white dropdown-toggle" type="button" id="sortPriceBtn" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="me-3 fa-solid fa-sort"></i>Price: Low to high
        </button>
        <ul class="dropdown-menu" aria-labelledby="sortPriceBtn">
          <li><a class="dropdown-item" href="#">Price: High to low</a></li>
  
        </ul>
      </div>
  
      <div class="overflow-hidden">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-4">
  
          <a href="{{route('trade_selected')}}" class="col grid-item">
            <div class="ratio ratio-3x2 mb-2">
              <img
                src="https://images.unsplash.com/photo-1643101452019-bc00c9bba76b?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074"
                alt="">
            </div>
  
            <h5 class="mb-1">Flimsy spaghetti</h5>
            <p class="desc mb-1">Creator: Feed Richards</p>
            <p class="desc">Purchased at RM 900</p>
          </a>
  
          <a href="{{route('trade_selected')}}" class="col grid-item">
            <div class="ratio ratio-3x2 mb-2">
              <img
                src="https://images.unsplash.com/photo-1580136579312-94651dfd596d?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1317"
                alt="">
            </div>
  
            <h5 class="mb-1">That doesn't seem fair</h5>
            <p class="desc mb-1">Creator: Scarlet Snitch</p>
            <p class="desc">Purchased at RM 1,520</p>
          </a>
  
          <a href="{{route('trade_selected')}}" class="col grid-item">
            <div class="ratio ratio-3x2 mb-2">
              <img
                src="https://images.unsplash.com/photo-1602532305019-3dbbd482dae9?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735"
                alt="">
            </div>
  
            <h5 class="mb-1">Splish splash abstract art</h5>
            <p class="desc mb-1">Creator: I can do this all day</p>
  
          </a>
  
          <a href="{{route('trade_selected')}}" class="col grid-item">
            <div class="ratio ratio-3x2 mb-2">
              <img
                src="https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074"
                alt="">
            </div>
  
            <h5 class="mb-1">The little girl match</h5>
            <p class="desc mb-1">Creator: Cap Bagus</p>
          </a>
  
          <a href="{{route('trade_selected')}}" class="col grid-item">
            <div class="ratio ratio-3x2 mb-2">
              <img
                src="https://images.unsplash.com/photo-1579783900882-c0d3dad7b119?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=708"
                alt="">
            </div>
  
            <h5 class="mb-1">Ring and roses</h5>
            <p class="desc mb-1">Creator: ffff</p>
            <p class="desc">Purchased at RM 0.25</p>
          </a>
  
          <a href="{{route('trade_selected')}}" class="col grid-item">
            <div class="ratio ratio-3x2 mb-2">
              <img
                src="https://images.unsplash.com/photo-1604077198996-4eb67c32f6a7?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687"
                alt="">
            </div>
  
            <h5 class="mb-1">BKB Color Hole</h5>
            <p class="desc mb-1">Creator: Counter Initiation</p>
          </a>
  
          <a href="{{route('trade_selected')}}" class="col grid-item">
            <div class="ratio ratio-3x2 mb-2">
              <img
                src="https://images.unsplash.com/photo-1618005198919-d3d4b5a92ead?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074"
                alt="">
            </div>
  
            <h5 class="mb-1">Wobb wobb wobb</h5>
            <p class="desc mb-1">Creator: michael bubble</p>
            <div class="desc">Purchased at RM 123,456</div>
          </a>
  
          <a href="{{route('trade_selected')}}" class="col grid-item">
            <div class="ratio ratio-3x2 mb-2">
              <img
                src="https://images.unsplash.com/photo-1619946070664-7051e550c16f?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715"
                alt="">
            </div>
  
            <h5 class="mb-1">Things just got out of hand</h5>
            <p class="desc mb-1">Creator: Painter Strange</p>
            <div class="desc">Purchased at RM 1</div>
          </a>
  
          <a href="{{route('trade_selected')}}" class="col grid-item">
            <div class="ratio ratio-3x2 mb-2">
              <img
                src="https://images.unsplash.com/photo-1653256824583-7d907797af36?ixlib=rb-1.2.1&raw_url=true&q=60&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MnwxMDQ3OTQyN3x8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600"
                alt="">
            </div>
  
            <h5 class="mb-1">Peace by piece</h5>
            <p class="desc mb-1">Creator: f932j</p>
          </a>
        </div>
      </div>
    </div>
  
 
 
@endsection