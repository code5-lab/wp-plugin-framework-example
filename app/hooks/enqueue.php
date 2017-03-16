<?php
/**
 * Available variables:
 * $context = plugin name
 * */
return [
    [
        'place' => 'site', //values: admin|site|login
        'as' => 'main_style',
        'position' => 'footer', //optional |values: footer|head | default: head
        'src' => 'style.css',
        'external' => false //optional | default: false
    ],
    [
        'place' => 'site', //values: admin|site|login
        'as' => 'main_script',
        'position' => 'footer', //optional |values: footer|head | default: head
        'src' => 'main.js',
        'localize' => [
            'translatable' => __('Translatable String', 'example-plugin')
        ],
        'external' => false //optional | default: false
    ]
];