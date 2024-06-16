<?php
  $password = "pizza123";

  $hash = password_hash($password, PASSWORD_DEFAULT);

  if (password_verify("pizza123", $hash)) {
    echo "access granted";
  } else {
    echo "access denied";
  }
?>