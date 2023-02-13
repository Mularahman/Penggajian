<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::with('jabatan')->get();
        $jabatan = Jabatan::all();
        if(request('search')){
            $data = User::OrderBy('id','asc')->where('name','LIKE','%'.request('search'). '%')->get();

         }
        return view('admin.data_pegawai.pegawai',[
            'data' => $data,
            'jabatan' => $jabatan,
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
            'nik' => 'required',
            'name' => 'required',
            'password' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'tanggal_masuk' => 'required',
            'status' => 'required',
        ]);
        // dd($data['nik']);

        $data['password'] =
        Hash::make($data['password']);

        User::create([
            'nik' => $data['nik'],
            'name' => $data['name'],
            'password' => $data['password'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'jabatan_id' => $data['jabatan'],
            'tanggal_masuk' => $data['tanggal_masuk'],
            'status' => $data['status'],
        ]);

        return back()->with('success', 'Berhasil Menambahkan Data Pegawai !');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.data_pegawai.edit',[
            'data' =>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $this->validate($request, [
            'nik' => 'required',
            'name' => 'required',
            'password' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan_id' => 'required',
            'tanggal_masuk' => 'required',
            'status' => 'required',
         ]);

         $d = User::FindOrfail($id);
         
         $d->update($data);

         return
         redirect('/data_pegawai')->with('success', 'Berhasil Mengedit Data Pegawai !');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $d = User::FindOrfail($id);


        $d->delete();
        return
        redirect('/data_pegawai')->with('success','Berhasil Mendelete Data Pegawai !');
    }
}
