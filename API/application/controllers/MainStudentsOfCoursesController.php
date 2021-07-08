<?php

namespace application\controllers;

use application\core\Controller;
use application\models\MainStudentsOfCourses;

class MainStudentsOfCoursesController extends Controller
{

    public function indexAction() {

        $model = new MainStudentsOfCourses();
        $data = $model->getDataFormTable();

        $this->view->render('Conducting courses',$data);
    }


}