<?php

use App\Note;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', function() {
    $notes = Note::all();
    return view('notes/list', compact('notes'));
});

Route::post('notes', function() {
    return "Creating a note";
});

Route::get('notes/create', function() {
   return view('notes/create'); 
});*/

Route::get('notes/create', 'NotesController@create');

Route::get('notes', 'NotesController@index');

Route::post('notes/create', 'NotesController@store');

Route::get('notes/{note}', 'NotesController@show')->where('note', '[0-9]+');
 
 
