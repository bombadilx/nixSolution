<?php

namespace app\controllers;

use  app\core\Controller;

class MainController extends Controller {
    public function indexAction()
    {
        $this->view->render('Главная страница');

    }
    
    public function postAction()
    {
        $result = $this->model->getPost();
        $vars = [
            'articles' => $result,
        ];
        var_dump($vars['articles']);
        $this->view->render('Страница статей', $vars);
    }

    public function loginAction()
    {
        $this->view->render('Страница входа');
    }

    public function registrationAction()
    {
        $this->view->render('Страница регистрации');
    }

    public function profileAction()
    {
        $this->view->render('Страница профиля');
    }
}
