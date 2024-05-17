<?php require_once 'header.php' ?>
<?php require_once 'sidebar.php' ?>

<div class="content-wrapper">
    <div class="content">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="mt-2">Belanja Online</h1>
                    <hr>

                    <form action="praktikum02.php" method="post" class='p-2'>
                        <div class="form-group row">
                            <label for="costumer" class="col-4 col-form-label">Costumer</label>
                            <div class="col-8">
                                <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Radio Buttons</label>
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV" required="required">
                                    <label for="radio_0" class="custom-control-label">TV</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="AC" required="required">
                                    <label for="radio_1" class="custom-control-label">AC</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Kulkas" required="required">
                                    <label for="radio_2" class="custom-control-label">Kulkas</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_3" type="radio" class="custom-control-input" value="Mesin Cuci" required="required">
                                    <label for="radio_3" class="custom-control-label">Mesin Cuci</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                            <div class="col-8">
                                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-success">Pesan</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                </div>

                <div class="col-md-4">
                    <div class="border rounded">
                        <div class="bg-primary py-3 rounded">
                            <h6 class="text-white mx-3">Daftar Harga</h6>
                        </div>
                        <div class="">
                            <p class="border-bottom py-1 mx-3 mt-2">TV : 4.200.000</p>
                            <p class="border-bottom py-1 mx-3 mt-2">AC : 5.600.000</p>
                            <p class="border-bottom py-1 mx-3">Kulkas : 3.100.000</p>
                            <p class="border-bottom py-1 mx-3">Mesin Cuci : 3.800.000</p>
                        </div>
                        <div class="bg-secondary py-3 rounded">
                            <h6 class="text-white mx-3">Harga dapat berubah setiap saat</h6>
                        </div>
                    </div>

                    <div class="mt-4 p-2 border rounded">
                        <h3 class="border-bottom py-2">Struk Pembayaran</h3>
                        <p class='border p-2 rounded'>Nama Costumer: <?= isset($_POST['costumer']) ? $_POST['costumer'] : ''; ?></p>
                        <p class='border p-2 rounded'>Produk Pilihan: <?= isset($_POST['radio']) ? $_POST['radio'] : ''; ?></p>
                        <p class='border p-2 rounded'>Jumlah Beli: <?= isset($_POST['jumlah']) ? $_POST['jumlah'] : ''; ?></p>
                        <?php
                        // Menghitung total belanja
                        $harga_tv = 4200000;
                        $harga_ac = 5600000;
                        $harga_kulkas = 3100000;
                        $harga_mesin_cuci = 3800000;

                        $produk = isset($_POST['radio']) ? $_POST['radio'] : '';
                        $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
                        $total = 0;

                        switch ($produk) {
                            case 'TV':
                                $total = $harga_tv * $jumlah;
                                break;
                            case 'AC':
                                $total = $harga_ac * $jumlah;
                                break;
                            case 'Kulkas':
                                $total = $harga_kulkas * $jumlah;
                                break;
                            case 'Mesin Cuci':
                                $total = $harga_mesin_cuci * $jumlah;
                                break;
                            default:
                                $total = 0;
                                break;
                        }
                        ?>
                        <p class='border p-2 rounded'>Total Belanja: <?= number_format($total, 0, ',', '.'); ?></p>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php require_once 'footer.php' ?>