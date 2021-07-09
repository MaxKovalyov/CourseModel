<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/form.css">
    <title>Update StudentsOfCourses</title>
</head>
<body>
    <div class="form-container">
        <form class="ui-form" action="/mainStudentsOfCourses/index" method="POST">
            <h3>Изменение информации о проведении курса</h3>
            <div class="form-row">
                <input type="text" id="idStudent" value="<?php echo $data['idStudent'] ?>" name="idStudent" readonly><label class="readonly" for="idStudent">Номер студента</label>
            </div>
            <div class="form-row">
                <input type="text" id="idCourse" value="<?php echo $data['idCourse'] ?>" name="idCourse" required autocomplete="off"><label for="idCourse">Номер курса</label>
            </div>
            <div class="form-row">
                <input type="text" id="idProfessor" value="<?php echo $data['idProfessor'] ?>" name="idProfessor" required autocomplete="off"><label for="idProfessor">Номер профессора</label>
            </div>
            <div class="form-row">
                <input type="text" id="noteStudent" value="<?php echo $data['noteStudent'] ?>" name="note" required autocomplete="off"><label for="noteStudent">Оценка студента</label>
            </div>
            <p>
                <input type="submit" value="Отправить" id="submitSOC">
                <a href="/mainStudentsOfCourses/index">Назад</a>
            </p>
        </form>
    </div>
</body>
</html>