<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;
use PDOException;

class MainStudent extends Model{

    public function getDataFormTable() {

        $sql = "SELECT * FROM student";
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
        $sql = "DELETE FROM student WHERE idStudent=$index";
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
        $address = $data['address'];
        $phone = $data['phone'];
        $email = $data['email'];
        $perform = (float)$data['perform'];
        $sql = "UPDATE student SET nameStudent = '$name', addressStudent = '$address', phoneStudent = '$phone', emailStudent = '$email', performStudent = $perform WHERE idStudent = $id;";
        try {
            $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Update error: ".$e->getMessage();
        }
        $db = null;
    }

}