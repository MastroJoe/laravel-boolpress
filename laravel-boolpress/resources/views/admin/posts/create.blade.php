@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Nuovo Post</h3>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control" id="title" type="text" name="title" value="">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <input class="form-control" id="content" type="text" name="content" value="">
        </div>
        <button class="btn btn-primary" type="submit" name="button">Salva</button>
      </form>
    </div>
  </div>
</div>
@endsection
