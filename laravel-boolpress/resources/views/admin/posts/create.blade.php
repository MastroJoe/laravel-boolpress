@extends('admin.layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12" style="padding-bottom: 20px;">
      <h3>Nuovo Post</h3>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control @error('category') is-invalid @enderror" id="category" name="category_id">
            <option value="">Seleziona</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
          @error('title')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control @error('title') is-invalid @enderror" id="title" type="text" name="title" value="{{ old('title') }}">
          @error('title')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">
            {{ old('content') }}
          </textarea>
          @error('content')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <button class="btn btn-primary" type="submit" name="button">
          Salva
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
