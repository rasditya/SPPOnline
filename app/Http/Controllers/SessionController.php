<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],  [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib di isi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('walisiswa')->with('success', 'Berhasil Login');
        }else {

            return redirect('sesi')->withErrors('Username dan Password yang di masukan tidak valid');
        }
        
    }

    function logout(){
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil Logout');
    }

    function register()
    {
        return view('sesi/register');
    }
    function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ],  [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silakan Masukan Email yang Valid!!',
            'email.unique' => 'Email Sudah Di Gunakan, Silakan Gunakan Email lainnya',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password Minimum 6 Karakter',
        ]);
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ];
        User::create($data);
    
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
    
        if (Auth::attempt($infologin)) {
            return redirect('walisiswa')->with('success', Auth::user()->name.' Berhasil Login');
        } else {
            return redirect('sesi')->withErrors('Username dan Password yang di masukan tidak valid');
        }
    }
}
