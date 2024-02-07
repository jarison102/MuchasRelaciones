<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id_producto
 * @property $Ventaid
 * @property $Nombre
 * @property $Tipo
 * @property $Precio unico
 * @property $created_at
 * @property $updated_at
 *
 * @property Compra[] $compras
 * @property Ventum $ventum
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'id_producto' => 'required',
		'Ventaid' => 'required',
		'Nombre' => 'required',
		'Tipo' => 'required',
		'Precio unico' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_producto','Ventaid','Nombre','Tipo','Precio unico'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compras()
    {
        return $this->hasMany('App\Models\Compra', 'Productoid', 'id_producto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ventum()
    {
        return $this->hasOne('App\Models\Ventum', 'id_venta', 'Ventaid');
    }
    

}
