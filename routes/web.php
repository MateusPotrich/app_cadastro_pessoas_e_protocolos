<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return 'Ola, seja bem vindo ao curso';
});
*/
//Rota de login
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('site,login');
//Rota principal
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
//Rota auditoria
Route::get('/auditoria', [\App\http\controllers\AuditoriaController::class, 'auditoria'])->name('site.auditoria');
//Rota sobre-nós
Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
//Rota de contatos
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
//Rota dados do push da auditoria
//Route::get();
//rotas prefixadas, podem ser acessadas mas ficam dentro de uma rota para melhor organização.
/*Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores',[\App\Http\Controllers\FornecedoresController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos';})->name('app.produtos');
});*/

//abaixo uma rota de fallback:
Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para pagina inicial.';
    
});
