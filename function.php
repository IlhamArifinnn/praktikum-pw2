<?php

function hitungUmur($thn_lahir)
{
      $thn_sekarang = 2024;
      $umur = $thn_sekarang - $thn_lahir;

      return $umur;
}

echo "Umur saya adalah: " . hitungUmur(2004);
echo "<br>";
echo "Umur dia adalah: " . hitungUmur(2006);
echo "<br>";

// function usia($angka)
// {
//      $year = 2024;
//      $sekarang = $year - $angka;
//
//      return $sekarang;
// }
//
// echo usia(2004);
