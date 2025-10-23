<?php

namespace App\Controllers;

use App\Classes\User;

class UserController
{

    function lista()
    {
        $loader = new \Twig\Loader\FilesystemLoader('./Views');
        $twig = new \Twig\Environment($loader);

        $user = new User();
        $users = $user->getAll();
        
        echo $twig->render('UserList.twig', [
            'title' => 'Listagem de usuários',
            "mensagem" => "Página da listagem de usuários!",
            "users" => $users
        ]);
    }
}