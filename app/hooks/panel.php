<?php

use Com\CodeFive\Example\Controllers\Admin\MainController;

return [
    [
        'type' => 'panel',
        'as' => 'mainPanel',
        'title' => 'Example Plugin',
        'slug' => 'example-plugin-index',
        'icon' => 'dashicons-admin-post',
        'uses' => [MainController::class, 'index'],
    ],
    [
        'type' => 'sub-panel',
        'parent' => 'mainPanel',
        'parent-slug' => 'example-plugin-index',

        'title' => 'Other Panel',
        'as' => 'otherPanel',
        'slug' => 'example-plugin-other',
        'uses' => [MainController::class, 'index'],
        'post' => [
            'anEndpoint' => [MainController::class, 'anEndpoint'],
        ],
        'get' => [
            'anotherEndpoint' => [MainController::class, 'anotherEndpoint'],
        ]
    ]
];