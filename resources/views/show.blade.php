@extends('layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Información de la Receta
                </div>
                <div class="float-end">
                    <a href="{{ route('recetas.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Nombre:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $recetas->nombre }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="ingredientes" class="col-md-4 col-form-label text-md-end text-start"><strong>Ingredientes:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $recetas->ingredientes }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="dificultad" class="col-md-4 col-form-label text-md-end text-start"><strong>dificultad:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $recetas->dificultad }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="foto" class="col-md-4 col-form-label text-md-end text-start"><strong>foto:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $recetas->foto }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="descripcion" class="col-md-4 col-form-label text-md-end text-start"><strong>Descripcion:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $recetas->descripcion }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection