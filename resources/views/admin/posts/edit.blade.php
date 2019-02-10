@extends('admin.layout')
@section('content')
<div class="container">
          @if ($errors->any())
	  
		
			 @foreach ($errors->all() as $error)
			
		<div class="alert alert-danger alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>{{ $error }}</strong>  
	</div>
			 @endforeach
	     @endif
<form action="{{ route('admin.posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
	@csrf
	@method('put')
 <div class="form-group">
	<label for="name" >Title</label>
	<input type="text" id="name" class="form-control" name="title" value="{{ $post->title }}">
 </div>
 <div class="form-group">
	<label for="description" >Description</label>
	<input type="text" id="description" class="form-control" name="description" value="{{ $post->description }}">
 </div>
 <div class="form-group">
	<label for="old-image">Old Image</label><br>
	<img src="{{ asset('post/'.$post->features_image) }}" alt="#" class="img-fluid img-thumbnail" style="height: 90px;width: 130px">
 </div>
 <div class="form-group">
	<label for="features-image">Features Image</label><br>
	<input name="features_image" id="features-image" type="file" style="margin-top: 10px;"></input>
 </div>

 <div class="form-group">
	<label for="select-category">Select Category</label> <br>

	<select name="name" id="select-category" class="form-control" >
		@foreach($categories as $category)
	
		<option value="{{ $category->id }}" {{ $category->id == $post->Category->id ? 'selected' : '' }}>{{ $category->name }}</option>
		@endforeach
	</select>
 </div>
 <!-- <div class="form-group">
	<label for="description" >Status</label>
	<input type="text" id="description" class="form-control" name="status">
 </div> -->
<button class="btn btn-primary">Edit</button>
</form>

</div>

@endsection