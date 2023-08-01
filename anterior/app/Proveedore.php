<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    //

    protected $fillable = [
        'nombre', 'tipoDocumento_id', 'documento',
        'noChequeo', 'activo'
    ];

    public function tipoDocumento()
    {
      return $this->belongsTo('App\TipoDocumento', 'tipoDocumento_id');
    }
}
