@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    @foreach ($posts as $post)
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            {{ $post->title }}
          </div>

          <div class="card-body">
            {{ $post->content }}

            <div class="">
              <a class="btn btn-primary" href="{{ route('posts.show', ['slug' => $post -> slug]) }}">
                Mostra Post
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
