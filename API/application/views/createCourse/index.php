<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/form.css">
    <title>Create Course</title>
</head>
<body>
    <div class="form-container">
        <form class="ui-form" action="/createCourse/index" method="POST">
            <h3>Создание курса</h3>
            <div class="form-row">
                <input type="text" id="idCourse" name="id" required autocomplete="off"><label for="idCorse">Номер курса</label>
            </div>
            <div class="form-row">
                <input type="text" id="nameCourse" name="name" required autocomplete="off"><label for="nameCourse">Название курса</label>
            </div>
            <div class="form-row">
                <input type="text" id="costCourse" name="cost" required autocomplete="off"><label for="costCourse">Стоимость курса</label>
            </div>
            <p>
                <input type="submit" value="Отправить" id="submitCourse">
                <a href="/mainCourse/index">Назад</a>
            </p>
        </form>
    </div>