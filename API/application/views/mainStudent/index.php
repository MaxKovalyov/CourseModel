<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/index.css">
    <script src="/public/js/jquery-3.6.0.min.js"></script>
    <title>MKovalyov</title>
</head>
<body>
    <header>
        <nav>
            <a class="nav-item"  href="/mainCourse/index">Courses</a>
            <a class="nav-item-current" href="">Students</a>
            <a class="nav-item" href="/mainProfessor/index">Professors</a>
            <a class="nav-item" href="/mainStudentsOfCourses/index">Conducting courses</a>
        </nav>
    </header>
    <div class="view-table">
        <table class="data-table" id="data-table">
            <tr>
                <th>Номер зачётки</th>
                <th>Имя</th>
                <th>Адрес</th>
                <th>Телефон</th>
                <th>E-mail</th>
                <th>Успеваемость</th>
            </tr>
            <?php
            
            foreach($data as $key=>$value) {
                echo '<tr><td>'.$data[$key]['idStudent'].'</td><td>'.$data[$key]['nameStudent'].'</td><td>'.$data[$key]['adressStudent'].'</td><td>'.$data[$key]['phoneStudent'].'</td><td>'.$data[$key]['emailStudent'].'</td><td>'.$data[$key]['performStudent'].'</td></tr>';
            }

            ?>
        </table>
    </div>
    <div class="place-buttons">
        <a href="/createStudent/index" class="action-button" id="create">Create</a>
        <a href="/updateStudent/index" class="action-button" id="update">Update</a>
        <input type="text" id="indexField" placeholder="Введите индекс" class="index-field">
        <a href="" class="action-button" id="delete">Delete</a>
    </div>
</body>
</html>