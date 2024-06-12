<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KritikController;


Route::get('/',[HomeController::class,'index']);

Route::get('/Experience', function () {
    return view('JobExperience', [
        "title" => "Job Experience", "Job" => "PT.FKA Global" ,
    ]);
});

Route::get('/Profile', function () {
    return view('Profile', ["title" => "Profile"]);
});

Route::get('/Masukan',[KritikController::class,'Kritik']);
Route::post('/Masukan',[KritikController::class,'isiKritik'])->name('kritik.send');

Route::get('/Latarbelakang', function () {
    return view('Latarbelakang', ["title" => "Background"]);
});