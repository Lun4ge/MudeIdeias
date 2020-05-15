<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/administracao', 'backOffice@index')->name('Administração');

// Route::group(['middleware' => ['auth']], function(){
    // Route::resource('', '');
   
    // Route::group(['middleware' => ['admin']], function () {
      Route::get('marcas', 'backOffice@MarcaIndex');
      Route::get('marcas/criar', 'backOffice@MarcaCreate');
      Route::post('marcas/criar', 'backOffice@MarcaStore');

      Route::get('imagens', 'backOffice@ImagemIndex');
      Route::get('imagens/criar', 'backOffice@ImagemCreate');
      Route::post('imagens/criar', 'backOffice@ImagemStore');

      Route::get('mensagens', 'backOffice@MensagemIndex');

      Route::get('pedidos', 'backOffice@PedidoIndex');

      Route::get('enviados', 'backOffice@EnviadoIndex');

    // });
//   });