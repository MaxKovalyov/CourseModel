<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;
use PDOException;

class UpdateStudentsOfCourses extends Model{

    public function getDataForUpdate($index) {

        $db = new Db();

        try {
            $sql = "SELECT * FROM studentsofcourses WHERE idStudent=$index";
            $data = $db->query($sql);
        }
        catch(PDOException $e) {
            echo 'Команда провалена: '.$e->getMessage();
        }

        return $data->fetch();

    }

}