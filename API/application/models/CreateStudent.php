<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;

class CreateStudent extends Model{

    public function insertData($data) {

        $db = new Db();

        $id = (int)$data['id'];
        $name = $data['name'];
        $address = $data['address'];
        $phone = $data['phone'];
        $email = $data['email'];
        $perform = (float)$data['perform'];
        $sql = "INSERT INTO student (idStudent, nameStudent, addressStudent, phoneStudent, emailStudent, performStudent) VALUES ($id, '$name', '$address', '$phone', '$email', $perform);";
        $db->query($sql);

    }

}