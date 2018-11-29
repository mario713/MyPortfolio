<?php

return  [

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
];