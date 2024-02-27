<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisIuran extends Model
{
    use HasFactory;
    protected $table = 'jenis_iuran';
    protected $primaryKey = 'id_jenis_iuran';
    protected $fillable = [
        'jenis_iuran',
        'pembayaran_jenis_iuran',
    ];

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_jenis_iuran');
    }
}
