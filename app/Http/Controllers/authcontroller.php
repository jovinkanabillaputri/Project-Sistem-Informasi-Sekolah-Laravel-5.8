<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Siswa;

class authcontroller extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|min:4',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt(['email' =>$request->email, 'password' => $request->password])) {
            return redirect()->back();
        }

        return redirect('/home');

    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'nis' => 'required|min:16|unique:users',
            'nama' => 'required|min:4',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ]);

        $user = User::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'password_confirmation' => bcrypt($request->password_confirmation),
            'role'=>'user',
            'foto'=>'profil.png',
        ]);

        $id= $user->id;

        $siswa = Siswa::create([
            'id_user' => $id,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'foto' => 'profil.png',
            'email' => $request->email,
        ]);

        auth()->loginUsingId($user->id);


        return redirect('/home');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
