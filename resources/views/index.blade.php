@extends('layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">Recetario</div>
            <div class="card-body">
                <a href="{{ route('recetas.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Nueva receta</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ingredientes</th>
                        <th scope="col">Dificultad</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Descripcion</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($recetas as $receta)
                        <tr>
                            <th scope="row">{{ $receta->id }}</th>
                            <td>{{ $receta->nombre }}</td>
                            <td>{{ $receta->ingredientes }}</td>
                            <td>{{ $receta->dificultad }}</td>
                            <td><img width="100px" height="100px" src="{{ $receta->foto}}" alt="foto"> </td>
                            
                            <td>{{ $receta->descripcion }}</td>
                            <td>
                                <form action="{{ route('recetas.destroy', $receta->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('recetas.show', $receta->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Ver</a>

                                    <a href="{{ route('recetas.edit', $receta->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Quieres Borrar este producto?');"><i class="bi bi-trash"></i> Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>

                  {{ $recetas->links() }}

            </div>
        </div>
    </div>    
</div>
    
@endsection