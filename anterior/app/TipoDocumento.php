<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    //
    public function user()
    {
      return $this->hasmany('App\User');
    }

    public function proveedor()
    {
      return $this->hasmany('App\Proveedor');
    }
}
