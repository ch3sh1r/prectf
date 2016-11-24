<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Введите данные</h2>
  <form method="POST">
    <div class="form-group">
      <label for="login">Имя:</label>
      <input type="text" class="form-control" id="login" name="login" placeholder="Введите имя">
    </div>
    <div class="form-group">
      <label for="pwd">Пароль:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Введите пароль">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php
$login = $_POST["login"];
$pwd = $_POST["pwd"];

if ($login == "admin" && (hash('md5', $pwd, false) == "0e217645921763549827451237846512")){
  $f = fopen("./flag.txt", "rb");
  $flag = fgets($f);
  echo "$flag";
  fclose($f);
}
else{
  if (isset($login) && isset($pwd)){
    echo "<script>alert('Incorrect!')</script>";
  }
}
?>

</body>
</html>

