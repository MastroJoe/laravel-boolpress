@extends('admin.layouts.app')

@section('content')
<div class="container-fluid mr-300">
  <div class="row">
    <div class="col-md-12" style="padding-bottom: 20px;">
      <a class="btn btn-primary" href="{{ route('admin.posts.create')}}">
        Create a new post
      </a>
    </div>
  </div>
  <div class="row justify-content-center">
    @foreach ($posts as $post)
      <div class="col-md-3 pb-20">
          <div class="card">
              <div class="card-header center">
                {{ $post->title }}
              </div>

              <div class="card-body">
                {{ $post->content }}

                <div class="pt-15">
                    <a class="btn btn-info" href="{{route('admin.posts.show', ['post' => $post->id])}}">
                      Show content
                    </a>
                    <a class="btn btn-primary" href="{{route('admin.posts.edit', ['post' => $post->id])}}">
                      Edit
                    </a>
                    <a class="btn btn-danger" onclick="event.preventDefault();
                                  this.nextElementSibling.submit();">
                      Delete
                    </a>
                    <form action="{{route('admin.posts.destroy', ['post' => $post->id])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                  </div>
              </div>
          </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
