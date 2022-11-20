<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;


class PresensiController extends Controller
{
    public function LihatPresensi(){
        $dataPresensi = Presensi::latest()->get();
        return view('presensi.presensi_view', compact('dataPresensi'));
    }
}
