<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kendaraan = Kendaraan::all();
        
        return view('dashboard.kendaraan',compact('kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.add-kendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Kendaraan::create([
            'jenis' => $request->jenisk,
            'merk' => $request->merk,
            'type' => $request->type,
            'bbm' => $request->bbm,
            'service' => $request->service
        ]);
        return view('dashboard.kendaraan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();
        return redirect()->back();
    }
}
