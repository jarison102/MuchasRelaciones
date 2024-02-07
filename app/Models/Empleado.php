<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id_empleado
 * @property $Nombre
 * @property $Cedula
 * @property $Telefono
 * @property $Especialidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Restaurante[] $restaurantes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'id_empleado' => 'required',
		'Nombre' => 'required',
		'Cedula' => 'required',
		'Telefono' => 'required',
		'Especialidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_empleado','Nombre','Cedula','Telefono','Especialidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restaurantes()
    {
        return $this->hasMany('App\Models\Restaurante', 'Empleadoid', 'id_empleado');
    }
    

}
