<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/form.css">
    <title>Update Professor</title>
</head>
<body>
    <div class="form-container">
        <form class="ui-form" action="/mainProfessor/index" method="POST">
            <h3>Изменение профессора</h3>
            <div class="form-row">
                <input type="text" id="idProfessor" value="<?php echo $data['idProfessor'] ?>" name="id" readonly><label class="readonly" for="idProfessor">Номер профессора</label>
            </div>
            <div class="form-row">
                <input type="text" id="nameProfessor" value="<?php echo $data['nameProfessor'] ?>" name="name" required autocomplete="off"><label for="nameProfessor">Имя</label>
            </div>
            <div class="form-row">
                <input type="text" id="addressProfessor" value="<?php echo $data['addressProfessor'] ?>" name="address" required autocomplete="off"><label for="addressProfessor">Адрес</label>
            </div>
            <div class="form-row">
                <input type="text" id="phoneProfessor" value="<?php echo $data['phoneProfessor'] ?>" name="phone" required autocomplete="off"><label for="phoneProfessor">Телефон</label>
            </div>
            <div class="form-row">
                <input type="text" id="salaryProfessor" value="<?php echo $data['salaryProfessor'] ?>" name="salary" required autocomplete="off"><label for="salaryProfessor">Зарплата</label>
            </div>
            <p>
                <input type="submit" value="Отправить" id="submitProfessor">
                <a href="/mainProfessor/index">Назад</a>
            </p>
        </form>
    </div>
</body>
</html>