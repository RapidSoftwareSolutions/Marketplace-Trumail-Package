<?php
$routes = [
    'metadata',
    'verifyEmail'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

