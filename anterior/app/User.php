<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'tipoDocumento_id',
        'index', 'documento', 'email',
        'password', 'telefono', 'entidad_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tipoDocumento()
    {
      return $this->belongsTo('App\TipoDocumento', 'tipoDocumento_id');
    }

    public function entidade()
    {
      return $this->belongsTo('App\Entidade', 'entidad_id');
    }

    public function proyectos()
    {
      return $this->belongsToMany('App\Proyecto', 'proyecto_users');
    }

    public function roles()
    {
      return $this->belongsToMany('App\Role', 'role_users')->withPivot('activo');
    }
}
