<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Driver;
use App\Models\Pemesan;
use App\Models\Pesanan;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pesanans = Pesanan::with('kendaraan','pemesan','driver')->get();
        
        return view('dashboard.pesanan',compact('pesanans'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pesanans = Pesanan::all();
        $kendaraans = Kendaraan::all();
        $drivers = Driver::all();
        $pemesans = Pemesan::all();
        // $pemesans1 = Pemesan::where('level','user')->get();
        
        return view('dashboard.add-pesanan', compact('pesanans','kendaraans','drivers','pemesans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Pesanan::create([
            'driver_id' => $request->driver,
            'kendaraan_id' => $request->kendaraan,
            'pemesan_id' => $request->pemesan,
            'tanggal' => Carbon::now(),
            'pembuat' => $request->pembuat,
            'petugas_approve' => 'pending',
            'akomodasi_approve' => 'pending',
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $pesanan = Pesanan::findOrFail($id);
        if (auth()->user()->level == 'petugas') {
            $pesanan->petugas_approve = 'approved';
            $pesanan->save();
            return redirect()->back();
        }
        if (auth()->user()->level == 'akomodasi') {
            $pesanan->akomodasi_approve = 'approved';
            $pesanan->save();
            return redirect()->back();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // return $pesanan;
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();
        return redirect()->back();
    }
    public function acc_petugas(string $id)
    {
        
    }
}
