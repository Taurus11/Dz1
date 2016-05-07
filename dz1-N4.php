<?php

#Ñîçäàéòå ïåğåìåííóş, èñïîëüçóÿ if íàïèøèòå êîíñòğóêöèş
  $age = 33;

  if ($age > 18 && $age < 65) {
    echo "You still work and work";
  } elseif ($age > 65){
    echo "Time for you to retire";
  } elseif ($age > 1 && $age < 17) {
    echo "you work too early";
  } elseif ($age === 0) {
    echo "happy birthday";
  } else {
    echo "ERROR";
  }

?>