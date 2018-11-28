
<html lang="en">
 
<head>
 
<meta charset="UTF-8">
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<meta http-equiv="X-UA-Compatible" content="ie=edge">
 
<title>Блог с авторизацией</title>
 
 
<link rel="stylesheet" href="css/bootstrap.min.css" />
 
</head>
 
<body class="bg-light">
 
<header>
 
<div class="jumbotron jumbotron-fluid">
 
<div class="container">
 
<div class="row">
 
<div class="col-md-8">
 
<h1>Блог с авторизацией</h1>
 
 
</div>
 
<div class="col-md-4">
 
<a href="login.php" class="btn btn-secondary">Логин</a>
 
<a href="register.php" class="btn btn-success">Регистрация</a>
 
</div>
 
</div>
 
</div>
 
</div>
 
</header>
 
<section>
 
<div class="container">
 
<div class="row">
<div class="container">
  <div class="row">
  
  
<?

$connection = new PDO('mysql:host=localhost;dbname=blog;', 'root', '');
foreach($connection->query('SELECT * FROM book') as $row) {
	?>
	<div class="col-sm">
	<p class= "my1" >
	<?
	 echo "<img src='" . $row['img_title'] . "' alt='' style = 'width: 304px; height: 254px;' /></p> ";
   	 echo  $row['id'] . '</br> ' . $row['name']  . ' </br>' . $row['autor']  . '</br> ' . $row['description'] . '</br>';
	 ?>
	 </div>
	 <?
}
	 ?>
	 
	</div>
</div>

 
</div>
 
</div>
 
</section>
 
</body>
 
</html>