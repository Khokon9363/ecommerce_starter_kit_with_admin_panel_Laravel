@extends('ecommerce.master')
@section('title')
   Update
@endsection
@section('content')

<div class="signinpanel">
    <div class="row">
		<div class="col-6 m-auto">
			<form method="POST" action="{{ route('password.update') }}">
            @csrf
				<h4 class="nomargin">Update Password</h4>
				<p class="mt5 mb20">Update Your Password carefully.</p>
				<input type="email" class="form-control uname" name="email" value="{{ $email ?? old('email') }}" placeholder="Your Email Address" />
				@error('email')
					<span class="invalid-feedback text-danger" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<input type="password" name="password" class="form-control pword" placeholder="Password" />
				@error('password')
					<span class="invalid-feedback text-danger" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<input type="password" class="form-control pword" name="password_confirmation" placeholder="Confirm Password" />
				<input type="hidden" name="token" value="{{ $token }}">
				<button type="submit" class="btn btn-success btn-block">Update Your Password</button>
			</form>
		</div>
	</div>
</div>

@endsection