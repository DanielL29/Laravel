<?php
Route::get('/produtos/{idProduct?}', function($idProduct = ''){
    return "Produto(s) {$idProduct}";
});


Route::get('/categorias/{flag}', function ($flag) {
    return "produtos da categoria: {$flag}";
});


Route::match(['get', 'post'], '/match', function (){
    return 'Match';
});


Route::any('/any', function(){
    return 'Any';
});


Route::get('/empresa', function() { 
    return view('contact');
});

Route::get('/teste', function() { 
    return 'teste';
});

Route::get('/', function () {
    return view('welcome');
});

#post
#get
#any