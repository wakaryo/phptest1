<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/index.css">
  <title>Document</title>
</head>

<body>
  <table class="">
    <?php
    for ($a = 1; $a <= 9; $a++) {
      echo '<tr class="table2">';
      for ($b = 1; $b <= 9; $b++) {
        echo '<td class="table1">' . $a * $b . '</td>';
      }
      echo '</tr>';
    }
    ?>
  </table>
</body>

</html>