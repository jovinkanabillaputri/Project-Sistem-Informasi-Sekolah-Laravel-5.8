<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;
use App\Jurusan;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::where('id_user', auth()->user()->id)->get();
        return view('profile.index', compact('siswa'));
    }

    public function indexKelas()
    {
        $loggedInUser = auth()->user();
        $siswa = null;

        if ($loggedInUser) {
            $siswa = Siswa::where('id_user', $loggedInUser->id)->first();
            if ($siswa) {
                $kelasId = $siswa->kelas_id;
                $siswa = Siswa::where('kelas_id', $kelasId)->get();
            }
        }

        return view('profile.index2', compact('siswa'));
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
        $user = auth()->user();
        $siswa = Siswa::where('id_user', $user->id)->find($id);

        if ($siswa) {
            $kelas = Kelas::all();
            $jurusan = Jurusan::all();

            return view('profile.edit', compact('siswa', 'kelas', 'jurusan'));
        } else {
            return redirect()->back()->with('error', 'Student data not found for the current user.');
        }
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
        $user = auth()->user();
        $siswa = Siswa::where('id_user', $user->id)->find($id);

        if ($siswa) {
            $siswa->update($request->all());

            return redirect(route('profile.index'))->with(['berhasil' => 'Siswa diperbaharui!']);
        } else {
            return redirect()->back()->with('error', 'Student data not found for the current user.');
        }

        $siswa->update();
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            $user->save();
        }
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
