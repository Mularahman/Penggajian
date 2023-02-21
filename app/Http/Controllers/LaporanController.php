<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Absensi;
use App\Models\Jabatan;
use App\Models\Potongan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class LaporanController extends Controller
{
    public function pegawai()
    {
        $data = User::with('jabatan')->get();
        $jabatan = Jabatan::all();
        if(request('search')){
            $data = User::OrderBy('id','asc')->where('name','LIKE','%'.request('search'). '%')->get();

         }
        return view('admin.laporan.pegawai',[
            'data' => $data,
            'jabatan' => $jabatan,
        ]);
    }
    public function cetak_pegawai()
    {
        $data = User::with('jabatan')->get();
        $jabatan = Jabatan::all();

        $pdf = PDF::loadview('admin.laporan.cetak_pegawai',[
            'data'=>$data,
            'jabatan'=>$jabatan,
        ]);
    	return $pdf->stream();
    }
    public function gaji()
    { $bulan = date('Y') . '-' . date('m');

        $user = User::all();

        return view('admin.laporan.gaji',[
            'user' => $user,
            'bulan' => $bulan,

        ]);
    }
    public function filter_gaji(Request $request){



        $user = User::all();

        return view('admin.laporan.gajii',[
            'user' => $user,
            'bulan' => $request->bulan,

        ]);
    }
    public function cetak_gaji($bulan)
    {
        $user = User::all();

        $pdf = PDF::loadview('admin.laporan.cetak_gaji',[
            'data'=>$user,
            'bulan'=>$bulan,
        ]);
    	return $pdf->stream();
    }

    public function absensi()
    {
        $bulan = date('Y') . '-' . date('m');
        $user = User::with('absensi','jabatan','absensi.kehadiran')->get();

        $potongan = Potongan::all();

        return view('admin.laporan.absensi',[

            'user' => $user,
            'bulan' => $bulan,

            'potongan' => $potongan,

        ]);
    }
    public function filter_absensi(Request $request){

        $user = User::with('absensi','jabatan','absensi.kehadiran')->get();
        $potongan = Potongan::all();

        return view('admin.laporan.absensii',[

            'bulan' => $request->bulan,
            'user' => $user,
            'potongan' => $potongan,

        ]);
    }
    public function cetak_absensi($bulan)
    {
        $user = User::with('absensi','jabatan','absensi.kehadiran')->get();
        $potongan = Potongan::all();

        $pdf = PDF::loadview('admin.laporan.cetak_absensi',[
            'data'=>$user,
            'bulan'=>$bulan,
            'potongan' => $potongan,
        ]);
    	return $pdf->stream();
    }


    public function pilihpegawai()
    {
        $bulan = date('Y') . '-' . date('m');
        $user = User::with('absensi','jabatan','absensi.kehadiran')->get();

        return view('admin.laporan.pilihpegawai',[
            'user' => $user,
            'bulan' => $bulan,
                   ]);
    }

    public function slipgaji(Request $request){

        $user = User::with('absensi','jabatan','absensi.kehadiran')->where('id', $request->pegawai)->first();

        return view('admin.laporan.slipgaji',[

            'bulan' => $request->bulan,
            'id' => $request->pegawai,
            'user' => $user,

        ]);
    }
    public function cetak_slipgaji($id,$bulan)
    {


        $user = User::where('id',$id)->first();

        $pdf = PDF::loadview('admin.laporan.cetak_slipgaji',[
            'user'=>$user,
            'bulan'=>$bulan,
            'id' => $id,
        ]);
    	return $pdf->stream();
    }

    public function datagaji(){



        $user = Absensi::where('user_id', auth()->user()->id)->get();

        return view('gaji',[
            'user' => $user,


        ]);
    }

    public function pilihbulan(){

        $user = User::where('id',auth()->user()->id)->first();

        return view('pilihbulan',[
            'user' => $user,



        ]);
    }
    public function slipgaji_pegawai(Request $request){

        $user = User::where('id',auth()->user()->id)->first();

        return view('slipgaji',[
            'bulan' => $request->bulan,
            'id' => $request->pegawai,
            'user' => $user,


        ]);
    }

}
