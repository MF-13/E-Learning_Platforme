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


Auth::routes();

//From the last version

Route::get('/','Indexcontroller@index')->name('index');

Route::get('/bibliotheque','FileController@indexbibl');

/* path de coter admin */
Route::get('/cours', 'AdminController@afficher_cours')->name('cours');
Route::get('/cours_traitement', 'classeController@create_cours')->name('Cours Traitement');

Route::get('/etudiant', 'AdminController@afficher_etudiant')->name('etudiant');
Route::get('/professeur', 'AdminController@afficher_professeur')->name('professeur');
Route::get('/user_traitement', 'AdminController@user_traitement');
Route::get('/change_picture', 'UserController@change_picture')->name('change');


Route::get('/demande', 'AdminController@afficher_demande')->name('demande');

Route::get('/filiere', 'AdminController@afficher_filiere')->name('filiere');
Route::get('/filiere_traitement', 'AdminController@filiere_traitement');

Route::get('/Cour_Add', 'AdminController@Cour_Add');

Route::get('/departement', 'AdminController@afficher_departement')->name('departement');

Route::get('/message', 'AdminController@afficher_message')->name('message');
Route::get('/new_message', 'AdminController@create_message');

Route::get('/Comments', 'AdminController@afficher_comment')->name('comment');

Route::resource('/classe','ClasseController');


Route::resource('/dashbord','AdminController');

Route::get('/request','RequestController@destroy')->name('request');

//pour ne pas declarer tous les routes , il faut utiliser resource au lieu de get

Route::resource('/user','Usercontroller');

Route::resource('/cour','FileController');

Route::resource('/Field','Fieldcontroller');

Route::resource('/contact','Contactcontroller');

Route::resource('/Message_boite','Messagecontroller');

Route::resource('/cour/quiz','Quizcontroller');

Route::resource('/result','Resultcontroller');

Route::resource('/comment','CommentController');

Route::resource('/request','RequestController');

