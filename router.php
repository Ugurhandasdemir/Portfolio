<?php
$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);

// Statik dosyalar ve repos.json
if (preg_match('/^\/(static\/|repos\.json)/', $path)) {
    $file = __DIR__ . $path;
    if (is_file($file)) {
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $mimeTypes = [
            'css'  => 'text/css',
            'js'   => 'application/javascript',
            'json' => 'application/json',
            'png'  => 'image/png',
            'jpg'  => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif'  => 'image/gif',
            'svg'  => 'image/svg+xml',
            'pdf'  => 'application/pdf',
        ];
        $mime = $mimeTypes[$ext] ?? 'application/octet-stream';
        header("Content-Type: $mime");
        readfile($file);
        return true;
    }
    http_response_code(404);
    echo "Not found: $path";
    return true;
}

// Diğer her şey -> index.php
require __DIR__ . '/api/index.php';