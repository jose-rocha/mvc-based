<?php

use Spatie\Ignition\Ignition;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
$showDisplayException = $_ENV['SHOW_DISPLAY_EXCEPTION_DEV'];

Ignition::make()
->shouldDisplayException($showDisplayException)
->setTheme('dark')->register();



require __DIR__ . '/../routes/web.php';
