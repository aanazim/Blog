            <div class="dropdown">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin-bottom: 50px;">
				Dashboard
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a>
				</div>
				
			</div>
			<div class="dropdown">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin-bottom: 50px;">
				Category
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="{{ route('admin.categories.index') }}">Category</a>
				</div>
			</div>

			<div class="dropdown">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin-bottom: 50px;">
				Posts
				</button>
				<div class="dropdown-menu">
                     <a class="dropdown-item" href="
					{{ route('admin.posts.index') }}"> New Post</a>
				</div>
			</div>
			<div class="dropdown">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin-bottom: 50px;">
				COMMENTS
				</button>
				<div class="dropdown-menu">
                     <a class="dropdown-item" href="
					{{ route('admin.comments.index') }}"> Comment</a>
				</div>
			</div>