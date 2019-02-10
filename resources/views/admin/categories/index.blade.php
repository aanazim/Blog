@extends('admin.layout')
@section('content')
<div class="container">
	
	
	@if(session('success'))
	
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Success!</strong>  {{ session('success') }}
	</div>
	@endif
	
	<div class="row">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Add New
		</button>
		<table class="table table-bordered" style="margin-top:10px;">
			<thead>
				<th>ID </th>
				<th> NAME</th>
				<th>ACTION</th>
			</thead>
			<tbody>
				@foreach($data as $row )
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->name}}</td>
					<td class="text-center">
						<a href="{{ route('admin.categories.edit', $row->id)}}"><button class="btn btn-info"><i class="fas fa-edit"></i>
						</button></a>
						<a href="{{ route('admin.categories.destroy', $row->id) }}"><button class="btn btn-danger btnDelete"> <i class="fas fa-trash"></i></button></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="{{route('admin.categories.store')}}" method="POST">
							@csrf
							<div class="form-group">
								<label for="name" >Name</label>
								<input type="text" id="name" class="form-control" name="name">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
		
	</div>
</div>
@endsection
@push('js')

@endpush