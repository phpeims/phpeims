<?php

const APP_NAME = 'PHPEIMS';
const APP_VERSION = 'v1.0.0';
const APP_RELEASE = '20210520';
const ADMIN_PATH = 'admin';

$app = new think\App();

$app->env->set('APP_DEBUG', in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));

return $app;
