<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/form.css">
    <title>Create Professor</title>
</head>
<body>
    <div class="form-container">
        <form class="ui-form" action="">
            <h3>Добавление профессора</h3>
            <div class="form-row">
                <input type="text" id="idProfessor" required autocomplete="off"><label for="idProfessor">Номер профессора</label>
            </div>
            <div class="form-row">
                <input type="text" id="nameProfessor" required autocomplete="off"><label for="nameProfessor">Имя</label>
            </div>
            <div class="form-row">
                <input type="text" id="addressProfessor" required autocomplete="off"><label for="addressProfessor">Адрес</label>
            </div>
            <div class="form-row">
                <input type="text" id="phoneProfessor" required autocomplete="off"><label for="phoneProfessor">Телефон</label>
            </div>
            <div class="form-row">
                <input type="text" id="salaryProfessor" required autocomplete="off"><label for="salaryProfessor">Зарплата</label>
            </div>
            <p><input type="submit" value="Отправить" id="submitProfessor"></p>
        </form>
    </div>
</body>
</html>