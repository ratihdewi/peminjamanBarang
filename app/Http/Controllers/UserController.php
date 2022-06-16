<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Services\UserInsert;
use App\Utilities\FlashMessage;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = role::all();
        return view('module.master.user.index', compact('users', 'roles'));
    }

    public function create()
    {
        $role = Role::all();
        return view('module.master.user.create', compact('role'));
    }

    public function store(UserRequest $request, userInsert $service)
    {
        if($service->insert($request->all())){
        	return redirect()->route('master.user.index')->with('message', 
            new FlashMessage('User telah berhasil ditambahkan!', 
                FlashMessage::SUCCESS));
        } else {
        	return redirect()->route('master.user.index')->with('message', 
            new FlashMessage('Gagal menambahkan user dikarenakan email sudah didaftarkan.', 
                FlashMessage::DANGER));
        }
    }

    public function show(User $user)
    {
        return view('module.master.user.detail', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('master.user.index')->with('message', 
            new FlashMessage('User telah berhasil dihapus!', 
                FlashMessage::WARNING));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('module.master.user.edit', compact('user', 'roles'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user->fill(collect($request->toArray())->filter()->toArray());
        if($request->password!=''){
            $user->password = bcrypt($user->password);
            $user->password_real = $request->password;
        } 
        $user->save();
        return redirect()->route('master.user.show', [$user])->with('message', 
            new FlashMessage('User telah berhasil diubah!', 
                FlashMessage::SUCCESS));

    }
}
