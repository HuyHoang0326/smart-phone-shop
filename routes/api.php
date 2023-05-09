<?php

use App\Http\Controllers\api\OrderOriginApiController;
use App\Http\Controllers\auth\LoginClientController;
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
Route::middleware(['client'])->group(function(){
    Route::post('order_origin/add',[OrderOriginApiController::class,'store'])->name('route_api_Backend_Order_Origin_Add');
});
