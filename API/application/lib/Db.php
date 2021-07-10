<?php

namespace application\lib;

use PDO;
use PDOException;

class Db {

    protected $db;

    public function __construct()
    {
        $config = require 'application/config/db.php';
        //debug($config);
        try {
            $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);
        }
        catch(PDOException $e) {
            echo 'Подключение не удалось: '.$e->getMessage();
        }
    }

    public function query($sql) {
        $query = $this->db->query($sql);
        return $query;
    }

}