<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table = 'santri';
    protected $primaryKey = 'id_santri';
    protected $fillable = [
        'nama_santri', 
        'tempat_tanggal_lahir_santri', 
        'jenis_kelamin_santri', 
        'alamat_santri', 
        'no_hp_santri', 
        'email_santri', 
        'status_santri', 
        'nama_wali_santri', 
        'no_hp_wali_santri', 
        'ktp_santri', 
        'kk_santri',
        'id_admin',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'id_admin');
    }
}
