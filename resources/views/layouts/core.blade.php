<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content="Virtural XR Solutions">
  <meta name="description" content="Explore the cutting-edge mixed virtual reality retail software solution.">
  <meta name="keywords" content="Mixed Reality, Virtural, Virtural XR, XR, VR, Virtual Reality, Retail Solution, JUDA">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/58d4a6165b.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700;900&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- custom CSS -->
  <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
  <link rel="stylesheet" href="{{ asset('css/custom-bs5.css')}}">
  <link rel="stylesheet" href="{{ asset('css/custom-bs5.css')}}">
  <link rel="stylesheet" href="{{ asset('css/select-to-sell.css')}}">
  
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>NFT Marketplace</title>
</head>
<body>
  @if(Session::has('email')) 
    <input type="hidden" value="{{Session::get('email')}}" id="user_session_email" name="user_session_email">
  @endif
  @if(Session::has('user_id')) 
  <input type="hidden" value="{{Session::get('user_id')}}" id="user_session_id" name="user_session_email">
  @endif
  @yield('content')

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/common.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/user.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/post.js')}}"></script>

</body>
</html>