<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('projects', 'ProjectsController');

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});

Route::controller(TodoController::class)->group(function () {
    Route::get('todos', 'index');
    Route::post('todo', 'store');
    Route::get('todo/{id}', 'show');
    Route::put('todo/{id}', 'update');
    Route::delete('todo/{id}', 'destroy');
}); 

Route::group(['middleware' => ['assign.guard:Users', 'jwt.auth', 'cors']], function () {

    Route::get('auth/me', 'UsersController@me');
    Route::get('auth/logout', 'UsersController@logout');
    Route::post('auth/logout', 'UsersController@logout');
    Route::post('auth/refresh', 'UsersController@refresh');
    Route::post('auth/me', 'UsersController@me');

    Route::macro('resourceGet', function ($uri, $controller) {
        Route::get("{$uri}/get", "{$controller}@get")->name("{$uri}.get");
        Route::resource($uri, $controller);
    });

    Route::post('payments/payerCreditCard', 'ListController@payerCreditCard');
    Route::post('payments/payerCreditCardToken', 'PaymentsController@payerCreditCardToken');
    Route::get('payments/getPaymentByClient/{clientID}', 'PaymentsController@getPaymentByClient');
    Route::get('payments/getPaymentByCreditCard/{creditCardID}', 'PaymentsController@getPaymentByCreditCard');
    Route::resourceGet('payments', 'PaymentsController');

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
