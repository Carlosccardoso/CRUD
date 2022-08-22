<?php

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/// esse e o R - PEGAR 
Route::get("users",[UsersController::class,"index"]);
/// esse e o C - CRIAR
Route::post("users",[UsersController::class,"create"]);
/// esse e o U - ATUALIZAR  
Route::put("users/{id}",[UsersController::class,"update"]);
/// esse e o D - DELETAR   
Route::delete("users/{id}",[UsersController::class,"delete"]);