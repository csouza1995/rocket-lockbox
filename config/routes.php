<?php

use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\LogoutController;
use App\Controllers\Auth\RegisterController;
use App\Controllers\DashboardController;
use App\Controllers\IndexController;
use Core\Route;

(new Route())
    ->get('/', IndexController::class)

    ->get('/dashboard', DashboardController::class)

    ->get('/login', [LoginController::class, 'index'])
    ->post('/login', [LoginController::class, 'login'])

    ->get('/logout', LogoutController::class)

    ->get('/register', [RegisterController::class, 'index'])
    ->post('/register', [RegisterController::class, 'register'])

    ->run();
