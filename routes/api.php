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

//Route::resource('pagos', PagosController::class)->names('pagos');
Route::get('pagos/validate/{id_pago}', [PagosController::class, 'validarPagoPorId']);

Route::get('pagos/delete/{id_pago}', [PagosController::class, 'deletePago']);

Route::post('pagos/update/{pago}', [PagosController::class, 'updatePago']);

Route::post('pagos/insert/{pago}', [PagosController::class, 'insertPago']);