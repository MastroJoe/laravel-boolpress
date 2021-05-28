@extends('admin.layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h3>Nuovo Post</h3>
    </div>
  </div>

  @if ($errors->any())
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  @endif

  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control" id="category" name="category_id">
            <option value="">Seleziona</option>
            @foreach($categories as $category)
            <option value="{{ category->id }}">{{ category->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control" id="title" type="text" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" id="content" type="text" name="content" value="">{{ old('content') }}</textarea>
        </div>

        <button class="btn btn-primary" type="submit" name="button">Salva</button>
      </form>
    </div>
  </div>
</div>
@endsection
