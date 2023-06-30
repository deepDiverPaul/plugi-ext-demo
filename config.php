<?php

return [
    'title' => 'Demo Extension',
    'identifier' => 'demo',
    'author' => 'Paul Spenke',
    'licence' => 'MIT',
    'version' => '1.0.0',
    'settings' => [
        [
            'name' => 'foo',
            'label' => 'foo',
            'default' =>  'bar',
            'type' => 'text',
        ],
        [
            'name' => 'bar',
            'label' => 'Bar',
            'default' =>  'true',
            'type' => 'toggle',
        ]
    ],
    'assets' => [
        [
            'src' => '/dist/admin.css',
            'type' => 'style',
            'location' => 'admin-header'
        ],
        [
            'src' => '/dist/public.css',
            'type' => 'style',
            'location' => 'header'
        ]
    ]
];
