<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;

class CreateCourse extends Model{

    public function insertData($data) {

        $db = new Db();

        $id = (int)$data['id'];
        $name = $data['name'];
        $cost = (float)$data['cost'];
        $sql = "INSERT INTO course (idCourse, nameCourse, costCourse) VALUES ($id, '$name', '$cost');";
        $db->query($sql);

    }

}