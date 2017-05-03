<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/menu', 'MenuController@index')->name('menu');

Route::resource('/orders', 'OrderController');
Route::post('/orders/status', 'OrderController@update_status' );





Route::group(['middleware' => 'acl'], function() {

    Route::group(['group_name' => 'Admin'], function () {
        // Controllers Within The "App\Http\Controllers\Admin" Namespace
        $routes = [
             ['settings','SettingsController@index', 'Settings', 'get'],
             ['settings','SettingsController@save', 'Settings_Save', 'post'],

             ['profit_loss_report','HomeController@index', 'Profit Loss Report','get'],
             ['audit_trail','HomeController@index', 'Audit Trail', 'get'],
             ['sales','HomeController@index', 'Sales', 'get'],
             ['orders','HomeController@index', 'Orders', 'get'],
            ];

        $resource = [
            'user',
            'task'
        ];

        foreach($routes as $route) {
            $method = $route[3];
            Route::$method($route[0], $route[1])->name($route[2]);
        }

        Route::resource('users', 'UserController', [
                'names' => ['index'  => 'User List'], 
                'only' => ['index']
            ]
        );

        Route::resource('ingredients', 'IngredientController', [
                'names' => ['index'  => 'Ingredients List'], 
                'only' => ['index']
            ]
        );

        Route::resource('recipies', 'RecipieController', [
                'names' => ['index'  => 'Recipies List'], 
                'only' => ['index']
            ]
        );


        Route::group(['group_name', 'no_index'], function() {
            Route::resource('users', 'UserController', [ 
                    'except' => ['index']
                ]
            );

            Route::resource('ingredients', 'IngredientController', [ 
                    'except' => ['index']
                ]
            );

            Route::resource('recipies', 'RecipieController', [ 
                    'except' => ['index']
                ]
            );
        });
    });


    Route::group(['group_name' => 'Supplier'], function () {
        // Controllers Within The "App\Http\Controllers\Admin" Namespace
    });


    Route::group(['group_name' => 'Cook'], function () {
        // Controllers Within The "App\Http\Controllers\Admin" Namespace
    });

    Route::group(['group_name' => 'Waiter'], function () {
        // Controllers Within The "App\Http\Controllers\Admin" Namespace
    });

    Route::get('/api_auth', 'HomeController@api_auth')->name('api_auth');



});

Route::get('/unauth', function() {
    return view('unauth');
});
