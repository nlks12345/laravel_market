<!--Navbar-->
<nav class="navbar navbar-expand-md z-depth-0">

	<ul class="navbar-nav">
		<a class="navbar-brand" href="{{ route('landing')}}">
			<img src="{{ asset('img/virtural-black.svg')}}" alt="virtural-logo" width="80">
		</a>
	</ul>

	<button class="btn d-md-none btn-icon btn-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
		aria-controls="offcanvasExample">
		<i class="fa-solid fa-bars fa-fw"></i>
	</button>

	<div class="collapse navbar-collapse" id="topNav">

		<ul class="ms-auto navbar-nav">
			<li class="nav-item">
				<a class="nav-link btn btn-primary btn-link" href="{{ route('asset_create')}}"><i class="fa-solid fa-circle-plus me-2"></i>Create
					Asset
					<span class="underline"></span>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{ route('listing') }}">Marketplace
					<span class="underline"></span>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{ route('faq')}}">FAQ
					<span class="underline"></span>
				</a>
			</li>
	
			@auth
			<li class="nav-item">
				@if(Session::has('email')) 
					<a class="nav-link" href="{{ route('profile',['email' => Session::get('email')])}}">Profile
						<span class="underline"></span>
					</a>
				@else
					<a class="nav-link" href="{{ route('profile')}}">Profile
						<span class="underline"></span>
					</a>
  				@endif

				{{-- <a class="nav-link" href="" onclick="getProfile();">Profile
					<span class="underline"></span>
				</a> --}}
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('logout')}}">Goodbye
					<span class="underline"></span>
				</a>
			</li>
			@else
			<li class="nav-item">
				<a class="nav-link" href="{{ route('login')}}">Login
					<span class="underline"></span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('register')}}">Sign Up
					<span class="underline"></span>
				</a>
			</li>
			@endauth
		</ul>

	</div>

</nav>
<!--/.Navbar-->

<!-- sidebar -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
	<div class="offcanvas-header">
		<a class="navbar-brand" href="{{ route('landing')}}">
			<img class="black-logo" src="{{ asset('img/virtural-black.svg')}}" height="20" alt="virtural logo">
		</a>
		<button type="button" class="btn btn-close btn-icon" data-bs-dismiss="offcanvas" aria-label="Close">
			<i class="fas fa-times fa-fw"></i>
		</button>
	</div>

	<div class="offcanvas-body">
		<ul class="navbar-nav">

			<li class="nav-item">
				<a class="nav-link" href="{{ route('listing')}}">Marketplace
					<span class="underline"></span>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="faq.html">FAQ
					<span class="underline"></span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="signup.html">Sign Up
					<span class="underline"></span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="login.html">Login
					<span class="underline"></span>
				</a>
			</li>
			<li class="nav-item">
				{{-- <a class="nav-link" href="{{ route('profile')}}">Profile
					<span class="underline"></span>
				</a> --}}
				<a class="nav-link" href="{{ route('profile')}}">Profile
					<span class="underline"></span>
				</a>
			</li>
		</ul>
	</div>
</div>