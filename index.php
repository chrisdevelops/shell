<?php

require_once __DIR__ . '/bootstrap.php';

use App\Shell\Logger;
use App\Shell\Request;
use App\Shell\Session;
use App\Shell\Terminal;

$post = $_POST ?? [];
$get = $_GET ?? [];
$server = $_SERVER ?? [];
$session = new Session($_SESSION);
$request = new Request($post, $get, $server, $session);

$filePath = __DIR__ . '/data/' . env('TERMINAL_FILE', 'terminal.json');
$logger = new Logger($filePath);

$terminal = new Terminal($request, $logger, env('APP_THEME', 'default'));


$terminal->init();
$terminal->output();
die;
