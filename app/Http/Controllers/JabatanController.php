<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jabatan::all();
        return view('admin.data_jabatan.jabatan',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'nama_jabatan' => 'required',
            'gaji_pokok' => 'required',


        ]);


        Jabatan::create([
            'nama_jabatan' => $data['nama_jabatan'],
            'gaji_pokok' => $data['gaji_pokok'],


        ]);

        return back()->with('success', 'Berhasil Menambahkan Data Jabatan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jabatan $jabatan)
    {
        return view('admin.data_jabatan.edit',[
            'data' =>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'nama_jabatan' => 'required',
            'gaji_pokok' => 'required',
            
         ]);
         $d = Jabatan::FindOrfail($id);
         $d->update($data);

         return
         redirect('/data_jabatan')->with('success', 'Berhasil Mengedit Data Jabatan !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Jabatan::FindOrfail($id);


        $d->delete();
        return
        redirect('/data_jabatan')->with('success','Berhasil Mendelete Data Jabatan !');
    }
}
