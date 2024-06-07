
 
<?php
  
  
  $foods = array("apple", "banana", "orange", "grapes");
  //array_push($foods, "pineapple", "kiwi");
  //array_pop($foods);
  //array_shift($foods);
  $foods = array_reverse($foods);

  foreach($foods as $food){
    echo $food . "<br>";
  }

  echo count($foods)
  

?>

