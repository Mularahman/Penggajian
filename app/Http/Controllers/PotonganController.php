<?php

namespace App\Http\Controllers;

use App\Models\Potongan;
use Illuminate\Http\Request;

class PotonganController extends Controller
{
    public function index()
    {
        $data = Potongan::all();
        return view('admin.data_potongan.potongan',[
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'nama_potongan' => 'required',
            'jumlah_potongan' => 'required',

        ]);


        Potongan::create([
            'nama_potongan' => $data['nama_potongan'],
            'jumlah_potongan' => $data['jumlah_potongan'],

        ]);

        return back()->with('success', 'Berhasil Menambahkan Data Potongan !');
    }

    public function edit($id)
    {
        return view('admin.data_potongan.edit',[
            'data' =>$data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'nama_potongan' => 'required',
            'jumlah_potongan' => 'required',

         ]);
         $d = Potongan::FindOrfail($id);
         $d->update($data);

         return
         redirect('/jenis_potongan')->with('success', 'Berhasil Mengedit Data Jenis Potongan !');
    }

    public function destroy($id)
    {
        $d = Potongan::FindOrfail($id);


        $d->delete();
        return
        redirect('/jenis_potongan')->with('success','Berhasil Mendelete Data Jenis Potongan !');
    }


}
