<?php

//�������� ������, ��������, �������� �� ������, ��������
//��������� while ������� � ������
  $str = 'name color size description opacity';
  echo "$str";

  $array = explode(" ", $str);
  echo '<pre>';
  print_r($array);
  echo '</pre>';

  $i = 0;
  while ($i <= count($array)) {
    $new_string = implode(",", $array);
    $i++;
  }


  echo "$new_string";


?>