<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::view('/', 'welcome')->name('home');

Route::get('/conditions-generales-utilisation', function () {
    return view('legal.show', [
        'title' => 'Conditions generales d utilisation',
        'markdown' => Str::markdown(file_get_contents(base_path('cgu.md'))),
    ]);
})->name('legal.cgu');

Route::get('/conditions-generales-vente', function () {
    return view('legal.show', [
        'title' => 'Conditions generales de vente',
        'markdown' => Str::markdown(file_get_contents(base_path('cgv.md'))),
    ]);
})->name('legal.cgv');


Route::get('/conditions-generales-cookies', function () {
    return view('legal.show', [
        'title' => 'Conditions generales de cookies',
        'markdown' => Str::markdown(file_get_contents(base_path('cookies.md'))),
    ]);
})->name('legal.cookies');
