<?php

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