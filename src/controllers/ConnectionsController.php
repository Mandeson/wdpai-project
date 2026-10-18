<?php

declare(strict_types=1);

namespace App\Controller;

final class ConnectionsController extends AppController
{
    public function index(): void
    {
        $this->render('connections', [
            'pageTitle' => 'Connections',
            'cost1' => 51,
            'cost2' => 42
        ]);
    }

    public function show(int $id): void
    {
        $this->render('connections', [
            'pageTitle' => 'Connections',
            'connectionId' => $id,
            'cost1' => 51,
            'cost2' => 42
        ]);
    }
}
