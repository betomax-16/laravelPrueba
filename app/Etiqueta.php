<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    //
    protected $table = 'etiquetas';

    protected $fillable = ['nombre'];

    /*
    * relacion varios a varios con la entidad Ariculo donde:
    *   parametro 2 -> el nombre de la tabla auxiliar que albergara este tipo de relacion
    *   parametro 3 -> nombre de la llaveForanea del modelo sobre el que se está definiendo la relación
    *   parametro 4 -> nombre de la llaveForanea del modelo que se está uniendo
    */
    public function articulos()
    {
      return $this->belongsToMany('App\Articulo', 'articulo_etiqueta', 'idEtiqueta', 'idArticulo')->withTimestamps();
    }
}
