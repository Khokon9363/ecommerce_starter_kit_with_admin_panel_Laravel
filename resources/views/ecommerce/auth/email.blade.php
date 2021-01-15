@extends('ecommerce.master')
@section('title')
   Reset Password
@endsection
@section('content')

<div class="signinpanel">
    <div class="row">
		<div class="col-6 m-auto">
			<h4 class="nomargin">Reset Password</h4>
			@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
			@endif
			<p class="mt5 mb20">Send a Password Reset link to your email.</p>
			<form method="POST" action="{{ route('password.email') }}">
			@csrf
				<input type="email" class="form-control uname" placeholder="Your email Address" name="email" value="{{ old('email') }}"/><br>
				@error('email')
					<span class="invalid-feedback text-danger" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<p class="mt5 mb20"><a href="{{ url('login') }}"><strong>Go Back</strong></a></p>
				<button type="submit" class="btn btn-success btn-block">Send Password Reset Link</button>
			</form>
		</div>
	</div>
</div>

@endsection