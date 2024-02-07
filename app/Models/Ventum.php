<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ventum
 *
 * @property $id_venta
 * @property $Clienteid
 * @property $Nombre
 * @property $Tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Producto[] $productos
 * @property Restaurante[] $restaurantes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ventum extends Model
{
    
    static $rules = [
		'id_venta' => 'required',
		'Clienteid' => 'required',
		'Nombre' => 'required',
		'Tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_venta','Clienteid','Nombre','Tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id_Clientes', 'Clienteid');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'Ventaid', 'id_venta');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restaurantes()
    {
        return $this->hasMany('App\Models\Restaurante', 'Ventaid', 'id_venta');
    }
    

}
