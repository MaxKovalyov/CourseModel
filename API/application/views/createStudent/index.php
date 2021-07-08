<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/form.css">
    <title>Create Student</title>
</head>
<body>
    <div class="form-container">
        <form class="ui-form" action="">
            <h3>Добавление студента</h3>
            <div class="form-row">
                <input type="text" id="idStudent" required autocomplete="off"><label for="idStudent">Номер зачётки</label>
            </div>
            <div class="form-row">
                <input type="text" id="nameStudent" required autocomplete="off"><label for="nameStudent">Имя</label>
            </div>
            <div class="form-row">
                <input type="text" id="addressStudent" required autocomplete="off"><label for="addressStudent">Адрес</label>
            </div>
            <div class="form-row">
                <input type="text" id="phoneStudent" required autocomplete="off"><label for="phoneStudent">Телефон</label>
            </div>
            <div class="form-row">
                <input type="email" id="emailStudent" required autocomplete="off"><label for="emailStudent">E-mail</label>
            </div>
            <div class="form-row">
                <input type="text" id="performStudent" required autocomplete="off"><label for="performStudent">Успеваемость</label>
            </div>
            <p><input type="submit" value="Отправить" id="submitStudent"></p>
        </form>
    </div>
</body>
</html>