<?php

namespace app\service;

use think\facade\Db;

/**
 * Class ViewService
 * @package app\service
 */
class ViewService
{
    /**
     * @param string $pathInfo
     * @return array
     */
    public function render(string $pathInfo): array
    {
        if (empty($pathInfo)) {
            return ['template' => 'index'];
        }

        // DB SELECT
        $data = Db::name('posts')->where('segment', $pathInfo)->findOrEmpty();

        if (empty($data)) {
            return ['template' => 'error'];
        }

        return $data;
    }
}
