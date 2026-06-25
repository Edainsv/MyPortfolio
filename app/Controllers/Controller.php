<?php

namespace App\Controllers;

abstract class Controller
{
    protected function view(string $view, array $data = []): void
    {
        extract($data);

        ob_start();

        require APP_PATH . "/app/Views/{$view}.php";

        $content = ob_get_clean();

        require APP_PATH . "/app/Views/layouts/base.php";
    }
}
