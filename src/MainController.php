<?php
namespace Itb;

class MainController
{
    private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig();
    }

    public function indexAction()
    {
        $template = 'index.html.twig';
        $argsarray = [
            'pageTitle' => 'Index'];

        $html = $this->twig->render($template, $argsarray);
        print html;
    }
    public function aboutAction()
    {
        $template = 'index.html.twig';
        $argsarray = [
            'pageTitle' => 'About'];

        $html = $this->twig->render($template, $argsarray);
        print html;
    }
    public function nutritionAction()
    {
        $template = 'index.html.twig';
        $argsarray = [
            'pageTitle' => 'Nutrition'];

        $html = $this->twig->render($template, $argsarray);
        print html;
    }
    public function fitnessAction()
    {
        $template = 'index.html.twig';
        $argsarray = [
            'pageTitle' => 'Fitness'];

        $html = $this->twig->render($template, $argsarray);
        print html;
    }
    public function loginAction()
    {
        $template = 'index.html.twig';
        $argsarray = [
            'pageTitle' => 'Login'];

        $html = $this->twig->render($template, $argsarray);
        print html;
    }
    public function contactAction()
    {
        $template = 'index.html.twig';
        $argsarray = [
            'pageTitle' => 'Conatact'];

        $html = $this->twig->render($template, $argsarray);
        print html;
    }
    public function registerAction()
    {
        $template = 'index.html.twig';
        $argsarray = [
            'pageTitle' => 'Register'];

        $html = $this->twig->render($template, $argsarray);
        print html;
    }




}