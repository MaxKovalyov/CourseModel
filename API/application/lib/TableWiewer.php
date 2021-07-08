<?php

//namespace application\lib;

use application\core\View;
require 'application\core\View.php';

$table = $_POST['table'];

View::$name = $table;
$name = View::$name;

echo 'Name Table: '.$table.'. And Table name in View: '.$name;