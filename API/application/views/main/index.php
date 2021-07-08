<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/index.css">
    <script src="/public/js/jquery-3.6.0.min.js"></script>
    <!-- <script type="text/javascript">
    function switchTable(nameTable) {
        $.post("/application/lib/TableWiewer.php", {
            table: nameTable 
        }, function(table) {
            alert(table);
        }); 
        return false;
    }
    </script> -->
    <title>MKovalyov</title>
</head>
<body>
    <header>
        <nav>
            <!-- <a class="nav-item" onclick="switchTable('Course');" href="">Courses</a>
            <a class="nav-item" onclick="switchTable('Student');" href="">Students</a>
            <a class="nav-item" onclick="switchTable('Professor');" href="">Professors</a>
            <a class="nav-item" onclick="switchTable('StudentsOfCourses');" href="">Conducting courses</a> -->
            <a class="nav-item" href="/mainCourse/index">Courses</a>
            <a class="nav-item" href="/mainStudent/index">Students</a>
            <a class="nav-item" href="/mainProfessor/index">Professors</a>
            <a class="nav-item" href="/mainStudentsOfCourses/index">Conducting courses</a>
        </nav>
    </header>
    <h1>Select table</h1>
</body>
</html>