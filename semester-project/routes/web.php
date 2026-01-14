<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('login');
});


Route::middleware('auth')->group(function () {

    Route::get('/etudiant/dashboard', function () {
        if (auth()->user()->role !== 'etudiant') {
            abort(403);
        }
        return view('etudiant.dashboard');
    })->name('etudiant.dashboard');

    Route::get('/professeur/dashboard', function () {
        if (auth()->user()->role !== 'professeur') {
            abort(403);
        }
        return view('professeur.dashboard');
    })->name('professeur.dashboard');

    Route::get('/admin/dashboard', function () {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }
        return view('admin.dashboard');
    })->name('admin.dashboard');


    Route::get('/dashboard', function() {
        $role = auth()->user()->role;

        return match($role) {
            'etudiant' => redirect()->route('etudiant.dashboard'),
            'professeur' => redirect()->route('professeur.dashboard'),
            'admin' => redirect()->route('admin.dashboard'),
            default => redirect('/'),
        };
    })->name('dashboard');
});


require __DIR__.'/auth.php';
