<?php

use App\Http\Controllers\People_Controller;
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


Route::post('sitkowska/310728/add_person',[People_Controller::class,'create']);

Route::put('sitkowska/310728/update_person',[People_Controller::class,'update']);

Route::delete('sitkowska/310728/delete_person',[People_Controller::class,'delete']);

Route::get('sitkowska/310728/get_all',[People_Controller::class,'get_all']);

Route::get('sitkowska/310728/get_person',[People_Controller::class,'get_person']);