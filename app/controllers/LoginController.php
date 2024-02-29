<?php

namespace app\controllers;

use app\framework\database\Connection;

class LoginController
{
    public function index()
    {
        var_dump('index no login');
    }

    public function store()
    {
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);

        if (empty($email) || empty($password)) {
            var_dump('Usuário ou senha inválidos!');
            exit;
        }

        $connection = Connection::getConnection();

        $prepare = $connection->prepare('SELECT id, firstName, lastName, email, password FROM users WHERE email = :email');
        $prepare->execute([
            'email' => $email,
        ]);

        $userFound = $prepare->fetchObject();

        if (!$userFound) {
            var_dump('Usuário ou senha inválidos!');
            exit;
        }

        if (!password_verify($password, $userFound->password)) {
            var_dump('Usuário ou senha inválidos!');
            exit;
        }

        $_SESSION['logged'] = true;
        unset($userFound->password);
        $_SESSION['user'] = $userFound;

        return redirect('/dashboard');
    }

    public function destroy()
    {
        session_destroy();

        return redirect('/');
    }
}
