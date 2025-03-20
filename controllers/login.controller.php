<?php

use App\Models\User;
use Core\Validator;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validator = Validator::validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ], $_POST, [
        'email' => 'E-mail',
        'password' => 'Password',
    ]);

    if (!$validator->isValid()) {
        session()::flash('errors', $validator->getErrors());
        session()::flash('old', $_POST);

        // to be safe, we don't want to expose the fact that the email or password is incorrect
        session()::flash('message::error', 'Invalid credentials');

        redirect('login');
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $database
        ->query(
            'SELECT * FROM users WHERE email = :email',
            compact('email'),
            User::class
        )
        ->fetch();

    if (!$user || !password_verify($password, $user->password ?? '')) {
        session()::flash('message::error', 'Invalid credentials');
        redirect('login');
    }

    session()::set('auth', $user);
    redirect('/');
}

view('login', [], 'auth');
