<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PertanyaanController extends Controller
{
    function tampil(){
        $pertanyaan = Pertanyaan::get();

        return view('manajemen-pertanyaan.tampil', compact('pertanyaan'));
    } 

    function tambah(){
        return view('manajemen-pertanyaan.tambah');
    }

    // function submit(Request $request){

    //     Session::flash('pertanyaan', $request->pertanyaan);

    //     $request->validate([
    //         'pertanyaan' => 'required'
    //     ],[
    //         'pertanyaan.required'=>'Pertanyaan Wajib Diisi!'
    //     ]);

    //     $pertanyaan = new Pertanyaan();
    //     $pertanyaan->pertanyaan = $request->pertanyaan;
    //     $pertanyaan->save();

    //     return redirect()->route('manajemen-per$pertanyaan.tampil')->with('success', 'Data berhasil disimpan.');
    // }

    // function edit($id){
    //     $pertanyaan = Pertanyaan::find($id);
    //     return view('manajemen-pertanyaan.edit', compact('pertanyaan')); 
    // }

    // function exedit(Request $request, $id){
    //     $pertanyaan = Pertanyaan::find($id);
    //     $pertanyaan->pertanyaan = $request->pertanyaan;
    //     $pertanyaan->update();

    //     return redirect()->route('manajemen-pertanyaan.tampil')->with('success', 'Data berhasil di edit.');
    // }
 
    // function hapus($id){
    //     $pertanyaan = Pertanyaan::find($id);
    //     $pertanyaan->delete();

    //     return redirect()->route('manajemen-pertanyaan.tampil');
    // }
}
