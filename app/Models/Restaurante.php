<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Restaurante
 *
 * @property $id_Restaurante
 * @property $Nombre
 * @property $Tipo
 * @property $Compraid
 * @property $Ventaid
 * @property $Empleadoid
 * @property $created_at
 * @property $updated_at
 *
 * @property Compra $compra
 * @property Empleado $empleado
 * @property Ventum $ventum
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Restaurante extends Model
{
    
    static $rules = [
		'id_Restaurante' => 'required',
		'Nombre' => 'required',
		'Tipo' => 'required',
		'Compraid' => 'required',
		'Ventaid' => 'required',
		'Empleadoid' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Restaurante','Nombre','Tipo','Compraid','Ventaid','Empleadoid'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function compra()
    {
        return $this->hasOne('App\Models\Compra', 'id_compra', 'Compraid');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id_empleado', 'Empleadoid');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ventum()
    {
        return $this->hasOne('App\Models\Ventum', 'id_venta', 'Ventaid');
    }
    

}
