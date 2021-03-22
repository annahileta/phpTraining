<?php

class AuthorizationController extends BaseController implements Handler
{
    public function actionLogin() {
        require_once(ROOT . '\views\login.php');
    }

    public function actionAuthorize($data) {
        $result = AuthorizationFactory::CreateAuthorization()->getAuthorizedUser($data['name']);

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

    public static function GetInstance() {
        return new self();
    }
}