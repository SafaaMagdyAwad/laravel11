<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//git /note 
//git  /note/id
//get  /note/create
//post /note
//get  /note/id/edit
//put  /note/id
//delete /note/id
Route::resource('note',NoteController::class);