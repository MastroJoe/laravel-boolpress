@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="title">
        <h1>{{ $post->title }}</h1>
      </div>
      <div class="content">
        <p>{{ $post->content }}</p>
      </div>
    </div>
  </div>
@endsection
