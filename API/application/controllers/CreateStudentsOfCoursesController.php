<?php

namespace application\controllers;

use application\core\Controller;

class CreateStudentsOfCoursesController extends Controller
{

    public function indexAction() {
        $this->view->render('Create StudentsOfCourses');
    }


}