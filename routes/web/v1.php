<?php

use Illuminate\Support\Facades\Route;

[
    $controllers,
    $prefix,
    $as,
    $middleware,
] = Base::getRouteConfigFromRepo(repo: \Callmeaf\ProductCategory\App\Repo\Contracts\ProductCategoryRepoInterface::class);

Route::resource($prefix, $controllers['product_category'])->middleware($middleware);
// Route::prefix($prefix)->as($as)->middleware($middleware)->controller($controllers['product_category'])->group(function () {
    // Route::get('trashed/list', 'trashed');
    // Route::prefix('{product_category}')->group(function () {
        // Route::patch('/status', 'statusUpdate');
        // Route::patch('/type', 'typeUpdate');
        // Route::patch('/restore', 'restore');
        // Route::delete('/force', 'forceDestroy');
    // });
// });
