<?php
  #������� ������
  $str = 'name color size description opacity';
  echo "$str";

  #������� �� ������
  $array = explode(" ", $str);
  echo '<pre>';
  print_r($array);
  echo '</pre>';

  #���������� ������ � ������� � ������ � �������� ����� ��� ������ ����� while
  $i = 0;
  while ($array[$i] <= count($array)) {
    $new_string = implode(",", $array);
    $i++;
  }

  echo "$new_string";
?>