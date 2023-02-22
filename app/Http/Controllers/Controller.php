<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\User;
use App\Models\Absensi;
use App\Models\Jabatan;
use App\Models\Potongan;
use App\Models\Tunjangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $data = User::all();
        $jabatan = Jabatan::all();
        $Absensi = Tunjangan::all();
        $Gaji = Potongan::all();
        return view('admin.index',[
            'data' => $data,
            'jabatan' => $jabatan,
            'absensi' => $Absensi,
            'gaji' => $Gaji,
        ]);
    }
    public function home(){
        $data = User::where('id', auth()->user()->id)->first();


        return view('home',[
            'data' => $data,

        ]);
    }
    public function login(){

        return view('admin.auth.login');
    }
    public function logins(Request $request){

        $data = $this->validate($request, [
            'name' => 'required',
            'password' => 'required'
        ]);


        if(Auth::attempt($data)) {
            $request->session()->regenerate();
            if(Auth::user()->role == 'admin'){
                    return
                    redirect()->intended('/dashboard');
                }
            return
            redirect()->intended('/home');


        }
        return back()->with('error', 'Login Failed!! Email Or Password Wrong!!');
    }

    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return
        redirect('/login');

    }
}
