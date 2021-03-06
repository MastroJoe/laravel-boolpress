@extends('admin.layouts.app')

@section('content')
<div class="container-fluid mr-300">
  <div class="row">
    <div class="col-md-12" style="padding-bottom: 20px;">
      <a class="btn btn-primary" href="{{route('admin.categories.create')}}">
        Crea nuova categoria
      </a>
    </div>
  </div>
  <div class="row justify-content-center">
    @foreach ($categories as $category)
      <div class="col-md-3 pb-20">
          <div class="card">
              <div class="card-header center">
                {{ $category->name }}
              </div>

              <div class="card-body">
                <div class="">
                  <a class="btn btn-info" href="{{route('admin.categories.show', ['category' => $category->id])}}">
                    Mostra
                  </a>
                  <a class="btn btn-primary" href="{{route('admin.categories.edit', ['category' => $category->id])}}">
                    Modifica
                  </a>
                  <a class="btn btn-danger" onclick="event.preventDefault();
                                this.nextElementSibling.submit();">
                    Elimina
                  </a>
                  <form action="{{route('admin.categories.destroy', ['category' => $category->id])}}" method="POST" style="display: none;">
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
