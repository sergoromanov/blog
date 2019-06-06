<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 class="header">
	БЛОГ
	</h1>
<?php
	$database = [
		[
		'tittle' => 'Погода на завтра',
		'short' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor',
		'long' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor',
		'img' => '1.jpg'
		
		],
		[
		'tittle' => 'Погода на послезавтра',
		'short' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor',
		'long' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor',
		'img' => '2.jpg'
		],
		[
		'tittle' => 'Погода через 3 дня',
		'short' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor',
		'long' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor',
		'img' => '3.jpg'
		],
	];
?>
	<div>
		<img src="">	
		<?php for($i=0; $i<count($database);$i++){
			echo '<div class="post"><h3>'.$database[$i]['tittle'].'</h3></div>';
			echo '<div><img src="'.$database[$i]['img'].'"></div>';
			echo '<p>'. $database[$i]['short']. '</p>';
			echo '<a href="page.php?index='.$i.'">далее</a>';
			echo '<hr>';
		}?>;
	</div>
</body>
</html>