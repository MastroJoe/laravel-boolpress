@extends('admin.layouts.app')

@section('content')
<div class="container-fluid container-show">
  <div class="row justify-content-center">
    <div class="col-md-8 tag-show">
      <h1>{{ $tag->name }}</h1>
    </div>
  </div>
</div>
@endsection
