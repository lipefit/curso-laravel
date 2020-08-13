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

Route::delete('/products/{id}/delete', 'ProductController@destroy')->name('products.destroy');
Route::put('/products/{id}/update', 'ProductController@update')->name('products.update');
Route::post('/products/store', 'ProductController@store')->name('products.store');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');
Route::get('/products', 'ProductController@index')->name('products.index');

Route::get('/admin/login', function () {
    return "Login";
})->name("login");

//Exemplo de grupo de rotas para auth
/*
Route::middleware([])->group(function(){
    //Grupo com prefixo
    Route::prefix("admin")->group(function(){
        // Grupo com namespace
        Route::namespace("Admin")->group(function(){
            Route::get('/', "TesteController@dashboard");
            
            Route::get('/clientes', "TesteController@clientes");

            Route::get('/produtos', "TesteController@produtos");
            
        });
        
    });
    
});


Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () { 
    Route::get('/', "TesteController@dashboard");
            
    Route::get('/clientes', "TesteController@clientes");

    Route::get('/produtos', "TesteController@produtos");
});
// Fim de grupo de rotas

//Exemplo de rota nomeada e chamada
Route::get('rota-nomeada', function () {
    return 'Rota nomeada';
})->name('nomeada');

Route::get('redirect3', function () {
    return redirect()->route("nomeada");
});

Route::redirect('/redirect1', '/redirect2', 301);
//Route::get('redirect1', function () {
//    return redirect("/redirect2");
//});

Route::get('redirect2', function () {
    return "redirect2";
});

Route::get('opcional/{opc?}', function ($opc = '') {
    // Rota com parametro opcional
    return "Opcional: {$opc}";
});

Route::get('/categoria/{cat}', function ($cat) {
    // Rota com parametro obrigatório
    return "Categoria: {$cat}";
});

Route::match(['get', 'post'], '/match', function () {
    // Com Match é possível especificar os tipos de requisição
    return "Match";
});

Route::any('/any', function () {
    // Any aceita qualquer tipo de requisição
    return "Any";
});

Route::get('/contato', function () {
    return "Página de contato";
});

Route::get('/', function () {
    return view('welcome');
});
*/
Route::view('/', 'welcome');

