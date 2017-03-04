@extends ('layout')

@section('heading')
	Articles
@endsection

@section('subheading')
	Work, Life, Fun... Whatever!
@endsection

@section('content')
<a href="/posts/create" class="btn btn-important">Add Post</a>
<ul>
    <h2>The Posts</h2>
    @foreach ($posts as $post)
        @include('posts.post')
    @endforeach
</ul>
@endsection