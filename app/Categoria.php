<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table = 'categorias';

    protected $fillable = ['nombre'];

    /*
    * relacion uno a muchos con la entidad Articulo donde en dicha
    * debe tener una llaveForanea con el nombre de : "idCategoria"
    */
    public function articulos()
    {
      return $this->hasMany('App\Articulo', 'idCategoria');
    }

}
