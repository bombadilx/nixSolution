<?php

namespace app\controllers;

use  app\core\Controller;

class PostController extends Controller {
    public function postAction()
    {
        $result = $this->model->getPost();
        $vars = [
            'articles' => $result,
        ];
        
        $this->view->render('Страница статей', $vars);
    }
}
