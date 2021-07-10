<?php

namespace application\controllers;

use application\core\Controller;
use application\models\CreateProfessor;

class CreateProfessorController extends Controller
{

    public function indexAction() {

        if(!empty($_POST)) {
            $model = new CreateProfessor();
            $model->insertData($_POST);
        }

        $this->view->render('Create Professor');
    }


}