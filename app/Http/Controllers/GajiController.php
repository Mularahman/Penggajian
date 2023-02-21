<?php

namespace App\Http\Controllers;


use App\Models\Gaji;
use App\Models\User;
use App\Models\Absensi;
use App\Models\Jabatan;
use App\Models\Tunjangan;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index(){

        $bulan = date('Y') . '-' . date('m');

        $user = User::all();

        return view('admin.data_gaji.gaji',[
            'user' => $user,
            'bulan' => $bulan,

        ]);
    }
    public function filter(Request $request){



        $user = User::all();

        return view('admin.data_gaji.gajii',[
            'user' => $user,
            'bulan' => $request->bulan,

        ]);
    }
    public function tambah($id,$bulan){
        $data = User::where('id', $id)->get() ;
        $tunjangan = Tunjangan::all();

        return view('admin.data_gaji.tambah',[
            'bulan' => $bulan,
            'data' => $data,
            'tunjangan' => $tunjangan,
            'id' =>$id
        ]);
    }

    public function store(Request $request , $id){

        $data = $this->validate($request,[
            'tunjangan_id' => 'required',
            'bulan' => 'required',

        ]);

        foreach($data['tunjangan_id'] as $value){
        Gaji::create([

            'user_id' => $id,
            'bulan' => $data['bulan'],
            'tunjangan_id' => $value
        ]);
    }


        return redirect('/data_gaji')->with('success', 'Berhasil Menambah Tunjangan ');


    }

    public function lihat($id, $bulan){
        $user = User::where('id',$id)->first();

        return view('admin.data_gaji.lihat',[
            'bulan' => $bulan,
            'user' => $user,
            'id' => $id,
        ]);
    }
}
