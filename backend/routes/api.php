<?php

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

Route::middleware('auth:sanctum')->get('/v1/user', function (Request $request) {
    return $request->user();
});

// ログイン
Route::match(
    ['post',],
    'v1/login',
    [\App\Http\Controllers\LoginController::class, 'switchHttpRequest']
);

// Userの登録
Route::match(
    ['post', 'put'],
    'v1/register',
    [\App\Http\Controllers\AuthController::class, 'switchHttpRequest']
);

// 記事に関わるエンドポイント
Route::match(
    ['get'],
    'v1/article',
    [\App\Http\Controllers\ArticleController::class, 'switchHttpRequest']
);

// 記事に関わるエンドポイント
Route::match(
    ['post', "put", "delete"],
    'v1/article',
    [\App\Http\Controllers\ArticleController::class, 'switchHttpRequest']
)->middleware('auth:sanctum');


// サンプル
Route::match(
    ['get', 'post', "put", "delete"],
    'v1/user',
    [\App\Http\Controllers\AuthController::class, 'switchHttpRequest']
)->middleware('auth:sanctum');
