<?php

require __DIR__ . "/vendor/autoload.php";

use \App\Controller\Pages\Home;

$obRequest = new \App\Http\Request;

$obResponse = new \App\Http\Response(200, 'Olá Mundo');

echo "<pre>";
print_r($obResponse);

echo "</pre>";

exit;
echo Home::getHome();