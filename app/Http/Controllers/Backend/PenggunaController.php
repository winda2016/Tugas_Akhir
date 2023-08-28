<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pengguna.index', [
            'users' => User::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
            'no_hp' => 'required',
            'instagram' => 'required',
            'alamat' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->no_hp = $request->input('no_hp');
        $user->instagram = $request->input('instagram');
        $user->alamat = $request->input('alamat');
        $user->password = $request->input('password');
        $user->save();

        // Sesuaikan dengan logika autentikasi atau pengalihan halaman setelah pendaftaran berhasil
        return redirect('pengguna')->with('success', 'Pendaftaran berhasil! Silakan masuk dengan akun yang telah dibuat.');
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
        $user = User::findOrfail($id);
        // return view('backend.pengguna.edit');
        return view('backend.pengguna.edit', ['pengguna' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'role' => 'required',
            'no_hp' => 'required',
            'instagram' => 'required',
            'alamat' => 'required',
            'alamat' => 'required',
            'password' => 'required',
        ]);

        $user->update([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'no_hp' => $request->input('no_hp'),
            'instagram' => $request->input('instagram'),
            'alamat' => $request->input('alamat'),
            'password' => $request->input('password'),
        ]);

        return redirect('pengguna')->with('succes', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('succes', 'data berhasil dihapus.');
    }

    public function getDataPengguna(Request $req)
    {
        $datas=User::where('role', 'User')->get();
        return view('backend.pengguna.get', [
            'datas' => $datas,
        ]);
    }
}
