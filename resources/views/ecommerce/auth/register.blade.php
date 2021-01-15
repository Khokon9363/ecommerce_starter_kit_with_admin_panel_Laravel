@extends('ecommerce.master')
@section('title')
   Register
@endsection
@section('content')

<div class="signuppanel">
    <div class="row">
    <div class="col-6 m-auto">

        <form method="POST" action="{{ route('register') }}">
        @csrf
            <h3 class="nomargin">Sign Up</h3>
            <p class="mt5 mb20">Already a member? <a href="{{ url('login') }}"><strong>Sign In</strong></a></p>

            <div class="mb10">
                <label class="control-label">User name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb10">
                <label class="control-label">Email Address</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}"/>
                @error('email')
                    <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb10">
                <label class="control-label">Password</label>
                <input type="password" class="form-control" name="password"/>
                @error('password')
                    <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb10">
                <label class="control-label">Retype Password</label>
                <input type="password" class="form-control" name="password_confirmation"/>
            </div><br/>

            <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form>
        </div><!-- col-sm-6 -->
	</div>
</div>

@endsection