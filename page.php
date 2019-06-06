<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">	
</head>
<body>
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

<h1 class="header">
	БЛОГ
	</h1>
<hr>
 <?php $index=$_GET['index']?>
 <div class="post"><h3><?php echo $database[$index]['tittle'] ?></h3></div>
 <p><?php echo $database[$index]['long'] ?></p>
 <div>
 	<?php  
	echo '<a href="index.php?index='.$i.'">назад</a>';
	?>
</div>

</body>
</html>

