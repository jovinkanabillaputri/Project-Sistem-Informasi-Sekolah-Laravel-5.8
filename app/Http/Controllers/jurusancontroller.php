<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jurusan;

class jurusancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = jurusan::orderBy('created_at', 'DESC')->get();
        return view('jurusan.index',compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
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
            'nama_jurusan'    =>'required'
        ]);

        jurusan::create([
            'nama_jurusan'    =>$request->nama_jurusan
        ]);

        return redirect(route('jurusan.index'))->with(['Success'=>'Data Jurusan berhasil ditambahkan!']);
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
        $jurusan = jurusan::find($id);

        return view('jurusan.edit', compact('jurusan'));
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
            'nama_jurusan'    =>'required'
        ]);

        $jurusan = jurusan::find($id);
        $jurusan->update([
            'nama_jurusan'    =>$request->nama_jurusan
        ]);

        return redirect(route('jurusan.index'))->with(['Success'=>'Data Jurusan berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jurusan::where('id',$id)->delete();
        return redirect(route('jurusan.index'))->with(['Success'=>'Data Jurusan berhasil dihapus!']);
    }
}
