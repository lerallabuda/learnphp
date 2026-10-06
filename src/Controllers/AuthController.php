<?php

namespace App\Controllers;

class AuthController {
    public function loginForm() {
        use App\Models\User;

    }

    public function login() {
        class AuthController
{
    public function loginForm() {}

    }
     public function login() {}

    public function registerForm() {
        
        //dump($_COOKIE);
        //setcookie('mycookie', 'is tasty!', time() + 60 * 60 * 24 * 30 );
        session_start();
        //$_SESSION['secret'] = 'Shhh';
        dump($_SESSION);
    }
     public function registerForm()
    {
        view('auth/register');

    public function register() {
         public function register()
    {
        $user = User::where('email', $_POST['email']);
        if ($user || $_POST['password'] !== $_POST['password_confirm']) {
            return redirect('/register');
        }
        $user = new User();
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->save();
        redirect('/login');
    }

    public function logout() {

    }
}
public function logout() {}
}