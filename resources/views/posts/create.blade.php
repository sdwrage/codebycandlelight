@extends('layout')

@section ('content')

	@include ('partials.errors')

	<form method="POST" action="/posts">
		{{ csrf_field() }}

		<div class="form-group row">
		  <label for="post-title" class="col-2 col-form-label">Title</label>
		  <div class="col-10">
		    <input type="text" name="title" id="post-title" class="form-control"></input>
		  </div>
		</div>

		<div class="form-group row">
		  <label for="post-body" class="col-2 col-form-label">Body</label>
		  <div class="col-10">
		    <textarea name="body" id="post-body" cols="30" rows="10" class="form-control editor"></textarea>
		  </div>
		</div>

		<button type="submit" class="btn btn-primary">Add</button>
	</form>
	
@endsection