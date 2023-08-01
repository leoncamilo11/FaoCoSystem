<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudade extends Model
{
    //
    public function paise()
    {
      return $this-> hasOne('App\Paise');
    }

    public static function ciudades($id){
      return Ciudade::where('pais_id',$id)->get();
    }
}
