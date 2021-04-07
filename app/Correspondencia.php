<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Correspondencia extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'recepcionistaRegistra_id', 'numeroGuia', 'remitenteE',
        'remitenteC_id', 'remitenteP_id', 'detalles', 'ciudadE_id',
        'ciudadR_id', 'estado_id', 'usuarioRecibe_id'
    ];

    public function recepcionistaRegistra()
    {
      return $this->belongsTo('App\User', 'recepcionistaRegistra_id');
    }

    public function entidad()
    {
      return $this->belongsTo('App\Entidade');
    }

    public function usuarioRecibe()
    {
      return $this->belongsTo('App\User', 'usuarioRecibe_id');
    }

    public function estado()
    {
      return $this->belongsTo('App\Estado', 'estado_id');
    }

    public function remitenteC()
    {
      return $this->belongsTo('App\User', 'remitenteC_id');
    }

    public function remitenteP()
    {
      return $this->belongsTo('App\Proveedore', 'remitenteP_id');
    }

    public function ciudadE()
    {
      return $this->belongsTo('App\Ciudade', 'ciudadE_id');
    }

    public function ciudadR()
    {
      return $this->belongsTo('App\Ciudade', 'ciudadR_id');
    }
}
