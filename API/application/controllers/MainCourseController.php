<?php

namespace application\controllers;

use application\core\Controller;
use application\models\MainCourse;

class MainCourseController extends Controller
{

    public function indexAction() {

        $model = new MainCourse();
        
        if(array_key_exists('index', $_POST)) {
            $index = $_POST['index'];
            $model->deleteRecord($index);
        }

        if(array_key_exists('id',$_POST)) {
            $model->updateRecord($_POST);
        }

        $data = $model->getDataFormTable();

        $this->view->render('Courses',$data);
    }


}