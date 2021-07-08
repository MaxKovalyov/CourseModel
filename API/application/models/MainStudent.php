<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;

class MainStudent extends Model{

    public function getDataFormTable() {

        $sql = "SELECT * FROM student";
        $db = new Db();
        $data = $db->query($sql);
        return $data->fetchAll();
        
    }

}