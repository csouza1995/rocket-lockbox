<?php

use Core\Database;

require 'autoload.php';
require "Core/functions.php";

$database = new Database(require "config/database.php");

// get params from command line
$name = array_values(array_filter($argv, function ($arg) {
    return strpos($arg, '--name=') !== false;
}))[0] ?? false;

$name = $name !== false ? (int) explode('=', $name)[1] : 0;

if (!$name) {
    $name = 'main';
}

// check if seeder exists
if (!file_exists(base_path('/database/seeders/' . $name . '.seeder.php'))) {
    echo 'Seeder not found' . PHP_EOL;
    exit;
}

// require seeder
require base_path('/database/seeders/' . $name . '.seeder.php');

echo 'Seeder executed successfully' . PHP_EOL;
