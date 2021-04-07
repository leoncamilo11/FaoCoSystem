<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paise extends Model
{
    //
    public function ciudad()
    {
      return $this-> hasMany('App\Ciudade');
    }
}
