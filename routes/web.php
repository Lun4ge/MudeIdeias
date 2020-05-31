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

Route::get('/contacto', function () {
    return view('mais.contacto');
});

Route::get('/ondeEstamos', function () {
    return view('mais.ondeEstamos');
});

Auth::routes();
Route::get('/administracao', 'backOffice@index')->name('Administração');

// Route::group(['middleware' => ['auth']], function(){
    // Route::resource('', '');
   
    // Route::group(['middleware' => ['admin']], function () {
      Route::get('marcas', 'backOffice@MarcaIndex');
      Route::post('marcas/criar', 'backOffice@MarcaStore');
      Route::delete('marcas/{id}', 'backOffice@MarcaDestroy');

      Route::get('imagens', 'backOffice@ImagemIndex');
      Route::post('imagens/criar', 'backOffice@ImagemStore');
      Route::delete('imagens/{id}', 'backOffice@ImagemDestroy');

      Route::get('mensagens', 'backOffice@MensagemIndex');

      Route::get('pedidos', 'backOffice@PedidoIndex');

      Route::get('enviados', 'backOffice@EnviadoIndex');

    // });
//   });