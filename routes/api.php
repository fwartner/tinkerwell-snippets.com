<?php

Route::apiResource('snippets', 'Api\Snippets\SnippetController');
Route::apiResource('categories', 'Api\Categories\CategoryController');
Route::post('clients', 'Api\Clients\ClientController@createClient');
