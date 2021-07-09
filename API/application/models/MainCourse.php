<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;

class MainCourse extends Model{

    public function getDataFormTable() {

        $sql = "SELECT * FROM course";
        $db = new Db();
        $data = $db->query($sql);
        return $data->fetchAll();
        
    }

    public function deleteRecord($index) {
        $db = new Db();
        $sql = "DELETE FROM course WHERE idCourse=$index";
        $db->query($sql);
    }

    public function updateRecord($data) {

        $db = new Db();

        $id = (int)$data['id'];
        $name = $data['name'];
        $cost = (float)$data['cost'];
        $sql = "UPDATE course SET nameCourse = '$name', costCourse = $cost WHERE idCourse = $id;";
        $db->query($sql);
        $db = null;
    }

}