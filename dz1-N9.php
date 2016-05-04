<?php

  $str = 'name color size description opacity';
//  echo "$str";

  $array = explode(" ", $str);
  echo '<pre>';
  print_r($array);
  echo '</pre>';

  #Развернуть массив и склеить в строку с символом между
  $i = 0;
  while ($array[$i] <= count($array)) {
    implode(",", $array);
    $i++;
  }

  echo "$array";
?>