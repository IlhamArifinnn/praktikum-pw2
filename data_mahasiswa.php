<?php require_once "class_mahasiswa.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Mahasiswa</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Mahasiswa</h1>
        <form method="POST" action="data_mahasiswa.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="thn_angkatan" class="col-4 col-form-label">Tahun Angkatan</label>
                <div class="col-8">
                    <input id="thn_angkatan" name="thn_angkatan" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-4 col-form-label">Prodi</label>
                <div class="col-8">
                    <select id="prodi" name="prodi" class="custom-select">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="ipk" class="col-4 col-form-label">IPK</label>
                <div class="col-8">
                    <input id="ipk" name="ipk" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>


        <?php
        if (isset($_POST["submit"])) {

            // Set nilai properti pada objek dari nilai yang diisi pada form
            $nim = $_POST["nim"];
            $nama = $_POST["nama"];
            $thn_angkatan = $_POST["thn_angkatan"];
            $prodi = $_POST["prodi"];
            $ipk = $_POST["ipk"];

            // Buat objek baru dari class bmiPasien
            $mahasiswa1 = new Mahasiswa($nim, $nama, $thn_angkatan, $prodi, $ipk);

            echo "<h2>Nilai Mahasiswa</h2> . <br>";
            echo "<p>NIM: " . $mahasiswa1->nim . "</p>";
            echo "<p>Nama: " . $mahasiswa1->nama . " </p>";
            echo "<p>Tahun Angkatan: " . $mahasiswa1->thn_angkatan . " </p>";
            echo "<p>Prodi: " . $mahasiswa1->prodi . "</p>";
            echo "<p>IPK: " . $mahasiswa1->predikat_ipk() . "</p>";
        }
        ?>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>