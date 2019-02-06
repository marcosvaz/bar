<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Página Inicial
Route::get('/', ['as'=>'index', 'uses'=>'Admin\ImagesController@index']);

// Menu
Route::get('/menu', function () {
    return view('menu');
});

// Galeria
Route::get('/galeria', function () {
    return view('galeria');
});

// Eventos
Route::get('/eventos', function () {
    return view('eventos');
});

// Reservas
Route::get('/programacao', function () {
    return view('programacao');
});

// Contato
Route::get('/contato', function () {
    return view('contato');
});

// WhatsApp JK
Route::get('/whatsappJK', function () {
    return view('whatsappJK');
});

// WhatsApp VM
Route::get('/whatsappVM', function () {
    return view('whatsappVM');
});

// Manutenção
Route::get('/manutencao', function () {
    return view('manutencao');
});

// Newsletter
Route::get('/newsletter', function () {
    return view('newsletter');
});

// Itaim Bibi
Route::get('/itaim', ['as'=>'itaim', 'uses'=>'Admin\ImagesController@itaim']);

// Vila Madalena
Route::get('/vilamadalena', ['as'=>'vilamadalena', 'uses'=>'Admin\ImagesController@vilamadalena']);

/*
|--------------------------------------------------------------------------
| Events Routes
|--------------------------------------------------------------------------
*/

// Eventos Corporativos
Route::get('/eventos/corporativos', function () {
    return view('eventos/corporativos');
});

// Eventos Sociais
Route::get('/eventos/sociais', function () {
    return view('eventos/sociais');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes of application administration.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Página de Administração
Route::get('/admin', function () {
    return view('admin/login');
});
Route::post('/admin', ['uses'=>'Admin\ImagesController@login']);

// Seção
Route::get('/admin/edicao/{id}', ['as'=>'admin.edicao', 'uses'=>'Admin\ImagesController@mostrar']);

// Adicionar
Route::get('/admin/edicao/adicionar/{id}', function ($id) {
    $secao = $id;
    return view('admin/adicionar', compact('secao'));
});
Route::post('/admin/edicao/adicionar/{id}', ['as'=>'admin.adicionar', 'uses'=>'Admin\ImagesController@adicionar']);

// Alterar
Route::get('/admin/edicao/alterar/{id}', ['as'=>'admin.editar', 'uses'=>'Admin\ImagesController@editar']);
Route::put('/admin/edicao/alterar/{id}', ['as'=>'admin.alterar', 'uses'=>'Admin\ImagesController@alterar']);

// Deletar
Route::get('/admin/edicao/deletar/{section}/{id}', ['as'=>'admin.deletar', 'uses'=>'Admin\ImagesController@deletar']);

/*
|--------------------------------------------------------------------------
| Development Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes of application development.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Desenvolvimento
Route::get('/testes', ['as'=>'admin.testes', 'uses'=>'Admin\ImagesController@testes']);

// Manutenção
Route::get('/manutencao', function () {
    return view('errors/manutencao');
});

/*
|--------------------------------------------------------------------------
| Components Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes of application components.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Email / WhatsApp
Route::post('/emailWhatsappJK', ['uses'=>'EmailController@whatsappJK']);

// Email / WhatsAppVM
Route::post('/emailWhatsappVM', ['uses'=>'EmailController@whatsappVM']);

// Email / Reservas
Route::post('/emailReservas', ['uses'=>'EmailController@reserva']);

// Email / Contato
Route::post('/emailContato', ['uses'=>'EmailController@contato']);
