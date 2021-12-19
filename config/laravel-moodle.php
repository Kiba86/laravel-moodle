<?php

return [
    'url'       => env('LM_URL', 'http://url-to-moodle-service.com'),
    'token'     => env('LM_TOKEN', 'Y0uR!tOken'),

    'format'    => env('LM_FORMAT', 'json'),
    //'format'    => env('LM_FORMAT', 'xml'),

    'verify_ssl' => env('LM_VERIFY_SSL', true),
];
