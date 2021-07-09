<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;

class CreateStudentsOfCourses extends Model{

    public function insertData($data) {

        $db = new Db();

        $idCourse = (int)$data['idCourse'];
        $idStudent = (int)$data['idStudent'];
        $idProfessor = (int)$data['idProfessor'];
        $note = (float)$data['note'];
        $sql = "INSERT INTO studentsofcourses (idCourse, idStudent, idProfessor, noteStudent) VALUES ($idCourse, '$idStudent', '$idProfessor', $note);";
        $db->query($sql);

    }

}