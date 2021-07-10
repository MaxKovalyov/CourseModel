<?php

namespace application\controllers;

use application\core\Controller;
use application\models\UpdateCourse;

class UpdateCourseController extends Controller
{

    public function indexAction() {
        
        $data = null;
        $model = new UpdateCourse();

        if((array_key_exists('index', $_POST)) && (!empty($_POST["index"]))) {
           $index = $_POST['index'];
           $data = $model->getDataForUpdate($index);
        }

        if(empty($data)) {
            $this->view->path = "createCourse/index";
            $this->view->render('Create Course');
        } else {
            $this->view->render('Update Course', $data);
        }


    }


}