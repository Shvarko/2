<?php
 
require_once("config.php");
 
if(isset($_POST['login'])){
 
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
 
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
 
$sql = "SELECT * FROM user WHERE email=:email";
 
$stmt = $db->prepare($sql);
 
 
 
// bind parameter to query
 
$params = array(
 ":email" => $email,
);
 
$stmt->execute($params);
 
$user = $stmt->fetch(PDO::FETCH_ASSOC);
 
// if user already registered
 
if($user){
 
// verify password
 
if($password == $user["password"]){
echo '<center>Вы бы вошли в систему, если бы она была</center>';
}else{
	echo '<center>Не пройдешь, злоумышленник</center>';
}
 
}
 
}
 
?>

 
<html lang="en">
 
<head>
 
<meta charset="UTF-8">
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<meta http-equiv="X-UA-Compatible" content="ie=edge">
 
<title>Login</title>
 
<link rel="stylesheet" href="css/bootstrap.min.css" />
 
</head>
 
<body class="bg-light">
 
<div class="container mt-5">
 
<div class="row">
 
<div class="col-md-6">
 
<p>&larr; <a href="index.php">На главную</a>
 
<h4>Введите свои данные</h4>
 
<p>Ещё не зарегистрированы? <a href="register.php">Регистрация</a></p>
 
<form action="" method="POST">
 
<div class="form-group">
 
<label for="username">Email</label>
 
<input class="form-control" type="text" name="email" placeholder="email" />
 
</div>
 
<div class="form-group">
 
<label for="password">Password</label>
 
<input class="form-control" type="password" name="password" placeholder="Password" />
 
</div>
 
<input type="submit" class="btn btn-success btn-block" name="login" value="Войти" />
 
</form>
 
 
 
</div>
 
<div class="col-md-6">
 
<!-- fill with something-->
 
</div>
 
</div>
 
</div>
 
 
 
</body>
 
</html>
 

 