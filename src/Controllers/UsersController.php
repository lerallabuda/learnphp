<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $users = User::all();
        $title = 'Users';
        view('users/index', compact('title', 'users'));
    }

    public function view()
    {
        $user = User::find($_GET['id'] ?? null);

        if ($user) {
            $title = 'View User';
            view('users/view', compact('title', 'user'));
        } else {
            http_response_code(404);
            echo '404';
        }
    }

    public function edit()
    {
        $user = User::find($_GET['id'] ?? null);

        if ($user) {
            $title = 'Edit User';
            view('users/edit', compact('title', 'user'));
        } else {
            http_response_code(404);
            echo '404';
        }
    }

    public function update()
    {
        $user = User::find($_GET['id'] ?? null);

        if (!$user) {
            http_response_code(404);
            echo '404';
            return;
        }

        $user->name = trim($_POST['name'] ?? '');
        $user->email = trim($_POST['email'] ?? '');

        // Password is optional when editing a user.
        if (!empty($_POST['password'])) {
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        }

        $user->save();
        redirect('/admin/users');
    }

    public function delete()
    {
        $user = User::find($_GET['id'] ?? null);

        if ($user) {
            $user->delete();
            redirect('/admin/users');
        }

        http_response_code(404);
        echo '404';
    }
}
