<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/quemsomos', function () {
    return view('mais.quemsomos');
});

Route::get('/oquefazemos', function () {
    return view('mais.oquefazemos');
});

Route::get('/contacto','backOffice@contacto');

Route::get('/ondeEstamos', function () {
    return view('mais.ondeEstamos');
});

Route::get('home', 'backOffice@home');
Auth::routes();
Route::post('mensagens/criar', 'backOffice@MensagemStore');

Route::group(['middleware' => ['auth']], function(){

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/administracao', 'backOffice@MensagemIndex')->name('Administração');

      Route::get('marcas', 'backOffice@MarcaIndex');
      Route::post('marcas/criar', 'backOffice@MarcaStore');
      Route::delete('marcas/{id}', 'backOffice@MarcaDestroy');

      Route::get('imagens', 'backOffice@ImagemIndex');
      Route::post('imagens/criar', 'backOffice@ImagemStore');
      Route::delete('imagens/{id}', 'backOffice@ImagemDestroy');

      Route::get('mensagens', 'backOffice@MensagemIndex');
      Route::delete('mensagens/{id}', 'backOffice@MensagemDestroy');

      Route::get('pedidos', 'backOffice@PedidoIndex');

      Route::get('enviados', 'backOffice@EnviadoIndex');

    });
  });