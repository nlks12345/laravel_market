@extends('layouts.core')
@extends('layouts.navbar')
@section('content')

  <link rel="stylesheet" href="{{ asset('css/index.css')}}">
  <link rel="stylesheet" href="{{ asset('css/collection-style.css')}}">


  <div class="container py-3 py-md-5 d-flex flex-column">
    <h4 class="display-body text-md-center">Frequently Asked Questions</h4>
    <form action="{{ route('display_table_data') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="input-group my-4 mx-auto w-md-50">
        <input type="text" value="get_faq_table" name="action" hidden>
        <input type="text" class="form-control form-control-lg suffix-icon" placeholder="Search" aria-label="Search">
        <span class="input-group-text"><i class="fas fa-search"></i><span>
      </div>
      <div>
        <button class="btn btn-primary ms-auto" type="submit">Display Table</button>
      </div>
    </form>
    <form action="{{ route('post_data') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div>
      <input type="text" value="post_api" name="action" hidden>  
        <button class="btn btn-primary ms-auto" type="submit">Post API</button>
      </div>
    </form>
    <form action="" method="POST" enctype="multipart/form-data">
      @csrf
      <div>
      <input type="text" value="post_api" name="action" hidden>  
        <button class="btn btn-primary ms-auto" type="button" onclick="getProfile()">Test API</button>
      </div>
    </form>
    @if(!empty($result))
    <div class="table-responsive">
      <table class="table table-striped table-dark">
        <thead class="table-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($result as $results)
          <tr>
            <th scope="row">{{$count++}}</th>
            <td>{{$results->name}}</td>
            <td>{{$results->email}}</td>
            <td>{{$results->status}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @endif
    {{-- <div class="accordion my-4" id="accordionFaq">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h5>Can i export my digital asset to another platform?</h5><i
              class="ms-auto text-primary fa-solid fa-angle-down rotate-icon"></i>
          </button>

        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
          data-bs-parent="#accordionFaq">
          <div class="accordion-body">
            It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each
            element. These classes control the overall appearance, as well as the showing and hiding via CSS
            transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth
            noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does
            limit overflow.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <h5>How to purchase Digital Assets?</h5><i
              class="ms-auto text-primary fa-solid fa-angle-down rotate-icon"></i>
          </button>

        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-bs-parent="#accordionFaq">
          <div class="accordion-body">
            "I am here because I want some more Twitter followers," Luke bellowed, in a controlling tone. He slammed his
            fist against John's chest, with the force of 451 frogs. "I frigging love you, John Jolie."
          </div>
        </div>
      </div>


      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <h5>How to sell my nft on virtural martketplace?</h5><i
              class="ms-auto text-primary fa-solid fa-angle-down rotate-icon"></i>
          </button>

        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
          data-bs-parent="#accordionFaq">
          <div class="accordion-body">
            "I am here because I want some more Twitter followers," Luke bellowed, in a controlling tone. He slammed his
            fist against John's chest, with the force of 451 frogs. "I frigging love you, John Jolie."
          </div>
        </div>
      </div>


      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <h5>Why can’t i use my crypto wallet here?</h5><i
              class="ms-auto text-primary fa-solid fa-angle-down rotate-icon"></i>
          </button>

        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
          data-bs-parent="#accordionFaq">
          <div class="accordion-body">
            "I am here because I want some more Twitter followers," Luke bellowed, in a controlling tone. He slammed his
            fist against John's chest, with the force of 451 frogs. "I frigging love you, John Jolie."
          </div>
        </div>
      </div>

    </div> --}}
  </div>

@endsection