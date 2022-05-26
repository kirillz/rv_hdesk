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

    define('INVOICE_STATUS_DRAFT', 1);
    define('INVOICE_STATUS_SENT', 2);
    define('INVOICE_STATUS_VIEWED', 3);
    define('INVOICE_STATUS_APPROVED', 4);
    define('INVOICE_STATUS_PARTIAL', 5);
    define('INVOICE_STATUS_PAID', 6);
    define('INVOICE_STATUS_OVERDUE', -1);
    define('INVOICE_STATUS_UNPAID', -2);
}
