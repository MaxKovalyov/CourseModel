<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/form.css">
    <title>Update Course</title>
</head>
<body>
    <div class="form-container">
        <form class="ui-form" action="/mainCourse/index" method="POST">
            <h3>Изменение курса</h3>
            <div class="form-row">
                <input type="text" id="idCourse" value="<?php echo $data['idCourse'] ?>" name="id" readonly><label for="idCorse">Номер курса</label>
            </div>
            <div class="form-row">
                <input type="text" id="nameCourse" value="<?php echo $data['nameCourse'] ?>" name="name" required autocomplete="off"><label for="nameCourse">Название курса</label>
            </div>
            <div class="form-row">
                <input type="text" id="costCourse" value="<?php echo $data['costCourse'] ?>" name="cost" required autocomplete="off"><label for="costCourse">Стоимость курса</label>
            </div>
            <p>
                <input type="submit" value="Отправить" id="submitCourse">
                <a href="/mainCourse/index">Назад</a>
            </p>
        </form>
    </div>
</body>
</html>