<?php

error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

date_default_timezone_set('America/Chicago');

require_once dirname(__DIR__) . '/src/EI/EdgeCases/ThatsJustSilly.php';
require_once __DIR__ . '/EI/Tests/ExampleException.php';
