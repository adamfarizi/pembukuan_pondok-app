<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
        'tanggal_pengeluaran', 
        'jumlah_pengeluaran', 
        'jenis_pengeluaran', 
        'status_pengeluaran',
        'id_admin',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'id_admin');
    }
}
