<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/','Indexcontroller@index')->name('index');
// Route::get('/filiere','Filierecontroller@index');
// Route::get('/cour','Courcontroller@index');//
Route::get('/bibliotheque','Bibliothequecontroller@index');//
Route::get('/contact','Contactcontroller@index');//



//pour ne pas declarer tous les routes , il faut utiliser resource au lieu de get

Route::resource('/user','Usercontroller');

Route::resource('/cour','Courcontroller');

Route::resource('/filiere','Filierecontroller');


//Route::resource('/user','Usercontroller')->only(['index','show']); pour utiliser seulement les methodes definire dans only
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('index');


// Route::get('/poste' , function (){
//     return view('users.login');
// });