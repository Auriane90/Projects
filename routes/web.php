<?php





// Página linha do Tempo


Route::get('/linhaDoTempo', 'SuporteControle@linhaDoTempo');

Route::post('/criarlinha', 'SuporteControle@criarlinha');

Route::post('/alterarlinha/{id}', 'SuporteControle@alterarlinha');

Route::get('/excluirlinha/{id}', 'SuporteControle@excluirlinha');


//página de sistemas

Route::get('/sistemas', 'SuporteControle@sistemas');

Route::post('/criarSistema', 'SuporteControle@criarSistema');

Route::post('/alterarSistemas/{id}', 'SuporteControle@alterarSistemas');

Route::get('/excluirSistema/{id}', 'SuporteControle@excluirSistema');



// Página atendimentos

Route::get('/atendimentos', 'SuporteControle@atendimentos');

Route::post('/alterarAtendimentos/{id}', 'SuporteControle@alterarAtendimentos');

// Página Technews

Route::get('/technews', 'SuporteControle@technews');

Route::post('/criarTechnews', 'SuporteControle@criarTechnews');

Route::post('/alterarTechnews/{id}', 'SuporteControle@alterarTechnews');

Route::get('/excluirTechnews/{id}', 'SuporteControle@excluirTechnews');

// Página fca

Route::get('/fac', 'SuporteControle@fac');

Route::post('/criarFac', 'SuporteControle@criarFac');

Route::post('/alterarFac/{id}', 'SuporteControle@alterarFac');

Route::get('/excluirFac/{id}', 'SuporteControle@excluirFac');

// Página Nosso Time

Route::get('/nossoTime', 'SuporteControle@nossoTime');

Route::post('/criarNossoTime', 'SuporteControle@criarNossoTime');

Route::post('/alterarNossoTime/{id}', 'SuporteControle@alterarNossoTime');

Route::get('/excluirNossoTime/{id}', 'SuporteControle@excluirNossoTime');


Route::get('/', 'SuporteControle@index');

Route::get('/ola', function(){
    return view('layout.teste');
});

Route::get('/tabela', function(){
    return view('layout.tabela');
});

Route::get('/tabela2', function(){
    return view('layout.tabela2');
});

