<?php

// Константы

if (!defined('APP_NAME')) {
    define('APP_NAME', env('APP_NAME', 'Revive HDESK'));
    define('APP_DOMAIN', env('APP_DOMAIN', 'http://localhost'));
    define('CONTACT_EMAIL', env('MAIL_FROM_ADDRESS'));
    define('CONTACT_NAME', env('MAIL_FROM_NAME'));
    define('SITE_URL', env('APP_URL'));
    define('DB_CONNECTION', env('DB_CONNECTION', 'sqlite'));
    define('DB_FOREIGN_KEYS', env('DB_FOREIGN_KEYS', 'true'));
    define('FACTORY_COUNT', env('FACTORY_COUNT', 10));
}
