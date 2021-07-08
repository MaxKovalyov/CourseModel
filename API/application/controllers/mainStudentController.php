<?php

namespace application\controllers;

use application\core\Controller;
use application\models\MainStudent;

class MainStudentController extends Controller
{

    public function indexAction() {

        $model = new MainStudent();
        $data = $model->getDataFormTable();

        $this->view->render('Students',$data);
    }


}