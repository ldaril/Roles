<?php

namespace TypiCMS\Modules\Roles\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'TypiCMS\Modules\Roles\Http\Controllers';

    /**
     * Define the routes for the application.
     *
     * @return null
     */
    public function map()
    {
        Route::group(['namespace' => $this->namespace], function (Router $router) {

            /*
             * Admin routes
             */
            $router->group(['middleware' => 'admin', 'prefix' => 'admin'], function(Router $router) {
                $router->get('roles', 'AdminController@index')->name('admin::index-roles');
                $router->get('roles/create', 'AdminController@create')->name('admin::create-role');
                $router->get('roles/{role}/edit', 'AdminController@edit')->name('admin::edit-role');
                $router->post('roles', 'AdminController@store')->name('admin::store-role');
                $router->put('roles/{role}', 'AdminController@update')->name('admin::update-role');
            });

            /*
             * API routes
             */
            $router->group(['middleware' => 'api', 'prefix' => 'api'], function(Router $router) {
                $router->get('roles', 'ApiController@index')->name('api::index-roles');
                $router->put('roles/{role}', 'ApiController@update')->name('api::update-role');
                $router->delete('roles/{role}', 'ApiController@destroy')->name('api::destroy-role');
            });
        });
    }
}
