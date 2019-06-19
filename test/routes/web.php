<?php

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
    dd(\App\Category::all());
    //return view('welcome');
    //echo("Que pso?");
});

//Route::get('/saludar','CalculatorController@index');

Route::get('/saludar/{name}','CalculatorControll@index');

Route::get('/categories','categoriescontroller@index');

Route::get('/cars','CarsController@index');

Route::get('/reservation','CarsController@reservation');

Route::get('/categories','CarsController@categories')->name('categories');

//{pluralized_emtity}        -> GET (listados)
//{pluralized_emtity}        -> POST (guarda)
//{pluralized_emtity}/create -> GET (formulario planear)
//{pluralized}/{id}          -> GET (detalle)
//{pluralized}/{id}          -> DELETE (elimina)
