@extends('layout')

@section('heading')
    The Post at Hand
@endsection

@section('subheading')
    Work, Life, Fun... Whatever!
@endsection

@section('content')
<div class="jumbotron">
  <h1>{{$post->title}}</h1>
  <p>{{$post->body}}</p>
  <p><a class="btn btn-primary btn-lg" href="/posts" role="button">My Posts</a></p>
</div>

<div id="comments">
    @foreach ($post->comments as $comment)
        @include ('partials.comment')
    @endforeach
</div>

@include ('partials.errors')

<form method="POST" action="/posts/{{ $post->id }}/comments">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="comment-body">Your Comment:</label>
        <textarea name="body" id="comment-body" cols="30" rows="10" class="form-control" placeholder="Your Comment Goes Here"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Comment</button>
    </div>
</form>
@endsection
                