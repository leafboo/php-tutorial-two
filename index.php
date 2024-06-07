
 
<?php
  
  // associative arrays are just dictionaries in python and objects in js

  $capitals = array(
                      "USA" => "Washington D.C.",
                      "Japan" => "Tokyo",
                      "South Korea" => "Seoul",
                      "India" => "New Delhi"
  );
  // $keys = array_keys($capitals);
  //$values = array_values($capitals);
  //$capitals = array_flip($capitals);
  //$capitals = array_reverse($capitals);

  foreach($capitals as $key => $value) {
    echo "{$key} -> {$value}<br>";
  }
  

?>

