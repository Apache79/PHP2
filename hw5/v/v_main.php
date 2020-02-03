
<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<meta content="text/html; charset=UTF8" http-equiv="content-type">	
	<link rel="stylesheet" type="text/css" media="screen" href="v/style.css" /> 	
</head>
<body>
	<div id="header">
		<h1><?=$title?></h1>
	</div>
	
	<div id="menu">
		<a href="index.php">На главную</a> | 
		<a href="index.php?c=page&act=edit">Редактировать</a> | 
		<?php if ($user) :?>
			<a href="index.php?c=user&act=info">Личный кабинет</a> | <a href="index.php?c=user&act=logout">Выйти(". $user .")</a>;
		<?php else :?>
	        <a href="index.php?c=user&act=login">Войти</a> | <a href="index.php?c=user&act=reg">Регистрация</a>;
		<?php endif ;?>
	</div>
	
	<div id="content">
		<?=$content?>
	</div>
	
	<div id="footer">
		Мой Сайт
	</div>
</body>
</html>
