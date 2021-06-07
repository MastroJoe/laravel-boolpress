@extends('admin.layouts.app')

@section('content')
<div class="container-fluid container-show">
  <div class="row justify-content-center">
    <div class="col-md-8 post-show">
      <h1>{{ $post->title }}</h1>
      <h4>Category:
        @if ($post->category)
          {{ $post->category->name }}
        @endif
      </h4>

      @if ($post->cover)
        <img src="{{ asset('storage/'.$post->cover) }}" alt="{{ $post->title }}">
      @endif

      <p class="pt-15">{{ $post->content }}</p>
    </div>
  </div>
</div>
@endsection
