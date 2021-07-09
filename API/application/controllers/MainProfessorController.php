<?php

namespace application\controllers;

use application\core\Controller;
use application\models\MainProfessor;

class MainProfessorController extends Controller
{

    public function indexAction() {

        $model = new MainProfessor();
        
        if(array_key_exists('index', $_POST)) {
            $index = $_POST['index'];
            $model->deleteRecord($index);
        }

        $data = $model->getDataFormTable();

        $this->view->render('Professors', $data);
    }


}