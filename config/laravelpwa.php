<?php

return [
    'name' => 'Rafa Cake & Bakery - CPSG62',
    'manifest' => [
        'name' => env('Rafa Cake & Bakery - CPSG62', 'Rafa Store'),
        'short_name' => 'Rafa Store',
        'start_url' => '/',
        'background_color' => '#fc3ba4',
        'theme_color' => '#fc3ba4',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '48x48' => [
                'path' => '/images/icons/icon-48x48.png',
                'purpose' => 'any'
            ],
            '72x72' => [
                'path' => '/images/icons/icon-72x72.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/images/icons/icon-96x96.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/images/icons/icon-144x144.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/images/icons/icon-192x192.png',
                'purpose' => 'any'
            ],
        ],
        'shortcuts' => [
            [
                'name' => 'Shortcut Link 1',
                'description' => 'Shortcut Link 1 Description',
                'url' => '/shortcutlink1',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
        ],
        'custom' => []
    ]
];
