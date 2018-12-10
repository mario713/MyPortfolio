<?php

return [
    'top' => [
        ['name' => 'Main Page', 'icon' => 'iHome', 'url' => '/', 'active' => true],
        ['name' => 'News', 'icon' => 'iBlog', 'url' => '/news', 'active' => false],
        ['name' => 'Tutorials', 'icon' => 'iDocs', 'url' => '/', 'active' => false],
        ['name' => 'Tools', 'icon' => 'iTools', 'url' => '/tools', 'active' => false],
        ['name' => 'Resources', 'icon' => 'iFiles', 'url' => '/resources', 'active' => true],
        ['name' => 'Portfolio', 'icon' => 'iPortfolio', 'url' => '/', 'active' => false],
        ['name' => 'Contact', 'icon' => 'iContact', 'url' => '/contact', 'active' => true]
    ],

    'admin' => [
        ['name' => 'Main Settings', 'class' => 'main', 'url' => '/admin', 'active' => false, 'submenu' => [
            ['name' => 'Manage Menu', 'url' => '/admin/menu'],
        ]],
        ['name' => 'Home Page', 'class' => 'home', 'url' => '/admin/homepage', 'active' => true],
        ['name' => 'News', 'class' => 'news', 'url' => '#', 'active' => true, 'submenu' => [
            ['name' => 'Add News', 'url' => '/admin/news/add'],
            ['name' => 'Manage News', 'url' => '/admin/news/manage'],
            ['name' => 'Categories', 'url' => '/admin/news/categories'],
        ]],
        ['name' => 'Tutorials', 'class' => 'tutorials', 'url' => '/admin', 'active' => false],
        ['name' => 'Tools', 'class' => 'tools', 'url' => '/admin', 'active' => false],
        ['name' => 'Resources', 'class' => 'resources', 'url' => '/admin/resources', 'active' => true],
        ['name' => 'Portfolio', 'class' => 'portfolio', 'url' => '/admin', 'active' => false],
        ['name' => 'Contact', 'class' => 'contact', 'url' => '/admin/contact', 'active' => true],
        ['name' => 'Logs', 'class' => 'logs', 'url' => '#', 'active' => true, 'submenu' => [
            ['name' => 'Login', 'url' => '/admin/logs/login'],
            ['name' => 'Register', 'url' => '/admin/logs/register'],
            ['name' => 'User', 'url' => '/admin/logs/user'],
            ['name' => 'Security', 'url' => '/admin/logs/security'],
        ]],
        ['name' => 'Users', 'class' => 'user', 'url' => '/admin', 'active' => false]
    ],

    'settings' => [
        ['name' => 'User Info', 'class' => 'dash', 'url' => '/settings', 'active' => true],
        ['name' => 'Pass Change', 'class' => 'login', 'url' => '/settings/passchange', 'active' => true]
    ],
    ];