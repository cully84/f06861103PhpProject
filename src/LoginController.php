<?php
namespace Itb;

class LoginController
{

    public function loginAction()
    {
        unset($_SESSION['user']);

        $mainController = new MainController();
        $mainController->indexAction();
    }

    public function processLoginAction()
    {

        $isLoggedIn = false;

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


        $isLoggedIn = User::canFindMatchingUsernameAndPassword($username, $password);


        if($isLoggedIn){

            $_SESSION['user'] = $username;

            require_once __DIR__ . '/../templates/loginSuccess.php';
        } else {
            $message = 'bad username or password, please try again';
            require_once __DIR__ . '/../templates/message.php';
        }
    }





    public function isLoggedInFromSession()
    {
        $isLoggedIn = false;

        if(isset($_SESSION['user'])){
            $isLoggedIn = true;
        }

        return $isLoggedIn;
    }

    public function usernameFromSession()
    {
        $username = '';


        if (isset($_SESSION['user'])) {
            $username = $_SESSION['user'];
        }

        return $username;
    }



}