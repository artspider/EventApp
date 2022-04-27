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
        'apiKey' => env('FIREBASE_API_KEY'),
        'authDomain' => env('FIREBASE_AUTH_DOMAIN'),
        'projectId' => env('FIREBASE_PROJECT_ID'),
        'storageBucket' => env('FIREBASE_STORAGE_BUCKET'),
        'messagingSenderId' => env('FIREBASE_MESSAGING_SENDER_ID'),
        'appId' => env('FIREBASE_APP_ID'),
        'measurementId' => env('FIREBASE_MEASUREMENT_ID'),
    ],

    /* apiKey: "AIzaSyDiMugnZt9Wxf7jqjRwaGAtcXpZw-OggZk",
    authDomain: "coloquio-4c896.firebaseapp.com",
    projectId: "coloquio-4c896",
    storageBucket: "coloquio-4c896.appspot.com",
    messagingSenderId: "865629211055",
    appId: "1:865629211055:web:7a80f20be5be5b03ee075a",
    measurementId: "G-SJ9206RH1R" */

];
