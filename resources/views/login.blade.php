@extends('layout.main')
@section('container')

<div class="row justify-content-center mt-5">
	<div class="col-lg-5">
		<div class="container text-center mt-3 p-4 bg-white">
			<div class="container text-center mt-3 p-4 bg-white">
				
		@if (session()->has('errorLogin'))
			<div class="alert alert-danger justify-content-center">
				{{ session('errorLogin') }}
			</div>
		@endif

		<main class="form-signin">
			<form action="/login" method="post">
				@csrf
				<h1 class="h3 mb-3 fw-normal text-center">Please Sign In</h1>
				<div class="form-floating">
					<input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email">
					<label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating">
					<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
					<label for="floatingPassword">Password</label>
				</div>
				<button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign In</button>
			</form>
		</main>
	</div>
	</div>
</div>
</div>



@endsection