<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    username: <br>
    <input type="text" name="username"><br>
    age: <br>
    <input type="text" name="age"><br>
    email: <br>
    <input type="text" name="email">
    <input type="submit" name="login" id="login">
  </form>
</body>
</html>

<?php
  if (isset($_POST["login"])) {
    // FILTER_VALIDATE_INT returns an empty string if it doesn't pass validation
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

  }

  if(empty($email)) {
    echo "That email wasn't valid";
  } else {
    echo "Your email is {$email}";
  }
  

?>

