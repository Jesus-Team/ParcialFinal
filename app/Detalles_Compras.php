<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalles_Compras extends Model
{
    protected $table = 'detalles_compras';

    protected $fillable =
    [
        'compra_id','proveedor_producto_id','cantidad','valor_unitario'
    ];

    protected $hidden = [
        'id','created_at','updated_at',
    ];

    public function compra(){
        return $this->belongsTo('App\Compra');
    }

    public function proveedor_producto(){
        return $this->belongsTo('App\Proveedores_Productos');
    }
}
