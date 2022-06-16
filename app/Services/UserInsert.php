<?php

namespace App\Services;
use App\Models\User;

class UserInsert
{
    public function insert(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        $data['password_real'] = $data['password'];
        if($data['role_id']==2 || $data['role_id']==3){
            $data['is_ti'] = $data['role_id'];
        } else {
            $data['is_ti'] = 0;
        }
        
        if($this->emailIsExists($data['email'])){
            return false;
        } else {
            User::create($data);
            return true;
        }
    }

    public function emailIsExists($email)
    {
        if(User::where('email', $email)->exists()){
            return true;
        } else {
            return false;
        }
    }
}