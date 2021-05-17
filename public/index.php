<?php declare(strict_types=1);

use Gepanel\Core\App;

define("ROOT_DIR", dirname(__DIR__));
define("SRC_DIR", ROOT_DIR . "/src");
define("RELATIVE_BASE_DIR", basename(dirname(ROOT_DIR)) . "/" . basename(ROOT_DIR));

require ROOT_DIR . "/vendor/autoload.php";

$app = new App();

$app->setup();

$app->start();
