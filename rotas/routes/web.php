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
 * Restringindo tipos de parametros na url
 */
Route::get('/restringir/{nome}/{n}', function ($nome, $n) {
    for ($i = 0; $i < $n; $i++) {
        echo "<h1> Nome: $nome </h1>";
    }
})->where('n', '[0-9]+');
