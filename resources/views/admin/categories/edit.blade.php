@extends('admin.layout')
@section('content')
<form action="{{ route('admin.categories.update',$data->id) }}" method="POST">
	@csrf
	@method('put')
	<div class="form-group">
		<label for="name" >Name</label>
		<input type="text" id="name" class="form-control" name="name" value="{{ $data->name }}">
		<button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
	</div>
</form>
@endsection