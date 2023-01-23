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
	<title>Меню</title>
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
	<div class='nav'>
	<h1>Список мероприятий</h1>
	<a href="index.php"><p>Начальная страница</p></a>
    <a href="profile.php"><p>Профиль</p></a>
    <a href="logout.php"><p>Выход</p></a>
	</div>
    <?php
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$con = mysqli_connect("db", "user", "password", "appDB");
		$result=$con->query("SELECT * FROM menu"); 
		while ($row = mysqli_fetch_assoc($result)) 
		   	{
		   		echo "<p>".$row['name_event'] . " " . "</a>".$row['datey']. "</p>";
		   	}
		?>
	
</body>
</html>