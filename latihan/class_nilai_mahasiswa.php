<?php
class NilaiMahasiswa
{

    var $nim, $matkul, $nilai;

    public function __construct($nim, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    public function grade($nilai)
    {
        return ($nilai > 56) ? "Lulus" : "Tidak lulus";
    }

    public function hasil($nilai)
    {
        if ($nilai >= 85 && $nilai <= 100) {
            return "A";
        } elseif ($nilai >= 70 && $nilai <= 84) {
            return "B";
        } elseif ($nilai >= 56 && $nilai <= 69) {
            return "C";
        } elseif ($nilai >= 36 && $nilai <= 55) {
            return "D";
        } elseif ($nilai >= 0 && $nilai <= 35) {
            return "E";
        } else {
            return "Nilai tidak valid";
        }
    }
}
