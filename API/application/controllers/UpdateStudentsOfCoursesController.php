<?php

namespace application\controllers;

use application\core\Controller;
use application\models\UpdateStudentsOfCourses;

class UpdateStudentsOfCoursesController extends Controller
{

    public function indexAction() {

        $data = null;
        $model = new UpdateStudentsOfCourses();

        if((array_key_exists('index', $_POST)) && (!empty($_POST["index"]))) {
           $index = $_POST['index'];
           $data = $model->getDataForUpdate($index);
        }

        if(empty($data)) {
            $this->view->path = "createStudentsOfCourses/index";
            $this->view->render('Create StudentsOfCourses');
        } else {
            $this->view->render('Update StudentsOfCourses', $data);
        }

    }


}