<?php declare(strict_types=1);

use Gepanel\Middleware\CORSMiddleware;
use Slim\App;

function registerMiddleware(App $app)
{
    $app->addRoutingMiddleware();
    $app->addBodyParsingMiddleware();
    $app->addErrorMiddleware($_ENV["ALIAS"] !== "prod", true, true);

    $app->add(CORSMiddleware::class);
}