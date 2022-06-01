<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function homepage()
    {
        $title = "SD IT Nurussalam - Selamat datang di website kami";
        return view('homepage', compact('title'));
    }

    public function registration(Request $request) {
        $request->validate([
            'username' => 'unique:users',
            'password' => 'min:6'
        ],
        [
            'username.unique' => 'Username anda harus unik coba username lain',
            'password.min' => 'Password minimal 6 karakter'
        ]);

        User::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('login')->with('success', 'Berhasil buat akun, silahkan login disini');
    }

    public function login()
    {
        $title = "Form Login";
        return view('login', compact('title'));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::guard('guru', 'web')->attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        if(Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return back()->with('error', 'Login gagal, coba kembali.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
