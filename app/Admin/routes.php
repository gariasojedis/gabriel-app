<?php

use App\Admin\Controllers\CursoController;
use App\Admin\Controllers\EstudianteController;
use App\Admin\Controllers\MateriaController;
use App\Admin\Controllers\ParaleloController;
use Illuminate\Routing\Router;


Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('Curso', CursoController::class);
    $router->resource('Estudiante', EstudianteController::class);
    $router->resource('Paralelo', ParaleloController::class);
    $router->resource('Materia', MateriaController::class);
  
});
