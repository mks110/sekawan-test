<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Pesanan;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $jmlkendaraan = Kendaraan::count();
        $jmldriver = Driver::count();
        $jmlpesanan = Pesanan::count();
        
        return view('dashboard.home',compact('jmlkendaraan','jmldriver','jmlpesanan'));
    }
}
