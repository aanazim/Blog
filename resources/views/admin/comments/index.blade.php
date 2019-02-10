@extends('admin.layout')
@section('content')

<div class="container">
	
	
	@if(session('success'))
	
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Success</strong>  {{ session('success') }}
	</div>
	@endif

	
	<div class="row">
		<table class="table table-bordered" style="margin-top:10px;">
			<thead>
				<th>ID </th>
				<th>USER</th>
				<th> COMMENT</th>
				<th>STATUS</th>
				<!-- <th> STATUS</th> -->
				<th>ACTION</th>
			</thead>
			<tbody>
				@foreach($data as $row )
				<tr>
					<td>{{$row->id}}</td>
					<td>{{ $row->user->name }}</td>
					<td>{{$row->comment}}</td>
					<td>{{$row->status}}</td>

					<td class="text-center">
					<a href="{{ route('admin.comments.edit',$row->id) }}"><button class="btn btn-info"><i class="fas fa-edit"></i>
						</button></a>
						<a href="{{route('admin.comments.destroy',$row->id)}}"><button class="btn btn-danger btnDelete"><i class="fas fa-trash"></i> </button></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>


	</div>
</div>
@endsection