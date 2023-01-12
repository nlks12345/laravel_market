@extends('layouts.core')
@extends('layouts.navbar')
@section('content')

  <link rel="stylesheet" href="{{ asset('css/select-to-sell.css')}}">


  <div class="container py-3 py-md-5 d-flex flex-column align-items-center">
    <h4 class="display-body text-center">Sell your asset</h4>
    <p class="text-center">Select from inventory or create a new asset</p>
    <div class="mt-4 d-flex flex-column flex-md-row">
      <a href="{{ route('trade_inventory')}}"
        class="mb-3 mb-md-0 me-md-2 btn-action d-flex flex-column align-items-center justify-content-center btn btn-outline-primary btn-link">
        <i class="fa-solid fa-box-open"></i>
        Select from inventory
      </a>
      <a href="{{ route('trade_new')}}"
        class="ms-md-2 btn-action d-flex flex-column align-items-center justify-content-center btn btn-outline-primary btn-link">
        <i class="fa-solid fa-circle-plus"></i>
        Create a new asset
      </a>

    </div>
  </div>

@endsection