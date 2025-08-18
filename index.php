<?php
declare(strict_types=1);

if (!file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'autoloader.php')) {
    die('Autoloader not found!');
}

require_once(__DIR__ . DIRECTORY_SEPARATOR . 'autoloader.php');

use Object\classes\UserAuthorization;

$auth = new UserAuthorization();

echo $auth->authorization('appLogin', 'app12345') . PHP_EOL;
echo $auth->authorization('mobileLogin', 'mobile12345') . PHP_EOL;
echo $auth->authorization('incorrectLogin', 'incorrectPass') . PHP_EOL;
