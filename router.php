<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
  case '/':
    header('Content-Type: text/html; charset=UTF-8');
    readfile(__DIR__ . '/public/index.html');
    break;
  case '/global.css':
    header('Content-Type: text/css');
    readfile(__DIR__ . '/public/global.css');
    break;
  case '/client.js':
    header('Content-Type: text/javascript');
    readfile(__DIR__ . '/public/client.js');
    break;
  default:
    require 'vendor/autoload.php';
    header('Content-Type: application/json');
    require __DIR__ . $request . '.php';
    break;
}