<?php

namespace application\controllers;

use application\core\Controller;

class CreateStudentController extends Controller
{

    public function indexAction() {
        $this->view->render('Create Student');
    }


}