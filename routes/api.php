<?php

use App\Http\Controllers\PagosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pagos/validate/{id_pago}', [PagosController::class, 'validarPagoPorId']);

Route::post('pagos/insert/{pago}', [PagosController::class, 'insertPago']);

Route::delete('pagos/delete/{id_pago}', [PagosController::class, 'deletePago']);

Route::put('pagos/update/{pago}', [PagosController::class, 'updatePago']);