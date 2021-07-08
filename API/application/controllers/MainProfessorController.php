<?php

namespace application\controllers;

use application\core\Controller;

class MainProfessorController extends Controller
{

    public function indexAction() {
        $this->view->render('Professors');
    }


}