<?php

//Create 5 variables with different scalar types
  $string = "string";
  $number = 5;
  $float_number = 5.5;
  $boolean = true;
  $null = null;

//Create a variable $ name, $ age, $ city, $ job
  $name = "Alexey";
  $age = 28;
  $city = "Omsk";
  $job = true;

#Output all in a readable form
  echo 'Name - '. $name . '<br>' .
    'Age - ' . $age . '<br>' .
    'City - ' . $city . '<br>';
    if($job){
      echo 'Job - have job';
    }
    else {
      echo 'Job - no work';
    };
?>