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
<form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
	@csrf
 <div class="form-group">
	<label for="name" >Title</label>
	<input type="text" id="name" class="form-control" name="title">
 </div>
 <div class="form-group">
	<label for="description" >Description</label>
	<textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>

 </div>
 <div class="form-group">
	<label for="features-image">Features Image</label><br>
	<input name="features_image" id="features-image" type="file" style="margin-top: 10px;"></input>
 </div>
 
<div class="form-group">
	<label for="select-category">Select Category</label><br>
	<select class="form-control" name="name" id="">
		@foreach($categories as $category)
		<option value="{{ $category->id }}">{{ $category->name }}</option>
		@endforeach
	</select>
 </div>
 <!-- <div class="form-group">
	<label for="description" >Status</label>
	<input type="text" id="description" class="form-control" name="status">
 </div> -->
<button class="btn btn-primary">Submit</button>
</form>

</div>

@endsection

@push('js')
<script src="{{ asset('site/js/tinymce.js') }}"></script>
<script>
	$(function () {

    //TinyMCE
    tinymce.init({
        selector: "textarea#tinymce",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = '../../plugins/tinymce';
});
</script>
@endpush