<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditsliderController;
use App\Http\Controllers\EditproductController;
use App\Http\Controllers\EditeventController;
use App\Http\Controllers\EditwwdController;
use App\Http\Controllers\EdittestimoniController;



use App\Http\Controllers\SateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/editslider/{}', [EditsliderController::class, 'indexscroll']);
Route::post('/sliderstore/{y}', [EditsliderController::class, 'store']);
Route::post('/sliderupdate/{id}/{y}', [EditsliderController::class, 'update']);
Route::get('/deleteslider/{id}', [EditsliderController::class, 'destroy']);

// Route::resource('/edit', EditproductController::class);
// Route::get('/editproduct/{}', [EditproductController::class, 'indexscroll']);
Route::post('/productstore/{y}', [EditproductController::class, 'store']);
Route::post('/productupdate/{id}/{y}', [EditproductController::class, 'update']);
Route::get('/deleteproduct/{id}', [EditproductController::class, 'destroy']);


Route::post('/eventstore/{y}', [EditeventController::class, 'store']);
Route::post('/eventupdate/{id}/{y}', [EditeventController::class, 'update']);
Route::get('/deleteevent/{id}', [EditeventController::class, 'destroy']);

Route::post('/wwdstore/{y}', [EditwwdController::class, 'store']);
Route::post('/wwdupdate/{id}/{y}', [EditwwdController::class, 'update']);
Route::get('/deletewwd/{id}', [EditwwdController::class, 'destroy']);

Route::post('/testimonistore/{y}', [EdittestimoniController::class, 'store']);
Route::post('/testimoniupdate/{id}/{y}', [EdittestimoniController::class, 'update']);
Route::get('/deletetestimoni/{id}', [EdittestimoniController::class, 'destroy']);



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/content',[SateController::class, 'index']);
Route::get('/',[SateController::class, 'index']);

Route::get('/edit', [SateController::class, 'indexedit']);
Route::get('/edit/{y}', [SateController::class, 'indexeditscroll']);


