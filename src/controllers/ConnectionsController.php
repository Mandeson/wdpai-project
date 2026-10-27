<?php

declare(strict_types=1);

namespace App\Controller;

final class ConnectionsController extends AppController
{
    public function index(): void
    {
        $this->render('connections', [
            'pageTitle' => 'Connections'
        ]);
    }

    public function show(int $id): void
    {
        $this->render('connections', [
            'pageTitle' => 'Connections',
            'connectionId' => $id
        ]);
    }
}
