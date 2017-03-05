@extends('layout')

@section ('heading')
	Come On In!
@endsection

@section ('subheading')
	I won't bite... :)
@endsection

@section ('content')
	@include ('partials.errors')
	
	<form action="/login" method="POST" role="form">
		{{ csrf_field() }}

		<legend>Log In</legend>

		<div class="form-group">
			<label for="">email</label>
			<input type="text" class="form-control" name="email" id="authentication_email" placeholder="Super Awesome Hero">
		</div>

		<div class="form-group">
			<label for="">Password</label>
			<input type="text" class="form-control" name="password" id="authentication_password" placeholder="Super Secret Password">
		</div>

		<button type="submit" class="btn btn-primary">Sign In</button>
	</form>
@endsection