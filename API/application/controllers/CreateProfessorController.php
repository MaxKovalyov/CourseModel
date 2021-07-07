<?php

namespace application\controllers;

use application\core\Controller;

class CreateProfessorController extends Controller
{

    public function indexAction() {
        $this->view->render('Create Professor');
    }


}