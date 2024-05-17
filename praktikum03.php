<?php require_once 'header.php' ?>
<?php require_once 'sidebar.php' ?>

<div class="content-wrapper">
    <div class="content">
        <div class="container">
            <form method="POST" action="praktikum03.php" class="border rounded" style="background-color: beige;">
                <fieldset class="p-4">
                    <h2>Form Pendaftaran</h2>
                    <div class="form-group row">
                        <label for="nim" class="col-4 col-form-label font-weight-bold">NIM</label>
                        <div class="col-8">
                            <input id="nim" name="nim" placeholder="NIM" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label font-weight-bold">Nama Lengkap</label>
                        <div class="col-8">
                            <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label font-weight-bold">Jenis Kelamin</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jenis_kelamin" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki">
                                <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jenis_kelamin" id="jk_1" type="radio" class="custom-control-input" value="Perempuan">
                                <label for="jk_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prodi" class="col-4 col-form-label font-weight-bold">Program Studi</label>
                        <div class="col-8">
                            <select id="prodi" name="prodi" class="custom-select">
                                <option value="">Pilih Program Studi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Bisnis Digital">Bisnis Digital</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label font-weight-bold">Skill Web & Programming</label>
                        <div class="col-8">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html">
                                <label for="skill[]_0" class="custom-control-label">HTML</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css">
                                <label for="skill[]_1" class="custom-control-label">CSS</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="javascript">
                                <label for="skill[]_2" class="custom-control-label">Javascript</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="bootstrap">
                                <label for="skill[]_3" class="custom-control-label">Bootstrap</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php">
                                <label for="skill[]_4" class="custom-control-label">PHP</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="python">
                                <label for="skill[]_5" class="custom-control-label">Python</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="java">
                                <label for="skill[]_6" class="custom-control-label">Java</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="domisili" class="col-4 col-form-label font-weight-bold">Tempat Domisili</label>
                        <div class="col-8">
                            <select id="domisili" name="domisili" class="custom-select">
                                <option value="">Pilih Kota Domisili</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Depok">Depok</option>
                                <option value="Bogor">Bogor</option>
                                <option value="Tangerang">Tangerang</option>
                                <option value="Bekasi">Bekasi</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label font-weight-bold">Email</label>
                        <div class="col-8">
                            <input id="email" name="email" placeholder="Example@gmail.com" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
            <hr>


            <?php

            if (isset($_POST['submit'])) {


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
            }
            ?>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<?php require_once 'footer.php' ?>