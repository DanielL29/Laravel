<?php

Route::get('/teste', function() { 
    return 'teste';
});

Route::get('/', function () {
    return view('welcome');
});
