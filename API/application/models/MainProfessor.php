<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;

class MainProfessor extends Model{

    public function getDataFormTable() {

        $sql = "SELECT * FROM professor";
        $db = new Db();
        $data = $db->query($sql);
        return $data->fetchAll();
        
    }

}