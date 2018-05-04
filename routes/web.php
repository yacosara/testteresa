<?php

// rutas
Route::get('galeria',function(){return view('galeria');});
Route::get ('/bienvenido/{nombre}/{apodo?}',  'WelcomeUserController');

// rutas del modelo de USUARIO 
Route::get('/usuarios/detalles/{detalle}','UserController@viewNoNro');
Route::get('/usuarios/dato/{id}','UserController@dato') ;
Route::get('/usuarios', 'UserController@index')->name('usuario.index') ;
Route::get('/usuarios/create','UserController@create')->name('usuario.create');
Route::post('/usuarios/save','UserController@save')->name('usuario.save');
Route::get('usuarios/{user}/edit','UserController@edit')->name('usuario.edit');
Route::put('usuarios/{user}/update','UserController@update')->name('usuario.update');
Route::delete('usuarios/{user}', 'UserController@destroy')->name('usuario.delete');

Route::get('/usuarios/{id}','UserController@vista')->where( 'id' , '[0-9]+')->name('usuario.show');

Route::post('/usuarios/login', 'UserController@ingresosistema')->name('usuario.ingresosistema') ;

// RUTAS DEL RESIDENTE 
Route::get ('/residentes','ResidenteController@index')->name('residente.index'); 

// menu principal del sitio 

Route::get('/',function(){return view('welcome');});

Route::get('/home',function(){return view('welcome');});

Route::get('nosotros',function(){return view('nosotros');});

Route::get('/servicios','ServiciosController@service');

Route::get('recursos',function(){return view('recursos');});

Route::get('blog',function(){return view('blog');});

Route::get('contacto',function(){return view('contacto');});

Route::get('gestion/login',function(){return view('login');});


