<?php
$CONFIG = [
        'memcache.local' => '\\OC\\Memcache\\Redis',
        'memcache.distributed' => '\\OC\\Memcache\\Redis',
        'memcache.locking' => '\\OC\\Memcache\\Redis',
        'redis' => [
                'host' => 'cloud_redis',
                'port' => 6379,
        ],
];
