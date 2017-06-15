<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    
    'github' => [
    'client_id' => '0627f20cafd396967fba',
    'client_secret' => '0c72861fe1342cd77545cb2fa79667304ab2ad2f',
    'redirect' => 'homestead.app/retorno/gitHub',
    ],


    'facebook' => [
    'app_id' => '130416944171887',
    'client_secret' => '76ec40416a96c8d20afa0c384f17a0dd',
    'redirect' => 'homestead.app/retorno/facebook',
    ],


];
