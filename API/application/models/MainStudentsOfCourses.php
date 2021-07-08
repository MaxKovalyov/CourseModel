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

}