<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
      table {
        position: absolute;
        left: 100px;
        top: 100px;
      }
      td, tr {
        text-align: center;
        width: 50px;
        height: 50px;
        border: 1px solid black;
    }
  </style>
</head>
<body>
    <?php

    echo "<table>";

      for($i = 1; $i < 10; $i++) {
        echo'<tr>';

        for($j = 1; $j < 10; $j++) {

          if(($i * $j) % 2 === 0) {
            echo '<td>(' . ($i * $j) . ')</td>';
          } elseif (($i * $j) % 2 === 1) {
            echo '<td>[' . ($i * $j) . ']</td>';
          }
        }

        echo'</tr>';
      }

    ?>
</body>
</html>
