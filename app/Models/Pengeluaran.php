<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran';
    protected $primaryKey = 'id_pengeluaran';
    protected $fillable = [
        'tanggal_pengeluaran', 
        'jumlah_pengeluaran', 
        'deskripsi_pengeluaran', 
        'nama_pengeluar',
        'id_admin',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'id_admin');
    }
}
