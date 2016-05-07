<?php
//Создайте переменную, используйте конструкцию swich
//если значение переменной от 1 до 5(вкл.), то вывести рабочий день
//если 6 или 7, то выходной
  $day = 6;

  switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5: echo "Is work day";
      break;
    case 6:
    case 7: echo "This weekend";
      break;
    default: echo "Error";
  }

?>