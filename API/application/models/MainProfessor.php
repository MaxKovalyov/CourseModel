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

    public function deleteRecord($index) {
        $db = new Db();
        $sql = "DELETE FROM professor WHERE idProfessor=$index";
        $db->query($sql);
    }

}