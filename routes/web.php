<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about-me", function () {
    return "Nama Saya <b>Pujo</b>";
});

Route::get("/HOBI", function () {
    return "Game Online";
});

Route::get("/MAKANAN", function () {
    return "Ayam Geprek";
});

Route::get("/STATUS", function () {
    return "Mahasiswa";
});

Route::get("/UNIVERSITAS", function () {
    return "MUHAMMADIYAH KALIMANTAN TIMUR";
});

use App\Http\Controllers\HomeController;

Route::get('/test1/view1', [HomeController::class, "test1"]);
Route::get("/test2/view2", [HomeController::class, "test2"]);
Route::get("/test3/view3", [HomeController::class, "test3"]);
Route::get("/tema/bootstrap", [HomeController::class, "index"]);

use App\Http\Controllers\MeController;

Route::get("/satu/view1", [MeController::class, "satu"]);
Route::get("/dua/view2", [MeController::class, "dua"]);
Route::get("/tiga/view3", [MeController::class, "tiga"]);