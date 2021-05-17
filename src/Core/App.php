<?php declare(strict_types=1);

namespace Gepanel\Core;

use Dotenv\Dotenv;
use Slim\App as SlimApp;
use Slim\Factory\AppFactory;

class App
{

    /**
     * @var SlimApp
     */
    public $slimApp;

    public function setup()
    {
        require "dependencies.php";
        require "middleware.php";
        require "routes.php";

        $this->loadEnv();

        registerDependencies();

        $this->slimApp = AppFactory::create();
        $this->slimApp->setBasePath("/" . RELATIVE_BASE_DIR);
        
        registerMiddleware($this->slimApp);
        registerRoutes($this->slimApp);
    }

    public function loadEnv(): bool
    {
        $dotenv = Dotenv::createImmutable(ROOT_DIR);
        return !empty($dotenv->load());
    }

    public function start()
    {
        $this->slimApp->run();
    }

}