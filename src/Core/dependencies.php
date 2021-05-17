<?php declare(strict_types=1);

date_default_timezone_set("America/Sao_Paulo");

error_reporting(E_ERROR | E_PARSE);

use Slim\Factory\AppFactory;
use DI\Container;

function registerDependencies()
{
    $container = new Container();

    AppFactory::setContainer($container);

    return $container;
}