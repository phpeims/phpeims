<?php

const APP_NAME = 'PHPEIMS';
const APP_VERSION = 'v1.0.0';
const APP_RELEASE = '20210520';
const ADMIN_PATH = 'admin';

$_ENV = require_once __DIR__ . '/../config.inc.php';

return new think\App();
