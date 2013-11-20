<?php
session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '172.0.0.1',
        'username' => 'root',
        'password' => 'root',
        'db' => 'customer'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800 // time in seconds
    ),
    'session' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    )
);

spl_autoload_register(function($class) {
    require_once 'classes/'.$class.'.php';    
});

require_once 'functions/sanitize.php';