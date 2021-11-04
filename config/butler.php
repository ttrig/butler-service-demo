<?php

use App\Health\TeapotCheck;

return [

    'service' => [

        'extra' => [
            'config' => [
                'trustedproxy.proxies' => [
                    '172.16.0.0/12', // IPs used by docker internally
                ],
            ],
        ],

    ],

    'health' => [

        'checks' => [
            TeapotCheck::class,
        ],

    ],

];
