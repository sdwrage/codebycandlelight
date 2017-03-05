@extends ('layout')

@section('heading')
	Articles
@endsection

@section('subheading')
	Work, Life, Fun... Whatever!
@endsection

@section('content')

@if (Auth::check())
	<a href="/posts/create" class="btn btn-important">Add Post</a>
@endif

<ul>
    <h2>The Posts</h2>
    @foreach ($posts as $post)
        @include('posts.post')
    @endforeach
</ul>
@endsection