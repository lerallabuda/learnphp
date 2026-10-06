<?php

namespace App\Controllers;

class AuthController {
     public function loginForm() {
        view('auth/login');
    }
        use App\Models\User;

    }

       public function login() {
        $user = User::where('email', $_POST['email']);
        $user = $user ? $user[0] : null;
        if(!$user || $user->password !== $_POST['password']) {
            return redirect('/login');
        }
        $_SESSION['userID'] = $user->id;
        redirect('/');
    }
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

    }
}
   public function logout() {
        unset($_SESSION['userID']);
        redirect('/');
    }
