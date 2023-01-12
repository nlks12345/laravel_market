
@extends('layouts.core')
@extends('layouts.navbar')
<link rel="stylesheet" href="{{ asset('css/404error-virtural2.css') }}">
@section('content')

<div class="container offset-nav-height text-center d-flex justify-content-center flex-column">
    <i class="fa-3x text-danger mb-3 fas fa-times-circle"></i>
    <h1 class="text-danger">Account Verification Issue</h1>
    <p class="mt-2 mb-4">Please Check Your Inbox to Verify Email.</p>
    <p class="mt-2 mb-4">You Be Logged Out in 5 Seconds .{{ session('user')}}</p>

@endsection
<script type="text/javascript">
    setTimeout(() => {
        window.location = 'logout';
    }, 5000);
</script>
