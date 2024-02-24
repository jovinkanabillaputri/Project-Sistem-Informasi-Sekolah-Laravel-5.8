<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelas;
use App\jurusan;
use App\guru;

class kelascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = kelas::orderBy('created_at', 'DESC')->get();
        return view('kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = jurusan::all();
        $guru = guru::all();
        return view('kelas.create',compact('jurusan', 'guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kelas'    =>'required|unique:kelas',
            'jurusan_id'    =>'required',
            'guru_id'       =>'required'
        ]);

        kelas::create([
            'nama_kelas'    =>$request->nama_kelas,
            'jurusan_id'    =>$request->jurusan_id,
            'guru_id'       =>$request->guru_id
        ]);

        return redirect(route('kelas.index'))->with(['Success'=>'Data Kelas berhasil ditambahkan!']);
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
        $jurusan = jurusan::all();
        $guru = guru::all();
        $kelas = kelas::where('id',$id)->first();
        return view('kelas.edit',compact('kelas','jurusan', 'guru'));
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
        $this->validate($request, [
            'nama_kelas'    =>'required',
            'jurusan_id'    =>'required',
            'guru_id'       =>'required'
        ]);

        $kelas = kelas::find($id);
        $kelas->update([
            'nama_kelas'    =>$request->nama_kelas,
            'jurusan_id'    =>$request->jurusan_id,
            'guru_id'       =>$request->guru_id
        ]);

        return redirect(route('kelas.index'))->with(['Success'=>'Data Kelas berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kelas::where('id',$id)->delete();
        return redirect(route('kelas.index'))->with(['Success'=>'Data Kelas berhasil dihapus!']);
    }
}
