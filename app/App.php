<?php

namespace App;

use App\Models\User;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Twig\Extension\DebugExtension;

class App {
    public function __construct()
    {
        $loader = new FilesystemLoader(__DIR__ . '/Views');
        $twig = new Environment($loader, [
            'debug' => true,
            'strict_variables' => true,
            'autoescape' => false
        ]);

        $twig->addExtension(new DebugExtension);

        // $user = [
        //     'username' => 'alessandro',
        //     'name' => 'Alessandro'
        // ];

        // $signedIn = false;

        $users = [
            [ 'username' => 'dui' ],
            [ 'username' => 'tobias' ],
            [ 'username' => 'morad' ]
        ];

        $userOne = new User;
        $userOne->setUsername("dui");
        $userTwo = new User;
        $userTwo->setUsername('tobias');
        $userThree = new User;
        $userThree->setUsername('morad');

        // $users = [$userOne, $userTwo, $userThree];

        // echo $twig->render('home.twig', [
        //     'users' => $users,
        //     'total' => 10.00
        // ]);

        echo $twig->render('contact.twig');
    }
}
