<?php

namespace App\Http\Controllers;

use App\Models\Pagos;
use Illuminate\Http\Request;


class PagosController extends Controller
{
    public function validarPagoPorId($id)
    {
        $pago = Pagos::findorfail($id);
        if ($pago) {
            return response()->json($pago, 201);
        }
    }

    public function insertPago(Request $request)
    {
        $pago = Pagos::create($request->all());
        return response()->json($pago, 201);
    }

    public function deletePago($id)
    {
        $pago = Pagos::findorfail($id);
        if ($pago) {
            $pago->delete();
            return response()->json($pago, 201);
        }
    }


    public function updatePago(Request $request)
    {
        $pago = Pagos::findorfail($request->id);

        if ($pago) {
            $pago->update($request->all());
            return response()->json($pago, 201);
        }
    }
}