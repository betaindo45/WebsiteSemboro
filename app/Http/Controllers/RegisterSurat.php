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
        if($request->keperluan=="Surat Keterangan Pindah Tempat Tinggal"){
            $validatedData = $request->validate([
                'name'=>'required|max:255',
                'kelamin'=>'required',
                'agama'=>'required',
                'nik'=>'required|max:16|min:16',
                'imagenik'=>'mimes:jpg,png,jpeg,pdf|file|max:5120',
                'ttl'=>'required',
                'pekerjaan'=>'required',
                'alamat'=>'required',
                'kk'=>'required|max:16|min:16',
                'imagekk'=>'mimes:jpg,png,jpeg,pdf|file|max:5120',
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
                'nik'=>'required|max:16|min:16',
                'imagenik'=>'mimes:jpg,png,jpeg,pdf|file|max:5120',
                'ttl'=>'required',
                'pekerjaan'=>'required',
                'alamat'=>'required',
                'kk'=>'required|max:16|min:16',
                'imagekk'=>'mimes:jpg,png,jpeg,pdf|file|max:5120',
                'keperluan'=>'required',
                'keterangan'=>'required',
                'nohp'=>'required',
                'email'=>'email:dns|nullable',
                'cetak'=>'required'
            ]); 
        }

        $validatedData['imagenik']=$request->file('imagenik')->store('public/ktp');
        $validatedData['imagekk']=$request->file('imagekk')->store('public/kk');
        post::create($validatedData);
        //redirect dibenerin dengan halaman terpisah
        return redirect('/success');
    }
}
