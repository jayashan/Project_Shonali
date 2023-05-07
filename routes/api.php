<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalBotController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'api',  'middleware' => 'api'], function() {
    Route::post('coinbase/webhook', '\Shakurov\Coinbase\Http\Controllers\WebhookController')->name('coinbase-webhook');
});

Route::match(['get', 'post'], '/botman', GlobalBotController::class);