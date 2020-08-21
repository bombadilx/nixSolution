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
        $result = $this->model->getUser($_SESSION['id']);
        //  $result2 = $this->model->upfate($_SESSION['id'],$status);
        $this->view->render('Страница профиля', $result[0]);
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

    public function createAction()
    {
        $this->view->render('Обработчик');
    }

    public function statusAction()
    {
        $this->view->render('Обработчик');
    }
}
