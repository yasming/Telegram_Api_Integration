<?php

use App\Http\Controllers\Api\TelegramController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/get-updates-from-bot/{token}', [TelegramController::class, 'getUpdatesFromBot'])->name('api.updates-from-bot');
Route::post('/set-webhook', [TelegramController::class, 'setWebhook']);
Route::post('/delete-webhook', [TelegramController::class, 'deleteWebhook']);


