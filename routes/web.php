<?php

use App\Http\Controllers\ElectionController;
use App\Http\Controllers\ElecteurController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegionController;

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

Route::get('/', [ElectionController::class, "elections"])->name('elections');
Route::get("/electeurs", [ElecteurController::class, "electeurs"])->name("electeurs");
Route::get("/inscription", [AuthController::class, "inscription"])->name("inscription");
Route::prefix("/region")->name("region.")->controller(RegionController::class)->group(function(){
    Route::get("/", "index")->name("index");
    Route::get("/create", "create")->name("create");
    Route::post("/store", "store")->name("store");
    Route::get("/{region}/edit", "edit")->name("edit")->where(["region"=>"[0-9]+"]);
    Route::post("/{region}/update", "update")->name("update")->where(["region"=>"[0-9]+"]);
    Route::get("/{region}/delete", "destroy")->name("destroy")->where(["region"=>"[0-9]+"]);

});

