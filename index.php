<?php
  // isset() = Returns TRUE if a variable is declared and not null
  // empty() = Returns TRUE if a variable is not declared, false, null, ""
  // Note: $_POST is an associative array
  
  $username = "hello";

  if (empty($username)){
    echo "This variable is empty";
  } else {
    echo "This variable is NOT empty";
  }

?>

