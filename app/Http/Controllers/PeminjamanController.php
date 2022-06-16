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
use DateTime;

class PeminjamanController extends Controller
{
    public function index()
    {
        if(Auth::user()->role_id != 1 && Auth::user()->role_id != 2){
            $peminjaman = Peminjaman::where('user_id', Auth::user()->id)->get();
        } else{
            $peminjaman = Peminjaman::get();
        }        

        return view('module.peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        $getRow = Peminjaman::max('id');
        $getRow++;
        $kode = 'MEMO'.('-').date('y').date('m').date('d').('-').str_pad($getRow,'0',STR_PAD_LEFT);
        $assets = Asset::where('jumlah_asset', '>', 0)->get();
        $status = Status::all();

        return view('module.peminjaman.memo.create', compact('assets', 'kode', 'status'));
    }

    public function store(PeminjamanRequest $request)
    {
        if($request->file('foto_memo')) {
            $file = $request->file('foto_memo');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('foto_memo')->move("dokumen/memo", $fileName);
            $foto_memo = $fileName;
        } else {
            $foto_memo = NULL;
        }

        $data['user_id'] = Auth::user()->id;
        $data['kode_transaksi'] = $request->get('kode_transaksi');
        $data['peminjam'] = $request->get('peminjam');
        $data['nip'] = $request->get('nip');
        $data['no_hp'] = $request->get('no_hp');
        $data['email'] = $request->get('email');
        $data['tgl_pinjam'] = $request->get('tgl_pinjam');
        $data['tgl_kembali'] = $request->get('tgl_kembali');
        $data['keterangan'] = $request->get('keterangan');
        $data['no_memo'] = $request->get('no_memo');
        $data['foto_memo'] = $foto_memo;
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

    public function show(Peminjaman $peminjaman)
    {
        return view('module.peminjaman.detail', compact('peminjaman'));
    }

    public function itemStore(BarangRequest $request, $peminjaman_id)
    {
        $peminjaman = Peminjaman::find($peminjaman_id);
        $data = [];
        $data = $request->all();
        
        $data['temporary'] = ($peminjaman_id==0) ? 1 : 0;
        $data['user_id'] = Auth::user()->id;
        $data['kembali'] = $data['jumlah'];
        $peminjaman_item = PeminjamanItem::create($data);

        if($peminjaman_id==0){
            $items = PeminjamanItem::where('user_id', Auth::user()->id)->where('temporary', 1)->get();
            return view('module.peminjaman.memo.itemlist', compact('items'));
        } else {
            return redirect()->route('module.peminjaman.memo.show', [$peminjaman_id, $peminjaman->status_id])->with('message', 
            new FlashMessage('Item telah berhasil diajukan!', 
                FlashMessage::SUCCESS));
        }
    }

    public function itemIndex()
    {
        $items = PeminjamanItem::where('user_id', Auth::user()->id)->where('temporary', 1)->get();
        return view('module.peminjaman.memo.itemlist', compact('items'));
    }

    public function itemDestroy(PeminjamanItem $item)
    {
        $peminjaman_id = $item->peminjaman_id;
        $item->delete();
        if($peminjaman_id==0){
            $items = PeminjamanItem::where('user_id', Auth::user()->id)->where('temporary', 1)->get();
            return view('module.peminjaman.memo.itemlist', compact('items'));
        } else {
            return redirect()->route('module.peminjaman.memo.show', [$peminjaman_id, $peminjaman->status_id])->with('message', 
            new FlashMessage('Item telah berhasil diajukan!', 
                FlashMessage::SUCCESS));
        }
    }

    public function getInputBarang () {

        return PeminjamanItem::where('peminjaman_id', 0)->get();
    }

    //pengajuan
    public function pengajuan()
    {
        $peminjaman = Peminjaman::where('status_id', 4)->get();

        return view('module.peminjaman.memo.pengajuan', compact('peminjaman'));
    }

    public function showPengajuan(Peminjaman $peminjaman)
    {
        return view('module.peminjaman.memo.detailpengajuan', compact('peminjaman'));
    }

    public function approve(Peminjaman $peminjaman)
    {
        $peminjam = Peminjaman::find($peminjaman);
        $tmp = PeminjamanItem::select('*')->where('peminjaman_id', $peminjaman->id)->get();
        $jumlah = 0;

        foreach($tmp as $tem){
            $jumlah = $jumlah + ($tem->jumlah);
        }
        $peminjaman->status_id = 5;
        $peminjaman->save();

        // $tmp->asset->update([
        //     'jumlah_asset' => ($tmp->asset->jumlah_asset - $jumlah)
        // ]);        
        // $tmp->save();

        return redirect()->route('pengambilan.index')->with('message', 
        new FlashMessage('Peminjaman telah disetujui', 
            FlashMessage::SUCCESS));
    }

    public function reject (Peminjaman $peminjaman)
    {
        $peminjaman->status_id = 3;
        $peminjaman->save();
        return redirect()->route('peminjaman.index')->with('message', 
        new FlashMessage('Peminjaman ditolak', 
            FlashMessage::DANGER));
    }

    //pengambilan
    public function pengambilan()
    {
        $peminjaman = Peminjaman::where('status_id', 5)->get();

        return view('module.peminjaman.memo.pengambilan', compact('peminjaman'));
    }

    public function showPengambilan(Peminjaman $peminjaman)
    {
        return view('module.peminjaman.memo.detailpengambilan', compact('peminjaman'));
    }
    public function ambil (Peminjaman $peminjaman)
    {
        $peminjaman->status_id = 1;
        $peminjaman->save();
        return redirect()->route('pengembalian.index')->with('message', 
        new FlashMessage('Barang telah diambil', 
            FlashMessage::SUCCESS));
    }

    //pengembalian
    public function pengembalian()
    {
        $peminjaman = Peminjaman::where('status_id', 1)->get();

        return view('module.peminjaman.memo.pengembalian', compact('peminjaman'));
    }

    public function showPengembalian(Peminjaman $peminjaman)
    {
        return view('module.peminjaman.memo.detailpengembalian', compact('peminjaman'));
    }

    public function kembali (Peminjaman $peminjaman)
    {
        $fdate = $peminjaman->updated_at;
        $tdate = $peminjaman->tgl_kembali;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        echo $days;

        $peminjaman->status_id = 2;
        $peminjaman->terlambat = $days;
        $peminjaman->save();
        return redirect()->route('peminjaman.index')->with('message', 
        new FlashMessage('Barang telah dikembalikan', 
            FlashMessage::SUCCESS));
    }
    public function perpanjang(Peminjaman $peminjaman)
    {
        return view('module.peminjaman.memo.kembali.perpanjang', compact('peminjaman'));
    }

    public function updatePerpanjang(Peminjaman $peminjaman, PerpanjangRequest $request)
    {
        $peminjaman->fill(collect($request->toArray())->filter()->toArray());
        $peminjaman->save();
        // var_dump($peminjaman);die();
        return redirect()->route('pengembalian.index')->with('message', 
        new FlashMessage('Peminjaman berhasil diperpanjang', 
            FlashMessage::SUCCESS));
    }

    public function createTik()
    {
        $getRow = Peminjaman::max('id');
        $getRow++;
        $kode = 'TIK'.('-').date('y').date('m').date('d').('-').str_pad($getRow,'0',STR_PAD_LEFT);
        $assets = Asset::where('jumlah_asset', '>', 0)->get();
        $status = Status::all();

        return view('module.peminjaman.create', compact('assets', 'kode', 'status'));
    }
    public function storeTik(PeminjamanRequest $request)
    {
        $fdate = $request->updated_at;
        $tdate = $request->tgl_kembali;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        echo $days;

        $data['user_id'] = Auth::user()->id;
        $data['kode_transaksi'] = $request->get('kode_transaksi');
        $data['peminjam'] = $request->get('peminjam');
        $data['nip'] = $request->get('nip');
        $data['no_hp'] = $request->get('no_hp');
        $data['email'] = $request->get('email');
        $data['tgl_pinjam'] = $request->get('tgl_pinjam');
        $data['tgl_kembali'] = $request->get('tgl_kembali');
        $data['keterangan'] = $request->get('keterangan');
        $data['status_id'] = 1;
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
