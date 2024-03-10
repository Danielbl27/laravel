<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recetas;
use Illuminate\Http\Request;


class RecetasController extends Controller
{
    public function index()
    {
        //Devuelve un array paginado de recetas de 3 en 3
        //Ordenado por los últimos
        $recetas = Recetas::latest()->paginate(3);
        

        return view('index',compact('recetas'));
    }

      /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }
     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Recetas::create($request->all());
        return redirect()->route('index')
                ->withSuccess('Se ha creado una nueva Receta.');
    }

    
    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //Cargamos el alumno correspondiente
        $recetas = Recetas::find($id);

        //Lo mandamos a la vista
        return view('show', [
            'recetas' => $recetas
        ]);
    }

      /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {

        //Cargamos el alumno correspondiente
        $receta = Recetas::find($id);

        return view('edit', [
            'receta' => $receta
        ]);
    }

     /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        //Cargamos el alumno correspondiente
        $receta = Recetas::find($id);

        //Actualizamos los datos de la receta
        $receta->update($request->all());

        //Retornamos a la pagina previa
        return redirect()->back()
                ->withSuccess('La receta ha sido modificada.');
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {

        //Cargamos la receta correspondiente
        $receta = Recetas::find($id);

        //Borramos la receta
        $receta->delete();

        //retornamos a la ruta indice
        return redirect()->route('recetas.index')
                ->withSuccess('La receta se ha borrado correctamente.');
    }
}
