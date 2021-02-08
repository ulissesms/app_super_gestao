<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','PrincipalController@principal')->name ('site.index');

Route::get('/sobre-nos','SobreNosController@index')->name ('site.sobre-nos');

Route::get('/contato', 'ContatoController@index')->name ('site.contato');

Route::get('/login', function () {return 'login';})->name ('site.login');


//rotas agrupadas
Route::prefix('/app')->group(function(){

    Route::get('/clientes', function(){return 'clientes';})->name('app.clientes');

    Route::get('/fornecedores', function(){return 'fornecedores';})->name('app.fornecedores');

    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', "TesteController@teste")->name('app.teste');

//redirecionamentos
Route::get('/rota1', function(){echo 'rota1';})->name('site.rota1');

Route::get('/rota2', function(){return redirect()->route ('site.rota1');})->name('site.rota2');


//rotas alternativas
Route::fallback(function(){
    echo 'A pagina digitada nao existe.<a href="'.route('site.index').'">Clique aqui para voltar para home</a>';
});

//rotas como validacao de parametros
/*Route::get('/contato/{nome}/{categoria_id}',
function(
    string $nome = 'Desconhecido',
    int $categoria_id  =1
){
    echo "Estamos aqui $nome -$categoria_id";
})-> where(
    'categoria_id','[0-9]+'
)-> where('nome','[A-Za-z]+');
*/
