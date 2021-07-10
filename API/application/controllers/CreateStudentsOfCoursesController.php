<?php

namespace application\controllers;

use application\core\Controller;
use application\models\CreateStudentsOfCourses;

class CreateStudentsOfCoursesController extends Controller
{

    public function indexAction() {

        if(!empty($_POST)) {
            $model = new CreateStudentsOfCourses();
            $model->insertData($_POST);
        }

        $this->view->render('Create StudentsOfCourses');
    }


}