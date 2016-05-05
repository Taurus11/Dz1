<?php
  #создать строку
  $str = 'name color size description opacity';
  echo "$str";

  #Разбить на массив
  $array = explode(" ", $str);
  echo '<pre>';
  print_r($array);
  echo '</pre>';

  #Развернуть массив и склеить в строку с символом между при помощи цикла while
  $i = 0;
  while ($array[$i] <= count($array)) {
    $new_string = implode(",", $array);
    $i++;
  }

  echo "$new_string";
?>