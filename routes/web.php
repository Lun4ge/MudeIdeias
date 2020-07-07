<?php

use App\Mail\enviarorcamentos;
use Illuminate\Support\Facades\Route;
use App\Orcamentosenviados;
use Illuminate\Support\Facades\Mail;



Route::get('/', 'backOffice@home');
Route::get('/home', 'backOffice@home');

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

Route::get('/ondeEstamos', function () {
    return view('mais.ondeEstamos');
});

// Route::get('/pedidoOrcamentos', function () {
//     return view('pedidoOrcamentos');

Route::get('portfolio/identidadevisual', 'backOffice@Identidade');
Route::get('portfolio/viaturas', 'backOffice@Viaturas');
Route::get('portfolio/montras', 'backOffice@Montras');
Route::get('portfolio/lonas', 'backOffice@Lonas');
Route::get('portfolio/placas', 'backOffice@Placas');
Route::get('portfolio/sinaletica', 'backOffice@Sinaletica');
Route::get('portfolio/texteis', 'backOffice@Texteis');
Route::get('portfolio/bandeiras', 'backOffice@Bandeiras');

Auth::routes();
Route::post('mensagens/criar', 'backOffice@MensagemStore');

Route::group(['middleware' => ['auth']], function(){
    Route::get('pedidos/criar', 'backOffice@PedidoCreate');
    Route::post('pedidos/criar', 'backOffice@PedidoStore');

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/administracao', 'backOffice@MensagemIndex')->name('Administração');

      Route::get('marcas', 'backOffice@MarcaIndex');
      Route::post('marcas/criar', 'backOffice@MarcaStore');
      Route::delete('marcas/{id}', 'backOffice@MarcaDestroy');

      Route::get('imagens', 'backOffice@ImagemIndex');
      Route::post('imagens/criar', 'backOffice@ImagemStore');
      Route::delete('imagens/{id}', 'backOffice@ImagemDestroy');
      Route::post('imagens/estado/{id}', 'backOffice@ImagemState');
      Route::get('imagens/procurar', 'backOffice@ImagemSearch');

      Route::get('mensagens', 'backOffice@MensagemIndex');
      Route::delete('mensagens/{id}', 'backOffice@MensagemDestroy');

      Route::get('pedidos', 'backOffice@PedidoIndex');
      Route::get('pedidos/{id}/unico','backOffice@PedidoIndexIndi');

      Route::get('enviados', 'backOffice@EnviadoIndex');
      Route::post('enviados/{id}/criar','backOffice@EnviadoStore');

    //   Route::get('/mail',function(){
    //   Mail::send('admin.mail', ['naointeressa' => 'teste1'] , function ($message) {
    //       $message->from('automailmudedideias@gmail.com', 'John Doe');
    //       $message->to('rafaelxomega@gmail.com', 'John Doe');
    //     }); });

    Route::get('/mail', function() {
       Mail::to('rafaelxomega@gmail.com')->send(new App\Mail\enviarorcamentos);
    });

    });
  });