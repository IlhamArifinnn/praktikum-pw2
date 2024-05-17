<?php
//array multidimensi
$dosen = [
      ["Pak Rojul", "Web"],
      ["Pak Reza", "DDP"],
      ["Pak Lukman", "OS"]
];

echo $dosen[0][1];
echo "<br>";

foreach ($dosen as $dsn) {
      echo "Nama Dosen : " . $dsn[0];
      echo "Matkul : " . $dsn[1];
      echo "<br>";
}
