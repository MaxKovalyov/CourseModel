<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/index.css">
    <script src="/public/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
    function setAction(action) {
        $("#form").attr('action', action);
    }
    </script>
    <title>MKovalyov</title>
</head>
<body>
    <header>
        <nav>
            <a class="nav-item"  href="/mainCourse/index">Courses</a>
            <a class="nav-item" href="/mainStudent/index">Students</a>
            <a class="nav-item" href="/mainProfessor/index">Professors</a>
            <a class="nav-item-current" href="">Conducting courses</a>
        </nav>
    </header>
    <div class="view-table">
        <table class="data-table" id="data-table">
            <tr>
                <th>Номер студента</th>
                <th>Номер курса</th>
                <th>Учётный номер профессора</th>
                <th>Оценка студента за курс</th>
            </tr>
            <?php
            
            foreach($data as $key=>$value) {
                echo '<tr><td>'.$data[$key]['idStudent'].'</td><td>'.$data[$key]['idCourse'].'</td><td>'.$data[$key]['idProfessor'].'</td><td>'.$data[$key]['noteStudent'].'</td></tr>';
            }

            ?>
        </table>
    </div>
    <div class="place-buttons">
        <a href="/createStudentsOfCourses/index" class="action-button" id="create">Create</a>
        <form action="index" id="form" method="POST">
            <input type="submit" onclick="setAction('/updateStudentsOfCourses/index')" value="Update" class="action-button" id="update">
            <input type="text" id="indexField" name="index" placeholder="Введите индекс" class="index-field">
            <input type="submit" onclick="setAction('index')" value="Delete" class="action-button" id="delete">
        </form>
        <a href="/mainStudentsOfCourses/report" class="action-button" id="report">Download report</a>
    </div>
</body>
</html>