<li>
	<a href="/posts/{{$post->id}}">{{ $post->title }}</a> by <span>{{ $post->user->name }}</span><br>
	<sup>Posted on {{ $post->created_at->toFormattedDateString() }}</sup>
</li>	