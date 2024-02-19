<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $fillable = [
        'tanggal_pembayaran', 
        'jumlah_pembayaran', 
        'jenis_pembayaran', 
        'status_pembayaran',
        'id_admin',
        'id_santri',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'id_admin');
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'id_santri');
    }
}
