@extends('ecommerce.master')
@section('title')
   Verify
@endsection
@section('content')

<div class="signinpanel">
    <div class="row">
		<div class="col-6 m-auto">
				<h4 class="nomargin">Verify Your Email Address</h4>
				@if (session('resent'))
					<div class="alert alert-success" role="alert">
						We've has been send a fresh verification link to your email address.
					</div>
				@endif
				Before proceeding, please check your email for a verification link.
				If you did not receive the email, <br/><br/>
				<form method="POST" action="{{ route('verification.resend') }}">
					@csrf
					<button type="submit" class="btn btn-success btn-block">Resend Link</button>
				</form>
		</div>
	</div>
</div>

@endsection