<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyecto extends Model
{
    //
    use SoftDeletes;

    protected $fillable=[
      'simbolo', 'actividad', 'administrativo_id',
      'financiero_id', 'coordinador_id'
    ];

    public function administrativo()
    {
      return $this->belongsTo('App\User');
    }

    public function financiero()
    {
      return $this->belongsTo('App\User');
    }

    public function coordinador()
    {
      return $this->belongsTo('App\User');
    }
}
