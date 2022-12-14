<?php

use App\Http\Controllers\crudController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test', function () {
    return view('test');
});

Route::post('insert', [crudController::class, 'insert'])->name('insert');

Route::get('/test', [crudController::class, 'show']);



Route::get('edit/{id}', [crudController::class, 'edit_promotion']); 
Route::post('update/{id}', [crudController::class, 'update']);

// Route::get("delete/{id}", [crudController::class, 'delete']);
Route::get('delete/{id}', [crudController::class, 'delete']);
// Route::delete('delete/{id}',array('test' => 'crudController@destroy', 'as' => 'test'));
Route::get('search', [crudController::class, 'search']);
Route::get('search/{searchResult}', [crudController::class, 'search']);
