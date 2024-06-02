<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $table = 'kelurahan';
    protected $fillable = ['id', 'nama', 'kec_id'];

    public $timestamps = false;

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }
}
