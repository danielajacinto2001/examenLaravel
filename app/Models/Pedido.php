<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    protected $fillable = [
        'cliente_id',
        'total',
        'estado',
    ];

    //pertenece a un cliente
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    //tiene muchos productos
    public function productos(){
        return $this-> belongsToMany(Producto::class, 'pedido_producto')
                    -> withPivot('cantidad','precio_unitario')
                    ->withTimestamps();
    }
    
}
