<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/







route::get("/comics/create", [ComicController::class, "create"])->name("comics.create");
route::post("/", [ComicController::class, "store"])->name("comics.store");


Route::get("/", [ComicController::class, "index"])->name("comics.index");
Route::get("/comic/{comic}", [ComicController::class, "show"])->name("comics.show");
