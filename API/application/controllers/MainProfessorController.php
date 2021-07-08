<?php

namespace application\controllers;

use application\core\Controller;
use application\models\MainProfessor;

class MainProfessorController extends Controller
{

    public function indexAction() {

        $model = new MainProfessor();
        $data = $model->getDataFormTable();

        $this->view->render('Professors', $data);
    }


}