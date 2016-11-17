<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;

class testController extends Controller
{
    //
    public function index($id)
    {
      $articulo = Articulo::find($id);
      if ($articulo) {
        $articulo->usuario;
        $articulo->categoria;
        $articulo->etiquetas;
        return view('test/index', ['articulo' => $articulo]);
      }
      return 'Sin datos';
      //dd($articulo);
    }
}
