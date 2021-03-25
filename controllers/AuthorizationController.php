<?php

namespace App\Controllers;
use App\Factories\ModelsFactory;
use App\Interfaces\Handler;
use App\Components\View;

require_once ROOT.'\interfaces\Handler.php';

class AuthorizationController implements Handler
{
    public function actionLogin() {
        View::create('login');
    }

    public function actionAuthorize($data) {
        $result = ModelsFactory::getModel('Authorization')->getAuthorizedUser($data['name']);

        if (isset($result)) {
            $hash = password_verify($data['password'], $result['password']);

            if ($hash) {
                print_r('Login successful');

                $_SESSION['user'] = $result['name'];
            } else {
                print_r('Login failed.');
            }
        } else {
            print_r('Login failed.');
        }
    }

    public function handle(): bool {
        return isset($_SESSION['user']);
    }
}