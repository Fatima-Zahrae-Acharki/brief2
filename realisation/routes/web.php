<?php

use App\Http\Controllers\apprenticesController;
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


// ----------------------------------end of promotions-------------------






//-----------------------------------start of apprentices --------------------------------


// Route::post('insert', [apprenticesController::class, 'insert_student'])->name('insert');

// Route::get('/test', [apprenticesController::class, 'show_student']);


// Route::get('edit/edit/{id}', [apprenticesController::class, 'edit_student']); 
// Route::post('edit/update/{id}', [apprenticesController::class, 'update_student']);


// Route::get('edit/delete/{id}', [apprenticesController::class, 'delete_student']);


// Route::get('search', [apprenticesController::class, 'search']);
// Route::get('search/{searchResult}', [apprenticesController::class, 'search']);