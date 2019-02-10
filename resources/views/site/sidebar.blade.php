<div class="card">
  <h5 class="card-header">Categories</h5>
  
    <div class="list-group">
    	<ul class="list-group">
    		<?php
    		$categories = App\category::all();
    		?> 
    		@foreach($categories as $category)
    	<a href="{{route('site.category',$category->id)}}"><li class="list-group-item">{{ $category->name }}({{$category->post->count()}})</li></a>
    		@endforeach
    	</ul>
    </div>
  </div>