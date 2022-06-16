<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_transaksi',
        'peminjam', 'nip', 'no_hp', 'user_id', 
        'status_id', 'tgl_pinjam', 'tgl_kembali', 'keterangan',
        'no_memo', 'foto_memo', 'terlambat', 'kondisi', 'email'
    ];
    protected $table = 'peminjaman';

    public function items()
    {
        return $this->hasMany('App\Models\PeminjamanItem', 'peminjaman_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\status', 'status_id');
    }
}
