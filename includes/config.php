<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'DVD Zilla',
        'site_url' => '/dvd-zilla',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Strona główna',
            'formularz-klienta' => 'Klienci',
            'produkty' => 'Produkty',
            'wypozyczenia' => 'Wypozyczanie',
            'panel' => 'Panel zarzadzania',
            'kontakt' => 'Kontakt',
        ],
        'template_path' => 'template',
        'content_path' => 'content',

        'db' => [
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'database' => 'wypozyczalnia'
        ],

        'version' => '0.1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
