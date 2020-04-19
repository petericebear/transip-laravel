<?php

return [

    /*
    |--------------------------------------------------------------------------
    | TransIP Laravel Wrapper
    |--------------------------------------------------------------------------
    |
    */

    'login' => env('TRANSIP_LOGIN'),

    'privateKey' => env('TRANSIP_PRIVATE_KEY'),

    'generateWhitelistOnlyTokens' => env('TRANSIP_WHITELIST_ONLY', true),

];