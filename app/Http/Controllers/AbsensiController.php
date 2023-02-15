<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Absensi;
use App\Models\Potongan;
use App\Models\Kehadiran;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $user = User::with('absensi','jabatan','absensi.kehadiran')->get();


        $potongan = Potongan::all();
        
        return view('admin.data_absensi.absensi',[

            'user' => $user,
            'potongan' => $potongan,
        ]);
    }
    public function tambah($id)
    {

        $user = User::where('id', $id)->get();
        $potongan = Potongan::all();
        return view('admin.data_absensi.tambah',[
            'id' => $id,
            'potongan' => $potongan,
            'user' => $user,
        ]);
    }

    // public function store(Request $request )
    // {
    //     $data = $this->validate($request,[
    //         'a.*' => 'required',
    //         'user_id.*' => 'required',
    //         'bulan' => 'required',

    //     ]);

    //     foreach ( $data['user_id'] as $d){

    //         Absensi::create([
    //             'user_id' => $d,
    //             'bulan' => $data['bulan'],
    //         ]);
    //     }

    //         $absensi = Absensi::where('bulan',$data['bulan'])->get();
    //         foreach ( $absensi as $kehadiran){
    //             $idkehadiran = $kehadiran->id;
    //             }

    //         foreach ( $data['a'] as $da){
    //             foreach ( $da as $key=>$da){


    //                 Kehadiran::create([
    //                     'absensi_id' => $idkehadiran,
    //                     'potongan_id' => $key,
    //                     'jumlah' => $da,
    //                 ]);

    //             }
    //         }






    //     return redirect('/data_absensi')->with('success', 'Berhasil Menambahkan Data Jabatan !');
    // }
    public function store(Request $request , $id)
    {
        $data = $this->validate($request,[
            'a.*' => 'required',
            'user_id' => 'required',
            'bulan' => 'required',

        ]);


            Absensi::create([
                'user_id' => $id,
                'bulan' => $data['bulan'],
            ]);


            $absensi = Absensi::where('bulan',$data['bulan'],)->get();
            foreach ( $absensi as $kehadiran){
            $idkehadiran = $kehadiran->id;
            }


            foreach ( $data['a'] as $da){
                foreach ( $da as $key=>$da){


                    Kehadiran::create([
                        'absensi_id' => $idkehadiran,
                        'potongan_id' => $key,
                        'jumlah' => $da,
                    ]);

                }
            }






        return redirect('/data_absensi')->with('success', 'Berhasil Menambahkan Data Absensi !');
    }

}
