<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'stock',
        'precio',
        'categoria_id',
        'proveedor_id',

    ];
    //pertenece a un proveedor
    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }
    //muchos pedidos
    public function pedidos(){
        return $this->belongsToMany(Pedido::class, 'pedido_producto')
                    ->withPivot('cantidad', 'precio_unitario')
                    ->withTimestamps();
    }
    //pertenece a una categoria
    public function categoria(){
        return $this ->belongsTo(Categoria::class);
    }
}
