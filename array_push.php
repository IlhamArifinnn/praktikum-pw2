<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>

<body>
      <?php
      $tims = ['Erwin', 'Heru', 'Ali', 'Zaki'];
      array_push($tims, 'wati');
      foreach ($tims as $person) {
            echo $person . '<br/>';
      }
      ?>
</body>

</html>