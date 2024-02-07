<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $id_proveedor
 * @property $Compraid
 * @property $Cedula
 * @property $Nombre
 * @property $Tipo de proveedor
 * @property $Telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Compra $compra
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    
    static $rules = [
		'id_proveedor' => 'required',
		'Compraid' => 'required',
		'Cedula' => 'required',
		'Nombre' => 'required',
		'Tipo de proveedor' => 'required',
		'Telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_proveedor','Compraid','Cedula','Nombre','Tipo de proveedor','Telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function compra()
    {
        return $this->hasOne('App\Models\Compra', 'id_compra', 'Compraid');
    }
    

}
