<?php

use function Cake\Core\env;

return [
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),

    'Security' => [
        'salt' => 'b1a2c3d4e5f67890123456789abcdef0123456789abcdef0123456789abcdef0',
    ],

    'Datasources' => [
        'default' => [
            'host' => 'localhost',
            'username' => 'root',       // សម្រាប់ XAMPP ជាទូ立った root
            'password' => '',           // សម្រាប់ XAMPP ជាទូទៅគ្មាន password ទេ ទុកទว่าง
            'database' => 'my_cake_db', // ប្តូរជាឈ្មោះ Database ដែលអ្នកបានបង្កើតក្នុង phpMyAdmin
            'url' => env('DATABASE_URL', null),
        ],

        'test' => [
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'test_myapp',
            'url' => env('DATABASE_TEST_URL', 'sqlite://127.0.0.1/tmp/tests.sqlite'),
        ],
    ],

    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];