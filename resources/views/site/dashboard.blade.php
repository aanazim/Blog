@extends('site.layout')
@section('content')

<div class="card">
  <div class="card-header">
   <strong>Dashboard</strong>
  </div>
  <div class="card-body">
    <h5 class="card-title">Last Comments</h5>
   <table class="table table-bordered table-condensed">
    <thead>
    	<tr>
    		<th>Date</th>
    		<th>Comment</th>
    		<th>Post</th>
    		<th>Status</th>
    	</tr>
    </thead>
   
    @foreach($comments as $comment)

     <tr>
      <td>{{$comment->created_at}}</td>
      <td>{{$comment->comment}}</td>
      <td><a href="{{ route('site.singlepost', $comment->id) }}">{{$comment->post->title}}</a></td>
      <td>{{$comment->status}}</td>
     </tr>
      @endforeach
   

    </table>

  </div>
</div>

@endsection


@section('sidebar')
<div class="card" style="width: 120px;
height: 90px;">
 <h6 class="card-title" style="text-align: center;">User Info</h6>
  <img  class="img-fluid"src="{{get_gravatar($user->email)}}" class="card-img-top" alt="...">
  <div class="card-body">
   
    <strong>{{$user->name}}</strong>
    @if(isAdmin())
   <a style="margin-top: 10px;"class="btn btn-primary" href="{{route('admin.dashboard')}}">Admin </a>
    @endif
    
  </div>
</div>

@endsection
