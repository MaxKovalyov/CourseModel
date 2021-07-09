<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;

class MainStudentsOfCourses extends Model{

    public function getDataFormTable() {

        $sql = "SELECT * FROM studentsofcourses";
        $db = new Db();
        $data = $db->query($sql);
        return $data->fetchAll();
        
    }

    public function deleteRecord($index) {
        $db = new Db();
        $sql = "DELETE FROM studentsofcourses WHERE idStudent=$index";
        $db->query($sql);
    }

}