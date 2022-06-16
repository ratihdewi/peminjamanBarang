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
use App\Utilities\CreateNoPeminjaman;
use Auth;
use Carbon\Carbon;
use DB;

class PinjamController extends Controller
{
    public function create()
    {
        $getRow = Peminjaman::max('id');
        $getRow++;
        $kode = 'TIK'.('-').date('y').date('m').date('d').('-').str_pad($getRow,'0',STR_PAD_LEFT);
        $assets = Asset::where('jumlah_asset', '>', 0)->get();
        $status = Status::all();

        return view('module.peminjaman.create', compact('assets', 'kode', 'status'));
    }
    public function store(PeminjamanRequest $request)
    {
        $data['user_id'] = Auth::user()->id;
        $data['kode_transaksi'] = $request->get('kode_transaksi');
        $data['peminjam'] = $request->get('peminjam');
        $data['nip'] = $request->get('nip');
        $data['no_hp'] = $request->get('no_hp');
        $data['email'] = $request->get('email');
        $data['tgl_pinjam'] = $request->get('tgl_pinjam');
        $data['tgl_kembali'] = $request->get('tgl_kembali');
        $data['status_id'] = 4;
        $data['kondisi'] = 'baik';
        $peminjaman = Peminjaman::create($data);

        PeminjamanItem::where('user_id', Auth::user()->id)->where('temporary', 1)->update(['temporary' => 0, 'peminjaman_id' => $peminjaman->id]);

        $tmp = PeminjamanItem::select('*')->where('peminjaman_id', $peminjaman->id)->get();

        if ($tmp == NULL) {
            Peminjaman::where('id', $peminjaman->id)->delete();
            return redirect()->back()->withInput($request->input())->with('message', 
            new FlashMessage('Anda belum memasukkan data barang', 
                FlashMessage::DANGER));
        }

        return redirect()->route('peminjaman.index')->with('message', 
            new FlashMessage('Peminjaman barang sedang diajukan', 
                FlashMessage::SUCCESS));
    }
}
