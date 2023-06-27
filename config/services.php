<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyARVBfYrgzY1tufSYnkhzvuNzI4z2SG-rM',
        'auth_domain' => 'cards-adf1b.firebaseapp.com',
        'database_url' => 'https://cards-adf1b-default-rtdb.firebaseio.com',
        'project_id' => 'cards-adf1b',
        'storage_bucket' => 'cards-adf1b.appspot.com',
        'messaging_sender_id' => '758532800149',
        'app_id' => '1:758532800149:web:fcc574086f32ba4d5e659c',
        'measurement_id' => 'G-MSDB9NBEJR',
    ],

];
