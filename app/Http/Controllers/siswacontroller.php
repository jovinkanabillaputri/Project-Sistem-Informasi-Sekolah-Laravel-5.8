<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
use App\kelas;
use App\jurusan;

class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::orderBy('created_at', 'DESC')->get();
        return view('siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        return view('siswa.create',compact('kelas', 'jurusan'));
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
            'nis'              =>'required|numeric',
            'nama'             =>'required',
            'jenis_kelamin'    =>'required',
            'email'            =>'required',
            'alamat'           =>'required',
            'kelas_id'         =>'required',
            'jurusan_id'       =>'required'
        ]);

        siswa::create([
            'nis'              =>$request->nis,
            'nama'             =>$request->nama,
            'jenis_kelamin'    =>$request->jenis_kelamin,
            'email'            =>$request->email,
            'alamat'           =>$request->alamat,
            'kelas_id'         =>$request->kelas_id,
            'jurusan_id'       =>$request->jurusan_id
        ]);

        return redirect(route('siswa.index'))->with(['Success'=>'Data Siswa berhasil ditambahkan!']);
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
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        $siswa = siswa::where('id',$id)->first();
        return view('siswa.edit',compact('siswa', 'kelas', 'jurusan'));
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
            'nis'              =>'required|numeric',
            'nama'             =>'required',
            'jenis_kelamin'    =>'required',
            'email'            =>'required',
            'alamat'           =>'required',
            'kelas_id'         =>'required',
            'jurusan_id'       =>'required'
        ]);

        $siswa = siswa::find($id);
        $siswa->update([
            'nis'              =>$request->nis,
            'nama'             =>$request->nama,
            'jenis_kelamin'    =>$request->jenis_kelamin,
            'email'            =>$request->email,
            'alamat'           =>$request->alamat,
            'kelas_id'         =>$request->kelas_id,
            'jurusan_id'       =>$request->jurusan_id
        ]);

        return redirect(route('siswa.index'))->with(['Success'=>'Data Siswa berhasil diubah!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        siswa::where('id',$id)->delete();
        return redirect(route('siswa.index'))->with(['Success'=>'Data Siswa berhasil dihapus!']);
    }
}
