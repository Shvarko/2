<?php
 
require_once("config.php");
 
if(isset($_POST['register'])){
 
// filter data input
 
// encrypt password
 
$password = $_POST["password"];
 
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
 
// set query
 
$sql = "INSERT INTO user (email, password)
 
VALUES (:email, :password)";
 
$stmt = $db->prepare($sql);
 
// bind parameter to query
 
$params = array(
":password" => $password,
 
":email" => $email
 
);
 
// execute, save to database
 
$saved = $stmt->execute($params);
 
 
}
 
?>
 
<!DOCTYPE html>
 
<html lang="en">
 
<head>
 
<meta charset="UTF-8">
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<meta http-equiv="X-UA-Compatible" content="ie=edge">
 
<title>Register</title>
 
<link rel="stylesheet" href="css/bootstrap.min.css" />
 
</head>
 
<body class="bg-light">
 
<div class="container mt-5">
 
<div class="row">
 
<div class="col-md-6">
 
<p>&larr; <a href="index.php">Home</a>
 
<h4>Регистрация</h4>
 
<p>Уже есть на сайте? <a href="login.php">Залогиниться</a></p>
 
<form action="" method="POST">
 
 
<div class="form-group">
 
<label for="email">Email</label>
 
<input class="form-control" type="email" name="email" placeholder="Сюда Email" />
 
</div>
 
<div class="form-group">
 
<label for="password">Password</label>
 
<input class="form-control" type="password" name="password" placeholder="Password" />
 
</div>
 
<input type="submit" class="btn btn-success btn-block" name="register" value="Отправить" />
 
</form>
 
 
 
</div>
 
 
</div>
 
</div>
 
</body>
 
</html>