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

use Illuminate\Http\Request;

/** Retornando uma view */
Route::get('/', function () {
    return view('welcome');
});

/** Retornando uma tag HTML */
Route::get('/teste', function () {
    return "<h1> Está é uma página de teste de roterização </h1>";
});

/**
 * Recebendo parametros da url
 * Retornando os parametros recebido da url
 */
Route::get('/param/{param1}/{param2}', function ($param1, $param2) {
    return "<h1> Parametro 1: $param1 </h1><br><h2>Parametro 2: $param2</h2> ";
});

/**
 * Recebendo parametros da url
 * Retornando os parametros recebido da url
 */
Route::get('/repetir/{nome}/{n}', function ($nome, $n) {
    for ($i = 0; $i < $n; $i++) {
        echo "<h1> Nome: $nome </h1>";
    }
});

/**
 * Recebendo parametros da url
 * Retornando os parametros recebido da url
 * Restringindo tipos de parametros na url(regex)
 */
Route::get('/restringir/{nome}/{n}', function ($nome, $n) {
    for ($i = 0; $i < $n; $i++) {
        echo "<h1> Nome: $nome </h1>";
    }
})->where('n', '[0-9]+');

/**
 * Recebendo parametros da url
 * Retornando os parametros recebido da url
 * Parametros opcionais
 */
Route::get('/opcional/{nome?}', function ($nome = null) {
    if (isset($nome)) {
        echo "<h1> Nome: $nome </h1>";
    } else {
        echo "Sem parametro.";
    }
});

/**
 * Agrupando rotas
 */
Route::prefix('/app')->group(function () {
    Route::get('/', function () {
        return "Página principal";
    });
    Route::get('/profile', function () {
        return "Página de perfil";
    });
    Route::get('/about', function () {
        return "Página sobre ";
    });
});

/**
 * Redirecionamento de rotas
 */
Route::redirect('/', '/teste', 301);

/** Retornando uma view
 * o promeiro parâmetro é o nome da url
 * o Segundo parâmetro é o nome da view. ex.: resources/views/welcome.blade.php
 */
Route::view('/hello', 'hello');

/**
 * Passando parâmetros para a view
 */
Route::view('/person', 'person', ['name' => 'Lucas', 'last_name' => 'Alexandre']);

/**
 * Recebendo parametros da url e passando para a view
 */
Route::get('/person/{name}/{last_name}', function ($name, $last_name) {
    return view('person', ['name' => $name, 'last_name' => $last_name]);
});

/**
 * Recebendo parametros da url pelo método post
 */
Route::post('/person/create', function (Request $req) {
    $name = $req->input('name');
    $last_name = $req->input('last_name');
    return "Criar pessoa com nome: $name e sobrenome: $last_name";
});

/**
 * Retornando um mesmo resultado para  2 diferentes métodos
 */
Route::match(['get', 'post'], 'person/list', function () {
    return "Lista de pessoa cadastradas";
});

/**
 * Retornando um mesmo resultado para  qualquer métodos
 * Nomeando uma rota
 */
Route::any('person/info', function () {
    return "Informações de pessoas";
})->name('info');

/**
 * Chamando uma rota nomeada
 */
Route::get('person/info-link', function () {
    echo "<a href=\"" . route('info') . "\"> Pessoas - Informações</a>";
});

/**
 * Redirecionando para uma rota nomeada
 */
 Route::get('person/info-redirect', function () {
     return redirect()->route('info');
 });
