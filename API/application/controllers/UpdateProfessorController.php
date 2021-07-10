<?php

namespace application\controllers;

use application\core\Controller;
use application\models\UpdateProfessor;

class UpdateProfessorController extends Controller
{

    public function indexAction() {

        $data = null;
        $model = new UpdateProfessor();

        if((array_key_exists('index', $_POST)) && (!empty($_POST["index"]))) {
           $index = $_POST['index'];
           $data = $model->getDataForUpdate($index);
        }

        if(empty($data)) {
            $this->view->path = "createProfessor/index";
            $this->view->render('Create Professor');
        } else {
            $this->view->render('Update Professor', $data);
        }
    }


}