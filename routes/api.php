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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function () {

    Route::get('/swagger', 'ApiController@swagger');    
    Route::post('/login', 'ApiController@login');    
    Route::post('/register', 'ApiController@register');    
    Route::get('/banner/all', 'ApiController@allBanner');
    Route::get('/category/all', 'ApiController@allCategory');
    Route::get('/category/parent', 'ApiController@parentCategory');
    Route::get('/product/all', 'ApiController@allProduct');
    Route::get('/product/featured', 'ApiController@featuredProduct');
    Route::get('/product/hot', 'ApiController@hotProduct');
    Route::get('/post/all', 'ApiController@allPost');
    Route::get('/settings', 'ApiController@settings');
});
