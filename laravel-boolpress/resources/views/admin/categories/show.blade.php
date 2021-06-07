@extends('admin.layouts.app')

@section('content')
<div class="container-fluid container-show">
  <div class="row justify-content-center">
    <div class="col-md-8 category-show">
      <h1 class="center">{{ $category->name }}</h1>
    </div>
  </div>
</div>
@endsection
