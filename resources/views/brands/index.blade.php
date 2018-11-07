@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="/brands/create" class="btn btn-success">Agregar Marca</a>
            </div>
        </div>
        <div class="row">
            @foreach( $brands as $brand)
                <div class="col-sm-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        @if($media = $brand->getMedia('logo')->first())
                            <img class="card-img-top" src="{{ $media->getUrl() }}" alt="Card image cap">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $brand->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $brand->created_at }}</h6>
                            <p class="card-text">{{ $brand->description }}</p>
                            <a href="/brands/{{ $brand->id }}/edit" class="btn btn-primary card-link">{{ __('Editar') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection