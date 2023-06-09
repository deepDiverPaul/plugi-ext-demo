<?php

return [
    'title' => 'Demo Extension',
    'author' => 'Paul Spenke',
    'licence' => 'MIT',
    'version' => '1.0.0',
    'settings' => [
        [
            'name' => 'foo',
            'default' =>  'bar',
            'type' => 'text',
        ],
        [
            'name' => 'bar',
            'label' => 'Bar',
            'default' =>  'true',
            'type' => 'toggle',
        ]
    ]
];
