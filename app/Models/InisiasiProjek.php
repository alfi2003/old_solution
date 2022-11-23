<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InisiasiProjek extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'id_witel',
        'divisi',
        'nama_hero',
        'no_telp',
        'nama_pelanggan',
        'jenis_produk',
        'deskripsi',
        // 'lampiran',
        // 'dateline',
    ];
}
