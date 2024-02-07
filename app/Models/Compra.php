<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 *
 * @property $id_compra
 * @property $Productoid
 * @property $Productos Comprados
 * @property $Tipo de compra
 * @property $Valor Compra
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @property Proveedor[] $proveedors
 * @property Restaurante[] $restaurantes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compra extends Model
{
    
    static $rules = [
		'id_compra' => 'required',
		'Productoid' => 'required',
		'Productos Comprados' => 'required',
		'Tipo de compra' => 'required',
		'Valor Compra' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_compra','Productoid','Productos Comprados','Tipo de compra','Valor Compra'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id_producto', 'Productoid');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proveedors()
    {
        return $this->hasMany('App\Models\Proveedor', 'Compraid', 'id_compra');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restaurantes()
    {
        return $this->hasMany('App\Models\Restaurante', 'Compraid', 'id_compra');
    }
    

}
