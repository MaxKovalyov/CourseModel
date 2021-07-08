<?php

namespace application\controllers;

use application\core\Controller;

class MainStudentsOfCoursesController extends Controller
{

    public function indexAction() {
        $this->view->render('Conducting courses');
    }


}