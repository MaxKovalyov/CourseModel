<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;
use PDOException;

class CreateStudentsOfCourses extends Model{

    public function insertData($data) {

        $db = new Db();

        $idCourse = (int)$data['idCourse'];
        if($idCourse == 0) ++$idCourse;
        $idStudent = (int)$data['idStudent'];
        if($idStudent == 0) ++$idStudent;
        $idProfessor = (int)$data['idProfessor'];
        if($idProfessor == 0) ++$idProfessor;
        $note = (float)$data['note'];
        $sql = "INSERT INTO studentsofcourses (idCourse, idStudent, idProfessor, noteStudent) VALUES ($idCourse, '$idStudent', '$idProfessor', $note);";
        try {
            $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Insert error: ".$e->getMessage();
        }
        $db = null;

    }

}