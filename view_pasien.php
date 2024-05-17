<?php
require_once 'dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
// select  * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
$sql = "SELECT * FROM pasien WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>

<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?= $row['id'] ?></td>
        </tr>
        <tr>
            <td>Kode</td>
            <td><?= $row['kode'] ?></td>
        </tr>
        <tr>
            <td>Nama Pasien</td>
            <td><?= $row['nama'] ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?= $row['tmp_lahir'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?= $row['tgl_lahir'] ?></td>
        </tr>
        <tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?= $row['gender'] ?></td>
        </tr>
        <td>Email</td>
        <td><?= $row['email'] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?= $row['alamat'] ?></td>
        </tr>
        <tr>
            <td>Kelurahan_id</td>
            <td><?= $row['kelurahan_id'] ?></td>
        </tr>
    </tbody>
</table>