<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_cliente',
        'id_factura',
        'feha_pago',
        'valor',
        'estado'
    ];
}