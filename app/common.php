<?php

use think\facade\Route;

/**
 * 资源文件链接
 * @param $url
 * @return string
 */
function asset($url): string
{
    return request()->root(true) . '/' . ltrim($url, '/') . '?v=' . RELEASE;
}

/**
 * 主题文件链接
 * @param $url
 * @return string
 */
function skin($url): string
{
    return asset('themes/default/' . ltrim($url, '/'));
}

/**
 * Route Rules
 */
function routeRule()
{
    Route::get(':c/:a', ':c/:a');
    Route::post(':c/:a', ':c/:aHandler')->token();
    Route::get(':c', ':c/index');
    Route::get('/', 'Index/index');
}
