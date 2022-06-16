<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'peminjaman_id', 'asset_id', 'jumlah', 'kembali', 'temporary', 'user_id'
    ];
    protected $table = 'peminjaman_items';

    public function peminjaman()
    {
        return $this->belongsTo('App\Models\Peminjaman', 'peminjaman_id');
    }

    public function asset()
    {
        return $this->belongsTo('App\Models\Asset', 'asset_id');
    }
}
