<?php

require_once(ROOT.'\interfaces\Handler.php');
require_once(ROOT.'\controllers\BaseController.php');

class AuthorizationController extends BaseController implements Handler
{
    public function actionLogin()
    {
        require_once(ROOT . '\views\login.php');
    }

    public function actionAuthorize($data)
    {
        $db =  $this->getDbClassInstance()->getConnection();

        $sql = sprintf("SELECT * FROM users WHERE name = '%s'", $data['name']);

        $result = $db->query($sql);

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

    public function handle(): bool
    {
        return isset($_SESSION['user']);
    }
}