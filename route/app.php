<?php

use think\facade\Route;

foreach (config('route.mapper') as $module => $prefix) {
    Route::group($prefix, function () {
        routeRule();
    })->prefix($module . '.');
}

Route::group(function () {
    Route::get('[:segment]', 'Index/index');
})->prefix('web.');
