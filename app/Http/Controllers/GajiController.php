<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Absensi;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index(){
        $user = User::with('absensi','jabatan','absensi.kehadiran', 'absensi.kehadiran.potongan')->get();
        $potong = Absensi::with('kehadiran','kehadiran.potongan')->get() ;

        


        return view('admin.data_gaji.gaji',[
            'user' => $user,
            'potongan' => $potong,
        ]);
    }

    public function lihat($id){
        $user = User::where('id',$id)->get()->first();

        return view('admin.data_gaji.lihat',[
            'user' => $user,
            'id' => $id,
        ]);
    }
}
