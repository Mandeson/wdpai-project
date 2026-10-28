<?php

declare(strict_types=1);

namespace App\Controller;

final class RegisterController extends AppController
{
    public function index(): void
    {
        $this->render('register', [
            'pageTitle' => 'Register'
        ]);
    }
}
