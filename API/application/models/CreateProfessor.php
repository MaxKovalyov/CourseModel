<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;
use PDOException;

class CreateProfessor extends Model{

    public function insertData($data) {

        $db = new Db();

        $id = (int)$data['id'];
        if($id == 0) ++$id;
        $name = $data['name'];
        $address = $data['address'];
        $phone = $data['phone'];
        $salary = (float)$data['salary'];
        $sql = "INSERT INTO professor (idProfessor, nameProfessor, addressProfessor, phoneProfessor, salaryProfessor) VALUES ($id, '$name', '$address', '$phone', $salary);";
        try {
            $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Insert error: ".$e->getMessage();
        }
        $db = null;

    }

}