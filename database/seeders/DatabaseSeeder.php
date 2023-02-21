<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('jabatans')->insert([
            'nama_jabatan' => 'Admin',
            'gaji_pokok' => '20000',

        ]);
        DB::table('jabatans')->insert([
            'nama_jabatan' => 'HRD',
            'gaji_pokok' => '50000',

        ]);
        DB::table('users')->insert([
            'nik' => '123222345',
            'name' => 'admin',
            'jenis_kelamin' => 'Laki-laki',
            'jabatan_id' => 1,
            'tanggal_masuk' => '2020-06-06',
            'status' => 'Karyawan Tetap',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'nik' => '09012310122',
            'name' => 'Pegawai1',
            'jenis_kelamin' => 'Laki-laki',
            'jabatan_id' => 2,
            'tanggal_masuk' => '2020-06-06',
            'status' => 'Karyawan Tetap',
            'password' => Hash::make('password'),
            'role' => 'pegawai'
        ]);
        DB::table('potongans')->insert([
            'nama_potongan' => 'Alpha',
            'jumlah_potongan' => '100',

        ]);
        DB::table('potongans')->insert([
            'nama_potongan' => 'Sakit',
            'jumlah_potongan' => '50',

        ]);
        DB::table('tunjangans')->insert([
            'nama_tunjangan' => 'Uang Makan',
            'jumlah_tunjangan' => '500',
        ]);
        DB::table('tunjangans')->insert([
            'nama_tunjangan' => 'Tj Transport',
            'jumlah_tunjangan' => '300',
        ]);
    }
}
