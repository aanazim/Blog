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
		<a href="{{ route('admin.posts.create') }}"><button class="btn btn-primary">Add New</button></a>
		<table class="table table-bordered" style="margin-top:10px;">
			<thead>
				<th>ID </th>
				<th> TITLE</th>
				<th> DESCRIPTION</th>
				<th>FEATURES IMAGE</th>
				<th>STATUS</th>

				<!-- <th> STATUS</th> -->
				<th>ACTION</th>
			</thead>
			<tbody>
				@foreach($data as $row )
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->title}}</td>
					<td>{{$row->description}}</td>
					<td>
						<img src="{{ asset('post/'.$row->features_image) }}" alt="#" class="img-fluid img-thumbnail" style="height: 90px;width: 130px">
					</td>
					 <td>
					 	@if($row->status == true)
							<span class="btn btn-success">Published</span>
					 	@else
							<span class="btn btn-danger">Pending</span>
					 	@endif
					 </td> 

					<td class="text-center">
					<a href="{{ route('admin.posts.edit',$row->id) }}"><button class="btn btn-info"><i class="fas fa-edit"></i>
						</button></a>
						<a href="{{route('admin.posts.destroy',$row->id)}}"><button class="btn btn-danger btnDelete"><i class="fas fa-trash"></i> </button></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>


	</div>
</div>
@endsection