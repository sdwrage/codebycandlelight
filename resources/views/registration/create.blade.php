@extends ('layout')


@section ('content')
	@include('partials.errors')

	<form action="/register" method="POST" role="form">

		{{ csrf_field() }}
		<legend>Registration Form</legend>

		<div class="form-group">
			<label for="">Username</label>
			<input type="text" class="form-control" name="name" id="registration_username" placeholder="Your Username Here">
		</div>

		<div class="form-group">
			<label for="">Email Address</label>
			<input type="text" class="form-control" name="email" id="registration_email" placeholder="Your Email Here">
		</div>

		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" name="password" id="registration_password">
		</div>

		<div class="form-group">
			<label for="">Password Confirmation</label>
			<input type="password" class="form-control" name="password_confirmation" id="registration_password_confirmation">
		</div>

		<button type="submit" class="btn btn-primary">Register</button>
	</form>
@endsection