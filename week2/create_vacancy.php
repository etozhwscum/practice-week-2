<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Create Vacancy</title>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<?php require('templates/header.php');?>
    <div class="vacancyFormCreate">
        <h1>Создание вакансии</h1>
        <form action="vendor/add_vacancy.php" method="post">
            <p><input name="title" type="text" placeholder="Заголовок" required></p>
            <p><textarea name="body" rows="10" cols="45" placeholder="Вакансия" required></textarea></p>
            <button type="submit">Подтвердить</button>
        </form>
        <br>
        <a href="vacancy.php">Назад</a>
    </div>
    <br><br>
	<?php require('templates/footer.php');?>
</body>
</html>