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

    public function deletePago(Pagos $pago)
    {
        $pago->delete();
        return response()->json(null, 204);

    }

    public function updatePago(Request $request, Pagos $pago)
    {
            $pago->update($request->all());
            return response()->json($pago, 200);
   }
}