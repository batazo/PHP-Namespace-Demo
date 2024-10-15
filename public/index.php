<?php

require_once '../autoload.php';

use App\Controller\TestController;
use App\Service\XyService;

echo TestController::Hello() . " ";
echo XyService::exampleService();
