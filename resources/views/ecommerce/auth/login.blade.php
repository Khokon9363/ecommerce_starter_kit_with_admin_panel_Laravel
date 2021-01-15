@extends('ecommerce.master')
@section('title')
   Login
@endsection
@section('content')

<div class="signinpanel">
    <div class="row">
		<div class="col-6 m-auto">
			<form method="POST" action="{{ route('login') }}">
			@csrf
				<h4 class="nomargin">Sign In</h4>
				<p class="mt5 mb20">Login to access your account.</p>
				<input type="email" autocomplete="email" autofocus class="form-control uname" name="email" placeholder="Email" />
				@error('email')
					<span class="invalid-feedback text-danger" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<input type="password" autocomplete="current-password" class="form-control pword" name="password" placeholder="Password" />
				@error('password')
					<span class="invalid-feedback text-danger" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<br/>
				<a href="{{ url('password/reset') }}"><small>Forgot Your Password?</small></a>
				<p class="mt5 mb20">Not registered yet? <a href="{{ url('register') }}"><strong>Sign Up</strong></a></p>
				<button class="btn btn-info btn-block">Sign In</button>
			</form>
		</div>
	</div>
</div>

@endsection