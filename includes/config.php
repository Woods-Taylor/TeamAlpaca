<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'XKCD Pictures',
        'pretty_uri' => false,
        'site_url' => 'https://serversidephp.herokuapp.com/',
        'nav_menu' => [
            '' => 'Home',
            'random' => 'Random Comic',
            'random' => 'Image Gallery'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v1.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
