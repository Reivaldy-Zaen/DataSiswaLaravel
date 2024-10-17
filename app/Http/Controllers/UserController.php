<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userss = User::all();
        return view("akun.player", compact('userss'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('akun.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            

        ]);

        $proses = User::create([
            'name' => $request->name,
           
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        if ($proses) {
            return redirect()->route('User')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('user.login')->with('failed', 'Data gagal ditambahkan');
        }

    }

    public function userLogin()
    {
        return view('akun.login');
    }


    // public function sig()
    // {
    //     return view('sig');

    // $request->validate([
    //     'email' => 'required',
    //     'password' => 'required',
    // ]);

    // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    //     $user = Auth::user();
    //     if ($user->role == 'admin') {
    //         return redirect()->route('admin.dashboard')->with('success', 'Login Success jadi admin');
    //     } else if ($user->role == 'kasir') {
    //         return redirect()->route('user.dashboard')->with('success', 'Login Success jadi kasir');

    //     }

    // }
    // return back()->withErrors([
    //     'email' => 'email atau password salah.',
    // ])->withInput($request->only('email'));


    // }

    // public function sigAunth(Request $request)
    // {
    //     //email:dns->validasi email ada @
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);
    //     //menyimpan isi form email dan pasword di variabel $user
    //     $user = $request->only(['email', 'password']);
    //     //aunth::attempt -> cek kecocokan email dan pw (HASH) (verfikasi) , kalau cocok simpann data di riwayat login (di aunth)

    //     if (Auth::attempt($user)) {
    //         //jika berhasil memverifikasi maka diarahkan ke landing page
    //         return redirect()->route('landing_page');
    //     } else {
    //         //jika gagal memverifikasi maka akan di arahkan kembali dengan pesan error
    //         return redirect()->back()->with('failed', 'email atau password salah silahkan coba kembali dengan data yang benar');

    //     }
    // }

    // public function logout()
    // {
    //     // meghapus riwayat login
    //     Auth::logout();
    //     // arahkan ke halaman login lagi
    //     return redirect()->route('sig')->with('success', 'anda sudah logout');
    // }

    public function player()
    {
        return view('akun.player');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $proses = User::where('id', $id)->delete();
        if ($proses) {
            return redirect()->back()->with('success', 'data akun berhasil!');
        } else {
            return redirect()->back()->with('failed', 'gagal mengahapus data akun');
        }
    }
}