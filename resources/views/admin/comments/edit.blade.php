@extends('admin.layout')
@section('content')
<form action="{{ route('admin.comments.update',$comment->id) }}" method="POST">
	@csrf
	@method('put')
	<div class="form-group">
		<label for="status" >Status</label>
		<input type="text" id="status" class="form-control" name="status" value="{{$comment->status}}">
		<button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
	</div>
</form>
@endsection