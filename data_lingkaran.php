<?php
require_once "class_lingkaran.php";

echo "NILAI PHI " . Lingkaran::PHI;
echo "<br>";
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);
echo "<br/>Luas Lingkaran pertama " . $lingkar1->getLuas();
echo "<br>Keliling Lingkaran pertama " . $lingkar1->getKeliling();
echo "<br><br>Luas Lingkaran kedua " . $lingkar2->getLuas();
echo "<br>Keliling Lingkaran kedua   " . $lingkar2->getKeliling();
