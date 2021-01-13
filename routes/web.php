<?php

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
Route::get('/', 'ppcontroller@index' ); 


Route::get('/menu', 'ppcontroller@loadMenu');
    /*
     Pinapasa nitong route yung function na loadMenu() galing sa 'ppcontroller' papuntang view natin na 'menu'.
    */

Route::get('/menu/{id}', 'ppcontroller@viewItemDetails' ); 

Route::get('/cart', 'ppcontroller@loadCart');