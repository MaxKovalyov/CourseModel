<?php

namespace application\controllers;

use application\core\Controller;

class CreateCourseController extends Controller
{

    public function indexAction() {
        $this->view->render('Create Course');
    }


}