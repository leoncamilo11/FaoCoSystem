<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
    //
    protected $fillable = [
        'entidad', 'sede_id', 'area_id'
    ];

    public function sede()
    {
      return $this->hasMany('App\Sede');
    }
}
