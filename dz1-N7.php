<?php

//создайте ассоциативный массив с данными из предидущего задания, массив должен быть вложенный
//выведете массив при помощи print_r и foreach
  $cars = array(
    'bmv' => array(
      'model' => 'X5',
      'speed' => '120',
      'doors' => '5',
      'year' => '2015'
    ),
    'toyota' => array(
      'model' => 'camry',
      'speed' => '130',
      'doors' => '4',
      'year' => '2016'
    ),
    'opel' => array(
      'model' => 'astra',
      'speed' => '100',
      'doors' => '5',
      'year' => '2001'
    ),
  );

  #bring in a readable form through print_r
  echo '<pre>';
  print_r($cars);
  echo '</pre>';

  #bring through foreach
  foreach($cars as $car) {
    echo '<pre>';
    print_r($car);
    echo '</pre>';
  }

?>