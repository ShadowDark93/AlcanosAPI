<?php

namespace App\Http\Controllers;

use App\Models\Pagos;
use App\Http\Requests\StorePagosRequest;
use App\Http\Requests\UpdatePagosRequest;

class PagosController extends Controller
{
    public function validarPagoPorId($id){
        $validar = Pagos::findorfail($id);
        if($validar){
            return "pago encontrdo";
        } else {
            return "pago no encontrado";
        }
    }

    public function deletePago($id){
        $validar = Pagos::findorfail($id);
        if($validar){
        $validar->delete();
        return "pago eliminado";
        } else {
        return "pago no encontrado";
        }
    }

    public function pagarFacturaVigente(Request $request){
        return $request;
    }

}