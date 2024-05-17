<?php

$nama = $_POST["nama"] ?? "";
$matkul = $_POST["matkul"] ?? "";
$nilai_uts = $_POST["nilai_uts"] ?? "";
$nilai_uas = $_POST["nilai_uas"] ?? "";
$nilai_tugas = $_POST["nilai_tugas"] ?? "";

?>
<?= "nama: $nama <br>"; ?>
<?= "matkul: $matkul <br>"; ?>
<?= "nilai uts: $nilai_uts <br>"; ?>
<?= "nilai uas: $nilai_uas <br>"; ?>
<?= "nilai tugas: $nilai_tugas <br>"; ?>