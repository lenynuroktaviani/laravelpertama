<?php
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

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
route::get('', [cobaController::class, "index"]);
//route::get('/friends', [cobacontroller::class, "index"]);
//route::get('/friends/create', [cobacontroller::class, "create"]);
//route::post('/friends', [cobacontroller::class, "store"]); 
//route::post('/friends/store', [cobacontroller::class, "store"]);
//route::get('/friends/{id}', [cobacontroller::class, "show"]);
//route::get('/friends/{id}/edit', [cobacontroller::class, "edit"]);
//route::put('/friends/{id}', [cobacontroller::class, "update"]);
//route::delete('/friends/{id}', [cobacontroller::class, "destroy"]); 

Route::resources([
    'friends' => CobaController::class,
    'groups' => GroupsController::class,
]);