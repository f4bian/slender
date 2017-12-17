<?php

use App\Controllers\HomeController;

$app->get('/', HomeController::class . ':index');

$app->get('/about', function ($request, $response) {
  return 'about me';
});
