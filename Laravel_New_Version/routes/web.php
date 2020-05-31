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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

//From the last version

Route::get('/','Indexcontroller@index')->name('index');


Route::get('/bibliotheque','FileController@indexbibl');

Route::get('/etudiant', 'AdminController@afficher_etudiant')->name('etudiant');
Route::get('/professeur', 'AdminController@afficher_professeur')->name('professeur');
Route::get('/demande', 'AdminController@afficher_demande')->name('demande');
Route::get('/filiere', 'AdminController@afficher_filiere')->name('filiere');
Route::get('/cours', 'AdminController@afficher_cours')->name('cours');
Route::get('/departement', 'AdminController@afficher_departement')->name('departement');


Route::resource('/dashbord','AdminController');


//pour ne pas declarer tous les routes , il faut utiliser resource au lieu de get

Route::resource('/user','Usercontroller');

Route::resource('/cour','FileController');

Route::resource('/Field','Fieldcontroller');

Route::resource('/contact','Contactcontroller');
