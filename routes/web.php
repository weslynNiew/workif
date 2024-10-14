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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

        Route::get('esqueci-senha','LoginController@esqueciSenha')->name('esqueci-senha.index');
        Route::post('esqueci-senha','LoginController@enviarToken')->name('esqueci-senha.token');
        Route::get('reset-password/{token}/{email}','LoginController@redefinirSenha')->name('esqueci-senha.redefinir');
        Route::put('reset-password','LoginController@alterarSenha')->name('esqueci-senha.perform');

    });

    Route::group(['middleware' => ['auth']], function () {

        Route::get("/bater-ponto",
            "BaterPontoController@index")->name("bater-ponto.index");
        Route::get("/bater-ponto/bater",
            "BaterPontoController@store")->name("bater-ponto.bater");
        Route::get("/bater-ponto/fechar",
            "BaterPontoController@fechar")->name("bater-ponto.fechar");

        Route::get("/visualizar-frequencia/{usuario}",
            "VisualizarFrequenciaController@index")->name("visualizar-frequencia.index");
        Route::get("/visualizar-frequencia/buscar/{usuario}",
            "VisualizarFrequenciaController@buscar")->name("visualizar-frequencia.buscar");
        Route::get("/visualizar-frequencia/relatorio/{usuario}/{mes}","VisualizarFrequenciaController@relatorio")->name("visualizar-frequencia.relatorio");
        Route::post('ponto-ocorrencia/salvar',"VisualizarFrequenciaController@salvarOcorrencia")->name('ponto-ocorrencia.salvar');
        Route::get('ponto-ocorrencia.criar/{dia}/{mes}/{ano}',"VisualizarFrequenciaController@criarOcorrencia")->name('ponto-ocorrencia.criar');

        Route::get('horarios/{usuario}',"HorariosController@index")->name('horarios.index');
        Route::get("/horarios/{usuario}/criar","HorariosController@criarHorarios")->name("horarios.criar");
        Route::get("/horarios/{horario}/edit","HorariosController@edit")->name("horarios.edit");
        Route::post("/horarios/update","HorariosController@update")->name("horarios.update");

        Route::get("/users",
            "UsersController@index")->name("users.index");
        Route::get('/users/create',
            'UsersController@create')->name('users.create');
        Route::post("/users/create",
            "UsersController@store")->name("users.store");
        Route::delete("/users/{user}/delete",
            "UsersController@destroy")->name("users.destroy");
        Route::get("/users/{users}/show",
            "UsersController@show")->name("users.show");
        //abrir o formulario
        Route::get("/users/{users}/edit",
            "UsersController@edit")->name("users.edit");
        //salvar novos dados - update
        Route::patch("/users/{users}/update",
            "UsersController@update")->name("users.update");

        Route::get("/usuario/{id}/frequencia",
            "FrequenciaUsuarioController@index")->name("users.frequencia");

        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });

});





