<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    public function Sekolah(){
        $adminData = Sekolah::find(1);
        return view('sekolah.sekolah_view',compact('adminData'));
    }


        public function UpdateSekolah(Request $request){
        $data = Sekolah::find(1);
        $data->nama = $request->nama;
        $data->npsn = $request->npsn;
        $data->nss = $request->nss;
        $data->alamat = $request->alamat;
        $data->provinsi = $request->provinsi;
        

        if ($request->file('logo_sekolah')) {
            $file = $request->file('logo_sekolah');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/sekolah_images'),$filename);
            $data['logo_sekolah'] = $filename;
        }

        $notification = array(
            'message' => 'Admin Profile Update Succesfully',
            'alert-type' => 'success',
        );

        $data->save();
        return redirect()->back()->with($notification);



        
    }
}
