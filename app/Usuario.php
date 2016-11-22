<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidoPaterno', 'apellidoMaterno', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
    * relacion uno a muchos con la entidad Articulo donde en dicha
    * debe tener una llaveForanea con el nombre de : "idCategoria"
    */
    public function articulos()
    {
      return $this->hasMany('App\Articulo', 'idUsuario');
    }
    /*
    Metodo scope para poder hacer busqueda (estos metodos siempre deben ir con el nombre scope)
    */
    public function scopeBuscar($query, $nombre)
    {
      return $query->where('nombre', 'LIKE', "%$nombre%");
    }
}
