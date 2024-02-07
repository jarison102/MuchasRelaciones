<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id_Clientes
 * @property $Nombre
 * @property $Cedula
 * @property $Telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Ventum[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    protected $primaryKey = 'id_Clientes';
    static $rules = [
		'id_Clientes' => 'required',
		'Nombre' => 'required',
		'Cedula' => 'required',
		'Telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Clientes','Nombre','Cedula','Telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Ventum', 'Clienteid', 'id_Clientes');
    }
    

}
