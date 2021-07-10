<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;
use PDOException;

class UpdateStudent extends Model{

    public function getDataForUpdate($index) {

        $db = new Db();

        try {
            $sql = "SELECT * FROM student WHERE idStudent=$index";
            $data = $db->query($sql);
        }
        catch(PDOException $e) {
            echo 'Команда провалена: '.$e->getMessage();
        }

        return $data->fetch();

    }

}