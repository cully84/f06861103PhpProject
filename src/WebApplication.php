<?php


namespace Itb;


class WebApplication
{
    private $maincontroller;
    private $logincontroller;
    private $registercontroller;

    const PATH_TO_TEMPLATE = __DIR__.'/../view';

    public function __construct()
    {
        $twig = new\Twig\Environment(new \ Twig_Loader_Filesystem(paths::PATH_TO_TEMPLATE));
        $twig->maincontroller = new MainController($twig);
        $twig->logincontroller = new LoginController($twig);
        $twig->registercontroller = new RegisterController($twig);
    }

    public function run()
    {
        $action = filter_input(INPUT_GET,'action');
        if(empty($action)){
            $action = filter_input(INPUT_POST,'action');
        }
        switch($action)
        {
            case 'login';
                $this->logincontroller->loginAction();
                break;

            case 'processLogin';
                $this->logincontroller->processLoginAction();
                break;
            case 'logout';
                break;
        }

        $action = filter_input(INPUT_GET,'action');
        if(empty($action)){
            $action = filter_input(INPUT_POST,'action');
        }
        switch($action) {
            case 'main';
                $this->maincontroller->loginAction();
                break;

            case 'processMain';
                $this->maincontroller->processLoginAction();
                break;

            case 'logout';
                break;
        }

                $action = filter_input(INPUT_GET,'action');
                if(empty($action)){
                    $action = filter_input(INPUT_POST,'action');
                }
                switch($action)
                {
                    case 'register';
                        $this->registercontroller->registerAction();
                        break;

                    case 'processRegister';
                        $this->registercontroller->processRegisterAction();
                        break;

                    case 'logout';
                        break;
}
}

}

