@extends('site.layout')
@push('css')
<style>
.title{
	text-decoration: none;
	margin-top: 5px;
}
.title:hover{
	text-decoration: none;
}
.card{
	margin-top: 20px;
}
.list-group a:hover{
  text-decoration: none;
}
</style>
@endpush
@section('content')

<div class="card">
  <h5 class="card-header">Post Details</h5>
  <div class="card-body">
    <h5 class="card-title">
		  <h2>{{ $data->title }}</h2>
      <p>post on: {{ date('d-m-y',strtotime($data->post_date)) }}</p>
      <p> category: {{ $data->Category->name }} </p>
      <br>
      <p>{!! $data->description !!}</p>
		</h5>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
   <!--  <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>

<div class="card">
  <div class="card-header">
    Comments {{ $data->comments->where('status','approved')->count() }}
  </div>
  @if(session('success'))
  
  <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>  {{ session('success') }}
  </div>
  @endif
  <div class="card-body">
    @if(Auth::check())
   <form action="{{ route('site.postComment') }}" method="POST">
    @csrf
   <div class="form-group">
    
    <input type="hidden" name="post_id" value="{{ $data->id }}">

    <div class="form-group">
      <label for="comments" >Comments</label>

      <textarea class="form-control" name="comment" id="comments" cols="30" rows="10"></textarea>
    </div>
      
   
    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
  </div>
  </form>
  @else
  <p>You must login for post comments</p>
  <p>Already member <a  class="btn btn-primary" href="{{ url('login') }}">Login</a> <a class="btn btn-primary" href="{{url('register')}}">Registration</a> </p>
  @endif
  </div>

  <div>
    @foreach($data->comments->where('status','approved') as $comment)
     <div class="media" style="margin-bottom: 10px;">
  <img class="img-fluid"src="{{get_gravatar($comment->user->email)}}" class="mr-3" alt="...">
  <div class="media-body" style="margin-left: 5px;">
    <h5 class="mt-0" style="margin-left: 5px;">{{$comment->user->name}} Says </h5>

   {{$comment->comment}}
  </div>
</div>
     @endforeach
      

   
  </div>
</div>


@endsection



@section('sidebar')
@include('site.sidebar')

@endsection
