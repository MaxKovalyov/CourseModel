<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;
use PDOException;

class UpdateProfessor extends Model{

    public function getDataForUpdate($index) {

        $db = new Db();

        try {
            $sql = "SELECT * FROM professor WHERE idProfessor=$index";
            $data = $db->query($sql);
        }
        catch(PDOException $e) {
            echo 'Команда провалена: '.$e->getMessage();
        }

        return $data->fetch();

    }

}