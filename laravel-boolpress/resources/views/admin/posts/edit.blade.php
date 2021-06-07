@extends('admin.layouts.app')

@section('content')
<div class="container-fluid mr-300">
  <div class="row justify-content-center">
    <div class="col-md-12" style="padding-bottom: 20px;">
      <h3>Edit post</h3>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{ route('admin.posts.update', ['post' => $post -> id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control @error('category') is-invalid @enderror" id="category" name="category_id">
            <option value="">Select</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == old('category_id', $post->category_id) ? 'selected' : '' }}>
              {{ $category->name }}
            </option>
            @endforeach
          </select>
          @error('category_id')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control @error('title') is-invalid @enderror" id="title" type="text" name="title" value="{{ $post -> title }}">
          @error('title')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control @error('content') is-invalid @enderror" id="content" type="text" name="content" value="">
            {{ $post -> content }}
          </textarea>
          @error('content')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="old-img">
          <img src="{{ asset('$post->cover') }}" alt="">
        </div>
        <div class="form-group">
          <label for="cover">Cover</label>
          <input class="form-control-file @error('cover') is-invalid @enderror" id="cover" type="file" name="cover">
          @error('cover')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="form-group">
          <label for="tag">Tags</label>
          <select class="form-control @error('tag_ids') is-invalid @enderror" id="tag" name="tag_ids[]" multiple>
            @foreach($tags as $tag)
            <option value="{{ $tag->id }}" {{ $post->tags->contains($tag) ? 'selected' : '' }}>
              {{ $tag->name }}
            </option>
            @endforeach
          </select>
          @error('tag_ids')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <button class="btn btn-primary" type="submit" name="button">
          Save changes
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
