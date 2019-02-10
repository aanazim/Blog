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
.media a img{
  width: 130px;
  height:90px;
}
.media{
  margin-top: 30px;
}

</style>
@endpush

@section('content')

@foreach($data as $row)
<div class="media">
  <a href="{{ route('site.singlepost', $row->id) }}"><img src="{{asset('post/'.$row->features_image)}}" class="img-thumbnail" alt=""></a>
  <div class="media-body">
 <h4>{{ $row->title }}</h4>  

    {{str_limit(strip_tags ($row->description),150)}}
  </div>
</div>
@endforeach
<div>
  {!! $data->render()  !!}
</div>

@endsection

@section('sidebar')

@include('site.sidebar')
@endsection