<?php

namespace application\controllers;

use application\core\Controller;

class MainStudentController extends Controller
{

    public function indexAction() {
        $this->view->render('Students');
    }


}