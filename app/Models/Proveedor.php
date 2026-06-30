<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    Use HasFactory;

    protected $table = 'proveedores';

    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'direccion',
    ];

    //1:M -> UN PROVEEdor TIENE MUCHOS PEDIDOS
    public function pedidos(){
        return $this->hasMany(Producto::class);
    }
}
