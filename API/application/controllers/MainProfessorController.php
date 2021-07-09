<?php

namespace application\controllers;

use application\core\Controller;
use application\models\MainProfessor;

class MainProfessorController extends Controller
{

    public function indexAction() {

        $model = new MainProfessor();
        
        if((array_key_exists('index', $_POST)) && (!empty($_POST["index"]))) {
            $index = $_POST['index'];
            $model->deleteRecord($index);
        }

        if(array_key_exists('id',$_POST)) {
            $model->updateRecord($_POST);
        }

        $data = $model->getDataFormTable();

        $this->view->render('Professors', $data);
    }


}