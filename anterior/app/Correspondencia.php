<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Correspondencia extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'codigoArchivo_id', 'recepcionistaRegistra_id', 'tipoCorrespondencia_id',
        'usuarioSolicita_id', 'usuarioRecibe_id', 'detalles'
    ];

    public function codigoArchivo()
    {
      return $this->belongsTo('App\CodigoArchivo', 'codigoArchivo_id');
    }

    public function recepcionistaRegistra()
    {
      return $this->belongsTo('App\User', 'recepcionistaRegistra_id');
    }

    public function tipoCorrespondencia()
    {
      return $this->belongsTo('App\TipoCorrespondencia', 'tipoCorrespondencia_id');
    }

    public function usuarioSolicita()
    {
      return $this->belongsTo('App\User', 'usuarioSolicita_id');
    }

    public function usuarioRecibe()
    {
      return $this->belongsTo('App\User', 'usuarioRecibe_id');
    }

    /*public function estado()
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
    }*/
}
