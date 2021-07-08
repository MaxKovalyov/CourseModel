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

}