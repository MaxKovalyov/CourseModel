<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;
use PDOException;

class MainStudentsOfCourses extends Model{

    public function getDataFormTable() {

        $sql = "SELECT * FROM studentsofcourses";
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
        $sql = "DELETE FROM studentsofcourses WHERE idStudent=$index";
        try {
            $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Delete error: ".$e->getMessage();
        }
    }

    public function updateRecord($data) {

        $db = new Db();

        $idStudent = (int)$data['idStudent'];
        $idCourse = (int)$data['idCourse'];
        $idProfessor = (int)$data['idProfessor'];
        $note = (float)$data['note'];
        $sql = "UPDATE studentsofcourses SET idCourse = $idCourse, idProfessor = $idProfessor, noteStudent = $note WHERE idStudent = $idStudent;";
        try {
            $db->query($sql);
        }
        catch(PDOException $e) {
            echo "Update error: ".$e->getMessage();
        }
        $db = null;
    }

}