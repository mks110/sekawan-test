<?php

namespace App\Http\Controllers;

use App\Models\Pemesan;
use Illuminate\Http\Request;

class PemesanController extends Controller
{
    //
    public function index(){
        $alls = Pemesan::all();
        return view('dashboard.pemesan',compact('alls'));
    }
}
