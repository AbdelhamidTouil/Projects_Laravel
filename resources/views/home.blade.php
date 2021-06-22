@extends('master.layout')

@section('title')
Home
@endsection

@section('style')
<style>
            body {
                background-color:yellow;
            }
        </style>
@endsection

@section('content')

<div class="row my-5">
@foreach($posts as $post)
<div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://cdn.pixabay.com/photo/2021/06/08/14/09/poppy-6320719_960_720.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$post ["title"]}}</h5>
    <p class="card-text">{{$post ["body"]}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

@endforeach
</div>
@endsection

