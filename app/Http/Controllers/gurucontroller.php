<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guru;
// use App\mapel;

class gurucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = guru::orderBy('created_at', 'DESC')->get();
        return view('guru.index',compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $mapel = mapel::all();
        // return view('guru.create',compact('mapel'));
        return view('guru.create');
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
            'nip'           =>'required|numeric',
            'nama'          =>'required',
            'jenis_kelamin' =>'required',
            'no_hp'         =>'required|numeric',
            'alamat'        =>'required',
            // 'mapel_id'      =>'required',
        ]);
        
        guru::create([
            'nip'            =>$request->nip,
            'nama'           =>$request->nama,
            'jenis_kelamin'  =>$request->jenis_kelamin,
            'no_hp'          =>$request->no_hp,
            'alamat'         =>$request->alamat,
            // 'mapel_id'       =>$request->mapel_id,
        ]);

        return redirect(route('guru.index'))->with(['Success'=>'Data Guru berhasil ditambahkan!']);

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
        // $mapel = mapel::all();
        $guru = guru::where('id',$id)->first();
        return view('guru.edit',compact('guru'));
    
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
            'nip'           =>'required|numeric',
            'nama'          =>'required',
            'jenis_kelamin' =>'required',
            'no_hp'         =>'required|numeric',
            'alamat'        =>'required',
            // 'mapel_id'      =>'required',
        ]);
        
        $guru = guru::find($id);
        $guru->update([
            'nip'            =>$request->nip,
            'nama'           =>$request->nama,
            'jenis_kelamin'  =>$request->jenis_kelamin,
            'no_hp'          =>$request->no_hp,
            'alamat'        =>$request->alamat,
            // 'mapel_id'       =>$request->mapel_id,
        ]);

        return redirect(route('guru.index'))->with(['Success'=>'Data Guru berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        guru::where('id',$id)->delete();
        return redirect(route('guru.index'))->with(['Success'=>'Data Guru berhasil dihapus!']);
    }
}
