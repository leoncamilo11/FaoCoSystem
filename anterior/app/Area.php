<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //

    public function proyecto()
    {
      return $this->belongsTo('App\Proyecto');
    }

    public function sede()
    {
      return $this->hasMany('App\Sede');
    }
}
