<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $table = 'assets';
    protected $fillable = ['nama_asset','jumlah_asset'];

    public function peminjaman()
    {
    	return $this->hasMany(PeminjamantItem::class);
    }
}
