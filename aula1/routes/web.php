<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/quem-somos', function () {
    return view('quemSomos');
});
