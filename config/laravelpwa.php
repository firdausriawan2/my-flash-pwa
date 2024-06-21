<?php

return [
    'name' => 'MyFlash',
    'manifest' => [
        'name' => env('APP_NAME', 'MyFlash'),
        'short_name' => 'MyFlash',
        'description' => 'Your Internet Solution',
        'start_url' => '/',
        "scope" => "/",
        'dir' => 'auto',
        'lang' => 'id',
        'categories' => ['entertainment', 'social'],
        'display' => 'standalone',
        'orientation'=> 'portrait',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        // 'status_bar'=> 'black',
        "generated" => "true",
        'icons' => [
            '72x72' => [
                'path' => 'assets/img/icon/72x72.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => 'assets/img/icon/96x96.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => 'assets/img/icon/128x128.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => 'assets/img/icon/144x144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => 'assets/img/icon/152x152.png',
                'purpose' => 'maskable'
            ],
            '192x192' => [
                'path' => 'assets/img/icon/192x192.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => 'assets/img/icon/384x384.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => 'assets/img/icon/512x512.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => 'assets/img/splash/640x1136.png',
            '750x1334' => 'assets/img/splash/750x1334.png',
            '828x1792' => 'assets/img/splash/828x1804.png',
            '1125x2436' => 'assets/img/splash/1125x2436.png',
            '1242x2208' => 'assets/img/splash/1242x2208.png',
            '1242x2688' => 'assets/img/splash/1242x2688.png',
            '1536x2048' => 'assets/img/splash/1536x2048.png',
            '1668x2224' => 'assets/img/splash/1668x2224.png',
            '1668x2388' => 'assets/img/splash/1668x2388.png',
            '2048x2732' => 'assets/img/splash/2048x2732.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Login',
                'url' => '/login',
                'icons' => [
                    "src" => "assets/img/icon/96x96.png",
                    "sizes" => "96x96",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Home',
                'url' => '/',
                'icons' => [
                    "src" => "assets/img/icon/96x96.png",
                    "sizes" => "96x96",
                    "purpose" => "any"
                ]
            ]
        ],
        'custom' => [
            'screenshots' => [
                [
                    'src' => 'assets/img/screenshots/screenshot 1.png',
                    'sizes' => '1280x800',
                    'type' => 'image/png',
                    'platform' => 'wide',
                    'form_factor' => 'wide'
                ],
                [
                    'src' => 'assets/img/screenshots/screenshot 2.png',
                    'sizes' => '750x1334',
                    'type' => 'image/png',
                    'platform' => 'narrow'
                ]
            ],
        ]
    ]
];
