<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Articulo extends Model
{
    //
    use Sluggable;
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

    protected $table = 'articulos';

    protected $fillable = ['titulo', 'contenido', 'idCategoria', 'idUsuario'];

    /*
    * relacion varios a uno con la entidad Usuario donde el segundo parametro
    * indica el nombre del campo con la llaveForane para usuarios en esta entidad
    */
    public function usuario()
    {
      return $this->belongsTo('App\Usuario', 'idUsuario');
    }

    /*
    * relacion varios a uno con la entidad Categoria donde el segundo parametro
    * indica el nombre del campo con la llaveForane para categorias en esta entidad
    */
    public function categoria()
    {
      return $this->belongsTo('App\Categoria', 'idCategoria');
    }

    /*
    * relacion uno a muchos con la entidad Imagen donde en dicha
    * debe tener una llaveForanea con el nombre de : "idArticulo"
    */
    public function imagenes()
    {
      return $this->hasMany('App\Imagen', 'idArticulo');
    }

    /*
    * relacion varios a varios con la entidad Etiqueta donde:
    *   parametro 2 -> el nombre de la tabla auxiliar que albergara este tipo de relacion
    *   parametro 3 -> nombre de la llaveForanea del modelo sobre el que se está definiendo la relación
    *   parametro 4 -> nombre de la llaveForanea del modelo que se está uniendo
    */
    public function etiquetas()
    {
      return $this->belongsToMany('App\Etiqueta', 'articulo_etiqueta', 'idArticulo', 'idEtiqueta')->withTimestamps();
    }
}
