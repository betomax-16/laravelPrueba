<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    //
    protected $table = 'imagenes';

    protected $fillable = ['nombre', 'idArticulo'];

    /*
    * relacion varios a uno con la entidad Articulo donde el segundo parametro
    * indica el nombre del campo con la llaveForane para articulos en esta entidad
    */
    public function articulo()
    {
      return $this->belongsTo('App\Articulo', 'idArticulo');
    }
}
