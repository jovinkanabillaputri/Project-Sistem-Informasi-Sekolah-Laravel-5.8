<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guru;
use App\siswa;
use App\kelas;
use App\jurusan;

class dashboardcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah_guru = guru::all()->count();
        $jumlah_siswa = siswa::all()->count();
        $jumlah_kelas = kelas::all()->count();
        $jumlah_jurusan = jurusan::all()->count();

        return view('dashboard')
        ->with('jumlah_guru', $jumlah_guru)
        ->with('jumlah_siswa', $jumlah_siswa)
        ->with('jumlah_kelas', $jumlah_kelas)
        ->with('jumlah_jurusan', $jumlah_jurusan);


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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
