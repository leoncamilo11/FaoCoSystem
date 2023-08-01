<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tesoreria extends Model
{
    //

    protected $fillable = [
        'fechaFactura', 'proveedor_id', 'responsable_id',
        'tipoPago_id', 'valorFactura', 'valorIva',
        'valorImpoconsumo', 'detalles', 'adjunto'
    ];

    public function proveedore()
    {
      return $this->belongsTo('App\Proveedore', 'proveedor_id');
    }

    public function responsable()
    {
      return $this->belongsTo('App\User', 'responsable_id');
    }

    public function tipoPago()
    {
      return $this->belongsTo('App\TipoPago', 'tipoPago_id');
    }

    public function proyecto()
    {
      return $this->belongsTo('App\Proyecto', 'proyecto_id');
    }
}
