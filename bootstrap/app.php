<?php

const APP_NAME = 'PHPEIMS';
const VERSION = 'v1.0.0';
const RELEASE = '20210520';
const ADMIN_PATH = 'admin';

$_ENV = [
    'APP_DEBUG' => in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']),
];

return new think\App();
