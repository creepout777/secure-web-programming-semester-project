<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/dashboard', function(){
    return view('admin.dashboard');
});
Route::get('/professeur/dashboard', function(){
    return view('professeur.dashboard');
});
Route::get('/etudiant/dashboard', function(){
    return view('etudiant.dashboard');
});