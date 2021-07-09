<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;
use PDOException;

class CreateStudent extends Model{

    public function insertData($data) {

        $db = new Db();

        $id = (int)$data['id'];
        if($id == 0) ++$id;
        $name = $data['name'];
        $address = $data['address'];
        $phone = $data['phone'];
        $email = $data['email'];
        $perform = (float)$data['perform'];
        $sql = "INSERT INTO student (idStudent, nameStudent, addressStudent, phoneStudent, emailStudent, performStudent) VALUES ($id, '$name', '$address', '$phone', '$email', $perform);";
        try {
            $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Insert error: ".$e->getMessage();
        }
        $db = null;

    }

}