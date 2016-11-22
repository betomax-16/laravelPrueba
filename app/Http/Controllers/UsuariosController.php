<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Laracasts\Flash\Flash;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd('hola');
        $usuarios = Usuario::Buscar($request->nombre)->orderBy('id', 'ASC')->paginate(5);
        return view('admin/usuario/index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd('hola esta es la vista para crear un usuario');
        return view('admin/usuario/crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $usuario = new Usuario($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->save();
        flash('Se ha registrado '.$usuario->nombre.' de manera exitosa!', 'success');
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('admin/usuario/ver')->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('admin/usuario/editar')->with('usuario', $usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($id);
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->apellidoPaterno = $request->apellidoPaterno;
        $usuario->apellidoMaterno = $request->apellidoMaterno;
        $usuario->email = $request->email;
        $usuario->role = $request->role;
        $usuario->save();
        //$usuario = new Usuario($request->all());
        flash('Se han registrado los cambios para '.$usuario->nombre.' de manera exitosa!', 'success');
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        if ($request->ajax()) {
          $usuario->delete();
          return response()->json([
            'message' => 'usuario eliminado exitosamente'
          ]);
        }
        flash('usuario eliminado exitosamente', 'success');
        return redirect()->route('usuarios.index');
    }
}
