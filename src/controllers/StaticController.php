<?php

declare(strict_types=1);

namespace App\Controller;

final class StaticController extends AppController
{
    public function serve(string $path): void
    {
        // Strip the /static/ prefix to get the relative file path.
        $relativePath = substr($path, strlen('/static/'));

        $staticDir = dirname(__DIR__, 2) . '/public/static';
        $filePath = realpath($staticDir . '/' . $relativePath);
        $realStaticDir = realpath($staticDir);

        // Block path traversal: the resolved file must live inside public/static.
        if (
            $filePath === false
            || $realStaticDir === false
            || !str_starts_with($filePath, $realStaticDir . DIRECTORY_SEPARATOR)
            || !is_file($filePath)
        ) {
            http_response_code(404);
            echo 'File not found';
            return;
        }

        $mimeType = mime_content_type($filePath) ?: 'application/octet-stream';

        header('Content-Type: ' . $mimeType);
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
    }
}
