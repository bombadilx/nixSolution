<?php

namespace app\controllers;

use  app\core\Controller;

class UsersController extends Controller {
    public function profileAction()
    {
        $result = $this->model->getUser($_SESSION['id']);
        $this->view->render('Страница профиля', $result[0]);
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