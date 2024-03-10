@extends('layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Modificar Receta
                </div>
                <div class="float-end">
                    <a href="{{ route('recetas.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('recetas.update', $receta->id) }}" method="post">
                    @csrf
                    @method("PUT")


                    <div class="mb-3 row">
                        <label for="nombre" class="col-md-4 col-form-label text-md-end text-start">Nombre</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ $receta->nombre }}">
                            @if ($errors->has('nombre'))
                                <span class="text-danger">{{ $errors->first('nombre') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="ingredientes" class="col-md-4 col-form-label text-md-end text-start">Ingredientes</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('ingredientes') is-invalid @enderror" id="ingredientes" name="ingredientes" value="{{ $receta->ingredientes }}">
                            @if ($errors->has('ingredientes'))
                                <span class="text-danger">{{ $errors->first('ingredientes') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="dificultad" class="col-md-4 col-form-label text-md-end text-start">Dificultad</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('dificultad') is-invalid @enderror" id="dificultad" name="dificultad" value="{{ $receta->dificultad }}">
                            @if ($errors->has('dificultad'))
                                <span class="text-danger">{{ $errors->first('dificultad') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="foto" class="col-md-4 col-form-label text-md-end text-start">Foto</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{ $receta->foto }}">
                            @if ($errors->has('foto'))
                                <span class="text-danger">{{ $errors->first('foto') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="descripcion" class="col-md-4 col-form-label text-md-end text-start">Descripcion</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion">{{ $receta->descripcion }}</textarea>
                            @if ($errors->has('descripcion'))
                                <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                            @endif
                        </div>
                    </div>

                   
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Actualizar Receta">
                    </div>
                      
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection