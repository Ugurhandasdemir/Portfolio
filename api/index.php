<?php
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

// Case study sayfası (frontend olduğu gibi servis edilir, değiştirilmez)
if ($path === '/project_details.html' || rtrim($path, '/') === '/project_details') {
    header('Content-Type: text/html; charset=utf-8');
    readfile(__DIR__ . '/../project_details.html');
    return;
}

// Ana sayfa
require __DIR__ . '/../Base/templates/home.php';
