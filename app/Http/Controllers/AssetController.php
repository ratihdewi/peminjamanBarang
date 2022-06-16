<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Http\Requests\AssetRequest;
use App\Utilities\FlashMessage;
use RealRashid\SweetAlert\Facades\Alert;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::all();
        return view('module.master.asset.index', compact('assets'));
    }

    public function create()
    {
        $assets = Asset::all();
        return view('module.master.asset.create', compac('assets'));
    }

    public function store(AssetRequest $request)
    {
        $asset = Asset::create([
            'nama_asset' =>$request->nama_asset,
            'jumlah_asset' => $request->jumlah_asset
        ]);

        return redirect()->route('master.asset.index')->with('message', 
        new FlashMessage('Berhasil menambahkan data.', 
            FlashMessage::SUCCESS));
    }

    public function destroy(Asset $asset)
    {
        $asset->delete();
        // var_dump($asset);die();
        return redirect()->route('master.asset.index')->with('message', 
            new FlashMessage('Data Asset telah berhasil dihapus!', 
                FlashMessage::WARNING));
    }
    public function edit($peminjaman)
    {
        $asset = Asset::findOrFail($peminjaman);
        return view('module.master.asset.update', compact('asset'));
    }

    public function update(AssetRequest $request, Asset $asset)
    {
        $assets = Asset::find($asset->id);
        $asset->nama_asset = $request->nama_asset;
        $asset->jumlah_asset = $request->jumlah_asset;
        // $asset->fill(collect($request->toArray())->filter()->toArray());
        $asset->save();
        return redirect()->route('master.asset.index')->with('message', 
            new FlashMessage('Data Asset telah berhasil diubah!', 
                FlashMessage::SUCCESS));
    }
}
