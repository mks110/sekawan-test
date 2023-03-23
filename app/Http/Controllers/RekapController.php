<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pesanan;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use App\Models\RekapKendaraan;
use App\Exports\KendaraanExport;
use Maatwebsite\Excel\Facades\Excel;


class RekapController extends Controller
{
    //
    public function index(Request $request){
        if ($request->start_date || $request->end_date) {
            $start_date = Carbon::parse($request->start_date)->toDateTimeString();
            $end_date = Carbon::parse($request->end_date)->toDateTimeString();
            $data = RekapKendaraan::whereBetween('tanggal',[$start_date,$end_date])->get();
        } else {
            $data = RekapKendaraan::latest()->get();
        }
        
        return view('dashboard.rekap', compact('data'));
    }

    public function buat_rekap(){
        
        $rekap = Pesanan::with('kendaraan','driver','pemesan')->where('petugas_approve', 'approved')->where('akomodasi_approve','approved')->get();
        
        foreach ($rekap as $key => $rekaps) {
            # code...
            RekapKendaraan::insert([
                'kendaraan' => $rekaps->kendaraan->jenis,
                'merk' => $rekaps->kendaraan->merk,
                'type' => $rekaps->kendaraan->type,
                'driver' => $rekaps->driver->name,
                'pemesan' => $rekaps->pemesan->name,
                'tanggal' => $rekaps->tanggal,
                'kepentingan' => $rekaps->pemesan->kebutuhan,
            ]);
        }
        
        $hapus = Pesanan::with('kendaraan','driver','pemesan')->where('petugas_approve', 'approved')->where('akomodasi_approve','approved');
        
        $hapus->delete();
        return redirect()->back();
    }
    public function kendaraanexport(){
        return Excel::download(new KendaraanExport, 'rekap-kendaraan.xlsx');
    }

}
