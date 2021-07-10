<?php

namespace application\controllers;

use application\core\Controller;
use application\models\CreateStudent;

class CreateStudentController extends Controller
{

    public function indexAction() {

        if(!empty($_POST)) {
            $model = new CreateStudent();
            $model->insertData($_POST);
        }


        $this->view->render('Create Student');
    }


}