<?php

//�������� 5 ���������� � ������� ���������� ������
  $string = "string";
  $number = 5;
  $float_number = 5.5;
  $boolean = true;
  $null = null;

//�������� ���������� $name, $age, $city, $job
  $name = "Alexey";
  $age = 28;
  $city = "Omsk";
  $job = true;

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