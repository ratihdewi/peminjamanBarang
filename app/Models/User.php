<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role_id',
        'password',
        'username',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRoleCaptionAttribute()
    {
        if($this->role_id==1){
            return 'Super Admin';
        } else if($this->role_id==2){
            return 'Manager TI';
        } else if($this->role_id==3){
            return 'Staff TI';
        }else {
            return 'User';
        }
        //return $this->belongsTo('App\Models\Role', 'role_id');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\Role', 'role_id');
    }
}
