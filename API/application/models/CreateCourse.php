<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;
use PDOException;

class CreateCourse extends Model{

    public function insertData($data) {

        $db = new Db();

        $id = (int)$data['id'];
        if($id == 0) ++$id;
        $name = $data['name'];
        $cost = (float)$data['cost'];
        $sql = "INSERT INTO course (idCourse, nameCourse, costCourse) VALUES ($id, '$name', '$cost');";
        try {
            $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Insert error: ".$e->getMessage();
        }
        $db = null;

    }

}