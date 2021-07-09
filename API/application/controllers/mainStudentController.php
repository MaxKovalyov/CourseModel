<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;
use application\models\MainStudent;

class MainStudentController extends Controller
{

    public function indexAction() {

        $model = new MainStudent();

        if((array_key_exists('index', $_POST)) && (!empty($_POST["index"]))) {
            $index = $_POST['index'];
            $model->deleteRecord($index);
        }

        if(array_key_exists('id',$_POST)) {
            $model->updateRecord($_POST);
        }

        $data = $model->getDataFormTable();
        
        $this->view->render('Students',$data);
    }


}