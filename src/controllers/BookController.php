<?php

declare(strict_types=1);

namespace App\Controller;

final class BookController extends AppController
{
    public function show(int $id): void
    {
        switch ($id) {
            case 1:
                $this->render('book-cabin', [
                    'pageTitle' => 'Book a cabin',
                ]);
                return;
            case 2:
                $this->render('book-details', [
                    'pageTitle' => 'Booking details',
                ]);
                return;
            default:
                http_response_code(404);
                $this->render('not-found', [
                    'pageTitle' => 'Nie znaleziono strony',
                ]);
        }
    }
}
