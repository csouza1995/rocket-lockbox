<?php

use Core\Session;

// autoload
require "../autoload.php";
require "../Core/functions.php";

// start session
Session::start();

// routes
require base_path('config/routes.php');
