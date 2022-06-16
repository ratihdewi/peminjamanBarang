<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterMail extends Model
{
    use HasFactory;

    protected $fillable = [
        'approve_mail',
        'reject_mail',
        'request_mail'
    ];

    //nama tabel
    protected $table = 'master_mails';
}
