<?php

namespace App\Http\Controllers;

use App\Models\Tunjangan;
use Illuminate\Http\Request;

class TunjanganController extends Controller
{
    public function index()
    {
        $data = Tunjangan::all();
        return view('admin.data_tunjangan.tunjangan',[
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'nama_tunjangan' => 'required',
            'jumlah_tunjangan' => 'required',

        ]);


        tunjangan::create([
            'nama_tunjangan' => $data['nama_tunjangan'],
            'jumlah_tunjangan' => $data['jumlah_tunjangan'],

        ]);

        return back()->with('success', 'Berhasil Menambahkan Data Tunjangan !');
    }

    public function edit($id)
    {
        return view('admin.data_tunjangan.edit',[
            'data' =>$data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'nama_tunjangan' => 'required',
            'jumlah_tunjangan' => 'required',

         ]);
         $d = Tunjangan::FindOrfail($id);
         $d->update($data);

         return
         redirect('/data_tunjangan')->with('success', 'Berhasil Mengedit Data Tunjangan !');
    }

    public function destroy($id)
    {
        $d = Tunjangan::FindOrfail($id);


        $d->delete();
        return
        redirect('/data_tunjangan')->with('success','Berhasil Mendelete Data Tunjangan !');
    }


}
