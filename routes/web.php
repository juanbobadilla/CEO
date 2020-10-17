<?php


Route::livewire('/','home')->name('home');
Route::livewire('/login','login');

//rutas para el modulo de suscripciones, ingreso de terceros
Route::livewire('/suscripciones/terceros','tercero')->name('terceros');