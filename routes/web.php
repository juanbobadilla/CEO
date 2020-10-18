<?php



Route::group(['middleware'=>'auth'], function(){
	Route::livewire('/','home')->name('home')->middleware('auth');
	//rutas para el modulo de suscripciones, ingreso de terceros
	Route::livewire('/suscripciones/terceros','tercero')->name('terceros');
});

Route::group(['middleware'=>'guest'], function(){
	Route::livewire('/login','login')->name('login');
	Route::livewire('/registro','registro')->name('registro');
});


