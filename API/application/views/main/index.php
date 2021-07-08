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
        <div class="current-table-marker">
            <?php
                echo '<p>'.$name.'</p>';
            ?> 
        </div>
        <nav>
            <!-- <a class="nav-item" onclick="switchTable('Course');" href="">Courses</a>
            <a class="nav-item" onclick="switchTable('Student');" href="">Students</a>
            <a class="nav-item" onclick="switchTable('Professor');" href="">Professors</a>
            <a class="nav-item" onclick="switchTable('StudentsOfCourses');" href="">Conducting courses</a> -->
            <a class="nav-item" href="">Courses</a>
            <a class="nav-item" href="">Students</a>
            <a class="nav-item" href="">Professors</a>
            <a class="nav-item" href="">Conducting courses</a>
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
        <?php
            echo '<a href="/create'.$name.'/index" class="action-button" id="create">Create</a>';
            echo '<a href="/update'.$name.'/index" class="action-button" id="update">Update</a>';
        ?>
        <input type="text" id="indexField" placeholder="Введите индекс" class="index-field">
        <a href="" class="action-button" id="delete">Delete</a>
        <a href="" class="action-button" id="report">Download report</a>
    </div>
</body>
</html>