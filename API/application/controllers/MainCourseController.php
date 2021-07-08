<?php

namespace application\controllers;

use application\core\Controller;
use application\models\MainCourse;

class MainCourseController extends Controller
{

    public function indexAction() {

        $model = new MainCourse();
        $data = $model->getDataFormTable();

        $this->view->render('Courses',$data);
    }


}