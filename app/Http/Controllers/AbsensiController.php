<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Absensi;
use App\Models\Potongan;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $data = Absensi::with('user','jabatan')->get();
        $potongan = Potongan::all();
        return view('admin.data_absensi.absensi',[
            'data' => $data,
            'potongan' => $potongan,
        ]);
    }
    public function tambah()
    {

        $user = User::all();
        $potongan = Potongan::all();
        return view('admin.data_absensi.tambah',[

            'potongan' => $potongan,
            'user' => $user,
        ]);
    }

    public function store(Request $request )
    {
        $data = $this->validate($request,[
            'a.*' => 'required',
            'user_id.*' => 'required',
            'bulan' => 'required',

        ]);
        for ($i=0; $i<=count($data['user_id']);$i++){
            
            $absensi = Absensi::create([
                'user_id' => $data['user_id'][$i],
                'bulan' => $data['bulan'],

            ]);
        }
        // foreach ( $data['user_id'] as $key=>$d){


        //     dd(end($data['user_id']));
        //     dd($absensi);

        //     // foreach ( $absensi AS $kehadiran){

        //     //     foreach ( $d AS $key => $da){
        //     //         Kehadiran::create([
        //     //             'absensi_id' => $kehadiran->id,
        //     //             'potongan_id' => $key,
        //     //             'jumlah' => $da,
        //     //         ]);
        //     //     }
        //     // }

        // }




        return back()->with('success', 'Berhasil Menambahkan Data Jabatan !');
    }

}
