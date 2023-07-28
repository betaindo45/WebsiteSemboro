<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class registersurat extends Controller
{
    //
    public function index(){
        return view('formsurat');
    }
    public function store(Request $request){

        $triming = $request->nohp
        if($request->nohp.){

        }

        if($request->keperluan=="Surat Keterangan Pindah Tempat Tinggal"){
            $validatedData = $request->validate([
                'name'=>'required|max:255',
                'kelamin'=>'required',
                'agama'=>'required',
                'nik'=>'required|max:16',
                'ttl'=>'required',
                'pekerjaan'=>'required',
                'alamat'=>'required',
                'kk'=>'required|max:16',
                'keperluan'=>'required',
                'keterangan'=>'required',
                'nohp'=>'required',
                'email'=>'email:dns|nullable',
                'cetak'=>'required',

                'alamattujuan'=>'required',
                'desa'=>'required',
                'kecamatan'=>'required',
                'kota'=>'required',
                'pengikut'=>'required'
            ]);
        }
        else{
            $validatedData = $request->validate([
                'name'=>'required|max:255',
                'kelamin'=>'required',
                'agama'=>'required',
                'nik'=>'required|max:16',
                'ttl'=>'required',
                'pekerjaan'=>'required',
                'alamat'=>'required',
                'kk'=>'required|max:16',
                'keperluan'=>'required',
                'keterangan'=>'required',
                'nohp'=>'required',
                'email'=>'email:dns|nullable',
                'cetak'=>'required'
            ]); 
        }
        post::create($validatedData);
        //redirect dibenerin dengan halaman terpisah
        return redirect('/success');
    }
}
