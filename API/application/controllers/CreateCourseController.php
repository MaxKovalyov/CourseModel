<?php

namespace application\controllers;

use application\core\Controller;
use application\models\CreateCourse;

class CreateCourseController extends Controller
{

    public function indexAction() {

        if(!empty($_POST)) {
            $model = new CreateCourse();
            $model->insertData($_POST);
        }

        $this->view->render('Create Course');
    }


}