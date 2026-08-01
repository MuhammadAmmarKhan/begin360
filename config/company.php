<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Company Profile Configuration
    |--------------------------------------------------------------------------
    |
    | This file holds general contact and identification details for the
    | company. Values are fetched from the .env file with safe defaults.
    |
    */

    'name' => env('COMPANY_NAME', 'BEGIN360 PTY LTD'),

    'email' => env('COMPANY_EMAIL', 'info@begin360.com.au'),

    'phone' => env('COMPANY_PHONE', '+61 403 481 768'),

    'whatsapp' => env('COMPANY_WHATSAPP', '+61 403 481 768'),

    'abn' => env('COMPANY_ABN', '96 687 885 963'),

    'address' => env('COMPANY_ADDRESS', '26 Lyrebird Cres Green Valley NSW'),

    'social' => [
        'facebook' => env('SOCIAL_FB', 'https://www.facebook.com/begin360'),
        'linkedin' => env('SOCIAL_LI', 'https://linkedin.com/company/begin360'),
    ],

];
