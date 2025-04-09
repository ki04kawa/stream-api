<?php

namespace App\Http\Controllers;

use Generator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedJsonResponse;

class MainController extends Controller
{
    public function index(): StreamedJsonResponse
    {
        return response()->streamJson([
            'elements' => $this->yieldElement(),
        ]);
    }

    protected function yieldElement(): Generator
    {
        for ($order = 0; $order < 100; $order++) {
            yield [
                'order' => $order,
            ];

            ob_flush();
            flush();

            // 1000ms
            usleep(100000);
        }
    }

}
