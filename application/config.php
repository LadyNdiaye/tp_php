<?php
// Configuration du framework FPL
define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_ACTION', 'index');
define('SITE_ROOT', 'http://localhost/teamup/application/');

// Bundle Bootstrap
$bootstrap = [
    'css' => [
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
        '../themes/default/style.css'
    ],
    'scripts' => [
        'https://code.jquery.com/jquery-3.7.0.min.js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'
    ]
];
?>