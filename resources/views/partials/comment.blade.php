<div class="row">
	<div class="col-sm-1">
		<div class="thumbnail">
			<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
		</div>
	</div>

	<div class="col-sm-11">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>Anonymous User</strong> <span class="text-muted">commented {{ $comment->created_at->diffForHumans() }} </span>
			</div>

			<div class="panel-body">
				{{ $comment->body }}
			</div>
		</div>
	</div>
</div>