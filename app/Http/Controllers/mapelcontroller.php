<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mapel;
// use App\guru;
use App\kelas;
use App\jurusan;

class mapelcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = mapel::orderBy('created_at', 'DESC')->get();
        return view('mapel.index',compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $guru = guru::all();
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        return view('mapel.create', compact('kelas', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_mapel'    =>'required',
            'hari'          =>'required',
            'jam_mulai'     =>'required',
            'jam_selesai'   =>'required',
            // 'guru_id'       =>'required',
            'kelas_id'      =>'required',
            'jurusan_id'    =>'required'
        ]);

        mapel::create([
            'nama_mapel'    =>$request->nama_mapel,
            'hari'          =>$request->hari,
            'jam_mulai'     =>$request->jam_mulai,
            'jam_selesai'   =>$request->jam_selesai,
            // 'guru_id'       =>$request->guru_id,
            'kelas_id'      =>$request->kelas_id,
            'jurusan_id'    =>$request->jurusan_id
        ]);

        return redirect(route('mapel.index'))->with(['Success'=>'Data Mata Pelajaran berhasil ditambahkan!']);
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
        // $guru = guru::all();
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        $mapel = mapel::where('id',$id)->first();
        return view('mapel.edit', compact('mapel','kelas', 'jurusan',));
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
        $this->validate($request,[
            'nama_mapel'    =>'required',
            'hari'          =>'required',
            'jam_mulai'     =>'required',
            'jam_selesai'   =>'required',
            // 'guru_id'       =>'required',
            'kelas_id'      =>'required',
            'jurusan_id'    =>'required'
        ]);

        $mapel = mapel::find($id); 
        $mapel->update([
            'nama_mapel'    =>$request->nama_mapel,
            'hari'          =>$request->hari,
            'jam_mulai'     =>$request->jam_mulai,
            'jam_selesai'   =>$request->jam_selesai,
            // 'guru_id'       =>$request->guru_id,
            'kelas_id'      =>$request->kelas_id,
            'jurusan_id'    =>$request->jurusan_id
        ]);

        return redirect(route('mapel.index'))->with(['Success'=>'Data Mata Pelajaran berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mapel::where('id',$id)->delete();
        return redirect(route('mapel.index'))->with(['Success'=>'Data Mata Pelajaran berhasil dihapus!']);
    }
}
