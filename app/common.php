<?php

use think\facade\Route;


if (!function_exists('is_email')) {
    /**
     * @param $email
     * @return bool
     */
    function is_email($email): bool
    {
        return !(filter_var($email, FILTER_VALIDATE_EMAIL) === false);
    }
}

if (!function_exists('is_mobile')) {
    /**
     * @param $mobile
     * @return bool
     */
    function is_mobile($mobile): bool
    {
        $rule = '/^1[3-9]\d{9}$/';

        return is_scalar($mobile) && 1 === preg_match($rule, (string)$mobile);
    }
}

/**
 * 资源文件链接
 * @param $url
 * @return string
 */
function asset($url): string
{
    return request()->root(true) . '/' . ltrim($url, '/') . '?v=' . APP_RELEASE;
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
