<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'fecha','descripcion',
    ];

    protected $hidden = [
        'id','created_at','updated_at','proveedor_id',
    ];

    public function proveedor(){
        return $this->belongsTo('App\Proveedor');
    }

    public function detalles_compras(){
        return $this->hasMany('App\Detalles_Compras');
    }
}
