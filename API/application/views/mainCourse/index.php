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
            <a class="nav-item-current"  href="">Courses</a>
            <a class="nav-item" href="/mainStudent/index">Students</a>
            <a class="nav-item" href="/mainProfessor/index">Professors</a>
            <a class="nav-item" href="/mainStudentsOfCourses/index">Conducting courses</a>
        </nav>
    </header>
    <div class="view-table">
        <table class="data-table" id="data-table">
            <tr>
                <th>Имя</th>
                <th>Адрес</th>
                <th>Телефон</th>
                <th>Какой-то длинный пиздец</th>
                <th>Оценки</th>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>3</td>
                <td>3</td>
                <td>3</td>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>4</td>
                <td>4</td>
                <td>4</td>
                <td>4</td>
            </tr>
        </table>
    </div>
    <div class="place-buttons">
        <a href="/createCourse/index" class="action-button" id="create">Create</a>
        <a href="/updateCourse/index" class="action-button" id="update">Update</a>
        <input type="text" id="indexField" placeholder="Введите индекс" class="index-field">
        <a href="" class="action-button" id="delete">Delete</a>
    </div>
</body>
</html>