<?php

namespace App\Controllers\Auth;

use App\Models\User;
use Core\Database;
use Core\Validator;

class RegisterController
{
    public function index()
    {
        return view('auth/register', layout: 'auth');
    }

    public function register()
    {
        $validator = Validator::validate([
            'name' => ['required', 'min:3', 'max:255'],
            'surname' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'confirmed:email_confirm', 'unique:users'],
            'password' => ['required', 'min:8', 'max:30', 'strong'],
        ], $_POST, [
            'name' => 'Name',
            'surname' => 'Surname',
            'email' => 'E-mail',
            'email_confirm' => 'Confirm E-mail',
            'password' => 'Password',
        ]);

        if (!$validator->isValid()) {
            session()::flash('errors', $validator->getErrors());
            session()::flash('old', $_POST);

            session()::flash('message::error', 'Please check your form for errors');

            return view('auth/register', layout: 'auth');
        }

        $database = new Database(config('database'));

        $database->query(
            'INSERT INTO users (name, surname, email, password) values (:name, :surname, :email, :password)',
            [
                'name' => $_POST['name'],
                'surname' => $_POST['surname'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ]
        );

        session()::flash('message::success', 'User registered successfully');
        return  redirect('login');
    }
}
