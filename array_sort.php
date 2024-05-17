<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>

<body>
      <?php
      $ar_buah = ["p" => "Pepaya", "a" => "Apel", "m" => "Mangga", "j" => "Jambu"];
      echo '<ol>';
      foreach ($ar_buah as $k => $v) {
            echo '<li>' . $k . ' - ' . $v . '</li>';
      }
      echo '</ol>';
      sort($ar_buah);
      echo '<hr/>';
      echo '<ol>';
      foreach ($ar_buah as $k => $v) {
            echo '<li>' . $k . ' - ' . $v . '</li>';
      }
      echo '</ol>';
      ?>
</body>

</html>