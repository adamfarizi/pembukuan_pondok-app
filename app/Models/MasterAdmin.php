<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterAdmin extends Model
{
    use HasFactory;
    protected $table = 'master_admins';
    protected $primaryKey = 'id_master_admins';
    protected $fillable = [
        'pembayaran_daftar_ulang',
        'pembayaran_tamrin',
    ];
}
