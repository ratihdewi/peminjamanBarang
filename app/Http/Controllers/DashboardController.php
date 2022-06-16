<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\Peminjaman;
use App\Models\PeminjamanItem;
use App\Models\Status;
use App\Models\User;
use App\Utilities\FlashMessage;
use App\Http\Requests\BarangRequest;
use App\Http\Requests\PeminjamanRequest;
use App\Http\Requests\PerpanjangRequest;
use Auth;

class DashboardController extends Controller
{
    public function index(Asset $asset, User $user)
    {
        if(Auth::user()->role_id != 1 && Auth::user()->role_id != 2){
            $peminjaman = Peminjaman::orderBy('tgl_pinjam', 'DESC')->limit(10)->where('user_id', Auth::user()->id)->get();
        } else{
            $peminjaman = Peminjaman::orderBy('tgl_pinjam', 'DESC')->limit(10)->get();
        }
        return view('module.dashboard.index', compact('asset', 'user', 'peminjaman'));
    }
}
