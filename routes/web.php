<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TargetController;
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

Route::get('inicio', function () {
    return json_encode(array('inicio' => 'Valor 1'));

});


Route::post('inicio', function () {
    return json_encode(array('inicio' => 'Valor 1'));

});

Route::get('democontroller','DemoController@pokemon');

Route::get('democontroller2','DemoController@pokemon2');

// Route::get('index','TargetController@index');
Route::get('index','TargetController@data');


//eliminar point de target
Route::get('index/{id}','TargetController@delete')->name('index');
//end

Route::get('create','TargetController@create');
Route::post('create','TargetController@store');
Route::get('create','TargetController@data');

Route::get('edit/{target}','TargetController@edit') ;
Route::put('edit/{target}','TargetController@update');


//delete para create
Route::get('create/{id}','TargetController@deleteC')->name('create');


// Route::get('index','TargetController@index', function () {

//     $notes = DB::table('targets')->get();
//     return json_encode(array('inicio' => $notes));

    
    
  
// });