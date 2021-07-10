<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;
use PDOException;

class MainProfessor extends Model{

    public function getDataFormTable() {

        $sql = "SELECT * FROM professor";
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
        $sql = "DELETE FROM professor WHERE idProfessor=$index";
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
        $salary = (float)$data['salary'];
        $sql = "UPDATE professor SET nameProfessor = '$name', addressProfessor = '$address', phoneProfessor = '$phone', salaryProfessor = $salary WHERE idProfessor = $id;";
        try {
            $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Update error: ".$e->getMessage();
        }
        $db = null;
    }

}