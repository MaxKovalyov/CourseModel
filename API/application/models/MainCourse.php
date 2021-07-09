<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;
use PDOException;

class MainCourse extends Model{

    public function getDataFormTable() {

        $sql = "SELECT * FROM course";
        $db = new Db();
        try {
            $data = $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Read error: ".$e->getMessage();
        }
        
        return $data->fetchAll();
        
    }

    public function deleteRecord($index) {
        $db = new Db();
        $sql = "DELETE FROM course WHERE idCourse=$index";
        try {
            $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Delete error: ".$e->getMessage();
        }
    }

    public function updateRecord($data) {

        $db = new Db();

        $id = (int)$data['id'];
        $name = $data['name'];
        $cost = (float)$data['cost'];
        $sql = "UPDATE course SET nameCourse = '$name', costCourse = $cost WHERE idCourse = $id;";
        try {
            $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Update error: ".$e->getMessage();
        }
        $db = null;
    }

}