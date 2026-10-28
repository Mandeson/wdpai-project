<?php

declare(strict_types=1);

namespace App\Controller;

final class BookController extends AppController
{
    public function show(int $id): void
    {
        if ($id !== 1) {
            http_response_code(404);
            $this->render('not-found', [
                'pageTitle' => 'Nie znaleziono strony',
            ]);
            return;
        }

        $this->render('book-cabin', [
            'pageTitle' => 'Book a cabin',
        ]);
    }
}
