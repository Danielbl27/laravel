<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    public function index()
    {
        //Devuelve un array paginado de users de 3 en 3
        //Ordenado por los últimos
        $users = User::latest()->paginate(3);
        

        return view('usuarioIndex',compact('users'));
    }

      /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }
     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        user::create($request->all());
        return redirect()->route('usuarioIndex')
                ->withSuccess('Se ha creado una nuevo usuario.');
    }

    
    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //Cargamos el alumno correspondiente
        $users = user::find($id);

        //Lo mandamos a la vista
        return view('show', [
            'users' => $users
        ]);
    }

      /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {

        //Cargamos el alumno correspondiente
        $user = user::find($id);

        return view('edit', [
            'user' => $user
        ]);
    }

     /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        //Cargamos los usuarios correspondiente
        $user = user::find($id);

        //Actualizamos los datos de la user
        $user->update($request->all());

        //Retornamos a la pagina previa
        return redirect()->back()
                ->withSuccess('El user ha sido modificado.');
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {

        //Cargamos la user correspondiente
        $user = user::find($id);

        //Borramos la user
        $user->delete();

        //retornamos a la ruta indice
        return redirect()->route('users.index')
                ->withSuccess('La user se ha borrado correctamente.');
    }
}
