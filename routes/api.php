<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyApi;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data/{id?}",[dummyApi::class, 'getData']);
Route::post("postdata/",[dummyApi::class, 'postData']);
Route::put("putdata/{id}",[dummyApi::class, 'putData']);
Route::delete("deletedata/{id}",[dummyApi::class, 'deleteData']);





