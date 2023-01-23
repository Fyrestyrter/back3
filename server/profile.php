<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Профиль</title>
</head>
<body>
<style>
        .nav {
            display: flex;
            gap:15px;
        }

        a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color:black;
            padding: 3px;
			width: auto;
			height:30px;
			margin-top:25px;
        }
        a:hover {
            background-color:#99ff99;
        }
        img {
            width: 300px;
            height: 200px;
        }
    </style>
	<div class="nav">
	<h1>Профиль пользователя</h1>
	<a href="index.php"><p>Начальная страница</p></a>
    <a href="start.php"><p>Назад</p></a>
    <a href="logout.php"><p>Выход</p></a>
	</div>
	<p>Логин пользователя: <?=$_SESSION['name']?></p>    
    <p>Пароль пользователя: <?=$password?></p>
    
</body>
</html>