@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <form action="/brands/{{ $brand->id }}" method="post" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" placeholder="Ingresa el nombre" value="{{ $brand->name }}">
                                <small id="nameHelp" class="form-text text-muted">Escribe el nombre de la marca</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripción</label>
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $brand->description }}</textarea>
                            </div>
                            <div class="custom-file mb-3">
                                <input type="file" name="logo" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Escoger archivo</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                        <form action="/brands/{{ $brand->id }}" method="post">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection