<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sede extends Model
{
    //
    use SoftDeletes;

    protected $fillable=[
      'sede', 'pais_id',
      'direccion', 'detalles'
    ];

    public function ciudad()
    {
      return $this->hasOne('App\Ciudad');
    }

    public function area()
    {
      return $this->hasOne('App\Area');
    }

    public function entidad()
    {
      return $this->hasOne('App\Entidade');
    }
}
