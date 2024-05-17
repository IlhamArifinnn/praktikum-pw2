<?php

$nama = $_POST['nama'] ?? '';
$skill = $_POST['skill'] ?? [];
$nim = $_POST['nim'] ?? '';
$jenisKelamin = $_POST['jenis_kelamin'] ?? '';
$domisili = $_POST['domisili'] ?? '';
$prodi = $_POST['prodi'] ?? '';
$email = $_POST['email'] ?? '';
$skor = 0;


// logic nentuin skor dari skill
foreach ($skill as $s) {
      switch ($s) {
            case 'html':
                  $skor += 10;
                  break;

            case 'css':
                  $skor += 10;
                  break;

            case 'javascript':
                  $skor += 20;
                  break;

            case 'bootstrap':
                  $skor += 20;
                  break;

            case 'php':
                  $skor += 30;
                  break;

            case 'python':
                  $skor += 30;
                  break;

            case 'java':
                  $skor += 50;
                  break;

            default:
                  break;
      }
}

// grade dari skor
$kategori_skill;
if ($skor >= 100 && $skor <= 150) {
      $kategori_skill = "Sangat Baik";
} elseif ($skor >= 60 && $skor <= 100) {
      $kategori_skill = "Baik";
} elseif ($skor >= 40 && $skor <= 60) {
      $kategori_skill = "Cukup";
} elseif ($skor >= 0 && $skor <= 40) {
      $kategori_skill = "Kurang";
} else {
      $kategori_skill = "Tidak Memadai";
}


echo "NIM : " . $nim . "<br>";
echo "Nama : " . $nama . "<br>";
echo "Jenis Kelamin : " . $jenisKelamin . "<br>";
echo "Program Studi : " . $prodi . "<br>";
echo "Skill : ";
foreach ($skill as $s) {
      echo $s . ", ";
}
echo "<br> Skor : " . $skor . "<br>";
echo "Domisili : " . $domisili . "<br>";
echo "Email : " . $email;
