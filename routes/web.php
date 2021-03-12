<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\AuthorController;


Route::get('/', [NavController::class, 'index']);
Route::get('/list', [NavController::class, 'list']);
Route::get('/listAuteur', [NavController::class, 'listAuteur']);

Route::get('/ajouterPersonnage', [NavController::class, 'ajoutcharacter']);
Route::post('/addCharacter', [CharacterController::class, 'add']);

Route::get('/ajouterDessinateur', [NavController::class, 'ajoutauthor']);
Route::post('/add', [AuthorController::class, 'add']);

Route::get("/update/{id}", [NavController::class, 'update']);
Route::post("/update", [CharacterController::class, 'update']);

Route::post("/delete", [CharacterController::class, 'delete']);

Route::get("/updateAuthor/{id}", [NavController::class, 'updateAuthor']);
Route::post("/updateAuthor", [AuthorController::class, 'update']);

Route::post("/delete", [AuthorController::class, 'delete']);