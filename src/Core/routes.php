<?php declare(strict_types=1);

use Slim\App;

function registerRoutes(App $app)
{
    // CORS Pre-Flight OPTIONS Request Handler
    $app->options('/{routes:.*}', function ($request, $response) { return $response; });

}