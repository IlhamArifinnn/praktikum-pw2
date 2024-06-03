<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;

    protected $table = 'periksa';
    protected $fillable = [
        'id',
        'tanggal',
        'berat',
        'tinggi',
        'tensi',
        'keterangan',
        'pasien_id',
        'dokter_id'
    ];

    public $timestamps = false;

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function paramedik()
    {
        return $this->belongsTo(Paramedik::class);
    }
}
