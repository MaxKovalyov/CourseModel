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
            <a class="nav-item-current"  href="">Courses</a>
            <a class="nav-item" href="/mainStudent/index">Students</a>
            <a class="nav-item" href="/mainProfessor/index">Professors</a>
            <a class="nav-item" href="/mainStudentsOfCourses/index">Conducting courses</a>
        </nav>
    </header>
    <div class="view-table">
        <table class="data-table" id="data-table">
            <tr>
                <th>Номер курса</th>
                <th>Название</th>
                <th>Стоимость обучения</th>
            </tr>
            <?php
            
            foreach($data as $key=>$value) {
                echo '<tr><td>'.$data[$key]['idCourse'].'</td><td>'.$data[$key]['nameCourse'].'</td><td>'.$data[$key]['costCourse'].'</td></tr>';
            }

            ?>
        </table>
    </div>
    <div class="place-buttons">
        <a href="/createCourse/index" class="action-button" id="create">Create</a>
        <form action="index" id="form" method="POST">
            <input type="submit" onclick="setAction('/updateCourse/index')" value="Update" class="action-button" id="update">
            <input type="text" id="indexField" name="index" placeholder="Введите индекс" class="index-field">
            <input type="submit" onclick="setAction('index')" value="Delete" class="action-button" id="delete">
        </form>
    </div>
</body>
</html>