<?php

declare(strict_types=1);

/**
 * This file is part of MaxPHP.
 *
 * @link     https://github.com/marxphp
 * @license  https://github.com/marxphp/max/blob/master/LICENSE
 */

return [
    'default' => 'file',
    'stores'  => [
        'file'      => [
            'handler' => 'Max\Cache\Handlers\FileHandler',
            'options' => [
                'path' => __DIR__ . '/../runtime/cache/app',
            ],
        ],
        'redis'     => [
            'handler' => 'Max\Cache\Handlers\RedisHandler',
            'options' => [
                'connector' => 'Max\Redis\Connectors\BaseConnector',
                'config'    => [],
            ],
        ],
        'memcached' => [
            'handler' => 'Max\Cache\Handlers\MemcachedHandler',
            'options' => [
                'host' => '127.0.0.1', // 主机
                'port' => 11211,        // 端口
            ],
        ],
    ],
];
