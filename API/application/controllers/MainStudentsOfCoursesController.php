<?php

namespace application\controllers;

use application\core\Controller;
use application\models\MainStudentsOfCourses;

class MainStudentsOfCoursesController extends Controller
{

    public function indexAction() {

        $model = new MainStudentsOfCourses();
        
        if(array_key_exists('index', $_POST)) {
            $index = $_POST['index'];
            $model->deleteRecord($index);
        }

        $data = $model->getDataFormTable();

        $this->view->render('Conducting courses',$data);
    }


}