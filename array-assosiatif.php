<?php
//array asosiatif
$mahasiswa = ["Nama" => "Ipin", "Umur" => 75, "Alamat" => "Depok"];

echo $mahasiswa["Nama"] . "<br>";

foreach ($mahasiswa as $key => $value) {
      echo $key . " : " . $value;
      echo "<br>";
}

echo "<br>";
