<?php

namespace App\Controllers\Auth;

use App\Models\User;
use Core\Database;
use Core\Validator;

class LoginController
{
    public function index()
    {
        return view('auth.login', layout: 'auth');
    }

    public function login()
    {
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

            return view('auth.login', layout: 'auth');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $database = new Database(config('database'));

        $user = $database
            ->query(
                'SELECT * FROM users WHERE email = :email',
                compact('email'),
                User::class
            )
            ->fetch();

        if (!$user || !password_verify($password, $user->password ?? '')) {
            session()::flash('message::error', 'Invalid credentials');
            return redirect('login');
        }

        session()::set('auth', $user);
        return redirect('/dashboard');
    }
}
