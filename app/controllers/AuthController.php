<?php

namespace app\controllers;

use  app\core\Controller;

class AuthController extends Controller {
public function loginAction()
    {
        $this->view->render('Страница входа');
    }

    public function registrationAction()
    {
        $this->view->render('Страница регистрации');
    }

    public function enterAction()
    {
        $this->view->render('Обработчик');
    }

    public function logoutAction()
    {
        $this->view->render('Обработчик');
    }

    public function regAction()
    {
        $this->view->render('Обработчик');
    }
}