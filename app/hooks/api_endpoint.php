<?php


use Com\CodeFive\Example\Controllers\AnApiController;

return [
    [
        'name' => 'some_endpoint',
        'public' => true, //optional | default: false
        'rewrite' => [ //optional | default {domain}/wp-admin/admin-ajax.php?action=some_endpoint
            'prefix' => true, //optional | default:true | example: {domain}/plugin-name/api/{endpoint_name}
            'rule' => '/message/([0-9]+)/?', //optional | example: parent/([0-9]+)/?
            'match_names' => ['m'],//optional | will be available in $_REQUEST|$_GET|$_POST
            'order' => 'top'//optional | default: top | values: top|bottom
        ],
        'uses' => [AnApiController::class, 'handler'],
    ]
];