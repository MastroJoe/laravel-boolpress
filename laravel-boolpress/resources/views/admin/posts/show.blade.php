@extends('admin.layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1>Titolo: {{ $post->title }}</h1>
      <h4>Categoria:
        @if ($post->category)
          {{ $post->category->name }}
        @endif
      </h4>

      <img src="{{ asset('storage/'.$post->cover) }}" alt="{{ $post->title }}">

      <p>{{ $post->content }}</p>
    </div>
  </div>
</div>
@endsection
