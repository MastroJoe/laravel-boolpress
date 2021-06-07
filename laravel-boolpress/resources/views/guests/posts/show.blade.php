@extends('layouts.app')

@section('content')
<div class="container container-show">
  <div class="row justify-content-center">
    <div class="col-md-8 post-show pt-50">
      <h1>{{ $post->title }}</h1>
      <h4>Category:
        @if ($post->category)
          <a href="{{ route('category.index', ['slug' => $post->category->slug]) }}">
            {{ $post->category->name }}
          </a>
        @endif
      </h4>
      <p class="pt-15">
        {{ $post->content }}
      </p>
      <div class="tags">
        @foreach ($post->tags as $tag)
          <a href="{{ route('tag.index', ['slug' => $tag->slug]) }}">
            #{{ $tag->name }}
          </a>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
