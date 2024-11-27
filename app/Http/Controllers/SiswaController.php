<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

use function Laravel\Prompts\form;

class SiswaController extends Controller
{
    public function showForm(){

        return view ('form');
    }
    //
    // public function data()
    // {
    //     return view('data');
    // }

    public function dataRegister(Request $req){
        $validate = $req->validate([
                        'nama'      => 'required',
                        'ttl'       => 'required',
                        'alamat'    => 'required',
                        'email'     => 'required',
                        'no_telp'   => 'required'
                    ]);



                    $eksekusi = Siswa::create([
                        'nama'      => $req->nama,
                        'ttl'       => $req->ttl,
                        'alamat'    => $req->alamat,
                        'email'     => $req->email,
                        'no_telp'   => $req->no_telp
                    ]);

                    // dd($req->all());


        if ($eksekusi) {
            return redirect('data')->with('success', 'Data Berhasil Di Tambahkan');
        }else{
            return "Data Gagal Input Bos";
        }

    }


    public function data(){
        $data = Siswa::select('*')->get();
        return view('data', compact('data'));
    }

    public function hapus($nama){
        $hapus = Siswa::where('nama', $nama)->delete();
        if ($hapus) {
            // code...
            return redirect('data');
        }else{
            return "Gagal Menghapus Data";
        }
    }


    public function edit($id)
        {
            $siswa = Siswa::findOrFail($id);
            return view('editdata', compact('siswa')); // Pastikan file ini berada di resources/views/biodata/edit.blade.php
        }

        // Fungsi untuk memperbarui data
        public function update(Request $request, $id)
        {
            // Validasi data
            $validated = $request->validate([
                        'nama'      => 'required',
                        'ttl'       => 'required',
                        'alamat'    => 'required',
                        'email'     => 'required',
                        'no_telp'   => 'required'
            ]);

            // Temukan data berdasarkan id dan update
            $siswa = Siswa::findOrFail($id);
            $siswa->update($validated);

            return redirect('data');

        }


}
